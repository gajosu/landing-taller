<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Exports\FormRecordsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class AdminFormController extends Controller
{
    public function index()
    {
        $forms = Form::latest()->paginate(10);
        // dd($forms[0]->toArray());
        return view('admin.forms.index', compact('forms'));
    }

    public function create()
    {
        return view('admin.forms.create');
    }

    public function store(Request $request)
    {
        $validationRules = [
            'name' => 'required|max:255',
            'slug' => 'required|unique:forms',
            'description' => 'required',
            'type' => 'required|in:evento,capacitacion,promocion',
            'button_text' => 'required',
            'banner_desktop' => 'required|image',
            'banner_mobile' => 'required|image',
            'meta_description' => 'required',
            'is_active' => 'boolean'
        ];

        if ($request->has('has_event')) {
            $validationRules = array_merge($validationRules, [
                'event_date' => 'required|date',
                'event_time' => 'required',
                'end_time' => 'required|after:event_time',
                'event_address' => 'required',
                'event_city' => 'required'
            ]);
        }

        $validated = $request->validate($validationRules);
        $validated['is_active'] = $request->has('is_active');

        $validated['banner_desktop'] = Storage::disk('real_public')->url(
            $request->file('banner_desktop')->store('banners', 'real_public')
        );
        $validated['banner_mobile'] = Storage::disk('real_public')->url(
            $request->file('banner_mobile')->store('banners', 'real_public')
        );

        if (!$request->has('has_event')) {
            $validated['event_date'] = null;
            $validated['event_time'] = null;
            $validated['end_time'] = null;
            $validated['event_address'] = null;
            $validated['event_city'] = null;
        }

        Form::create($validated);

        return redirect()->route('admin.forms.index')
            ->with('success', 'Formulario creado exitosamente.');
    }

    public function edit(Form $form)
    {
        return view('admin.forms.edit', compact('form'));
    }

    public function update(Request $request, Form $form)
    {
        $validationRules = [
            'name' => 'required|max:255',
            'slug' => 'required|unique:forms,slug,' . $form->id,
            'description' => 'required',
            'banner_desktop' => 'image|nullable',
            'banner_mobile' => 'image|nullable',
            'button_text' => 'required',
            'type' => 'required|in:evento,capacitacion,promocion',
            'meta_description' => 'required',
            'is_active' => 'boolean'
        ];

        if ($request->has('has_event')) {
            $validationRules = array_merge($validationRules, [
                'event_date' => 'required|date',
                'event_time' => 'required',
                'end_time' => 'required|after:event_time',
                'event_address' => 'required',
                'event_city' => 'required'
            ]);
        }

        $validated = $request->validate($validationRules);
        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('banner_desktop')) {
            $validated['banner_desktop'] = Storage::disk('real_public')->url(
                $request->file('banner_desktop')->store('banners', 'real_public')
            );
        }

        if ($request->hasFile('banner_mobile')) {
            $validated['banner_mobile'] = Storage::disk('real_public')->url(
                $request->file('banner_mobile')->store('banners', 'real_public')
            );
        }

        if (!$request->has('has_event')) {
            $validated['event_date'] = null;
            $validated['event_time'] = null;
            $validated['end_time'] = null;
            $validated['event_address'] = null;
            $validated['event_city'] = null;
        }

        $form->update($validated);

        return redirect()->route('admin.forms.index')
            ->with('success', 'Formulario actualizado exitosamente.');
    }

    public function records(Form $form)
    {
        $records = $form->records()->latest()->paginate(20);
        return view('admin.forms.records', compact('form', 'records'));
    }

    public function export(Form $form)
    {
        return Excel::download(new FormRecordsExport($form), $form->slug . '_registros.xlsx');
    }

    public function destroy(Form $form)
    {
        try {
            // Eliminar los banners si existen
            if ($form->banner_desktop) {
                $path = str_replace('/storage', '', parse_url($form->banner_desktop, PHP_URL_PATH));
                Storage::disk('real_public')->delete($path);
            }

            if ($form->banner_mobile) {
                $path = str_replace('/storage', '', parse_url($form->banner_mobile, PHP_URL_PATH));
                Storage::disk('real_public')->delete($path);
            }

            // Eliminar el formulario
            $form->delete();

            return redirect()->route('admin.forms.index')
                ->with('success', 'Formulario eliminado exitosamente.');

        } catch (\Exception $e) {
            return redirect()->route('admin.forms.index')
                ->with('error', 'No se pudo eliminar el formulario. Por favor, inténtelo de nuevo.');
        }
    }
}
