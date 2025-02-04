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
        $validated = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:forms',
            'description' => 'required',
            'type' => 'required|in:evento,capacitacion,promocion',
            'button_text' => 'required',
            'banner_desktop' => 'required|image',
            'banner_mobile' => 'required|image',
            'meta_description' => 'required'
        ]);

        $validated['banner_desktop'] = Storage::url($request->file('banner_desktop')->store('banners'));
        $validated['banner_mobile'] = Storage::url($request->file('banner_mobile')->store('banners'));

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
        $validated = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:forms,slug,' . $form->id,
            'description' => 'required',
            'banner_desktop' => 'image|nullable',
            'banner_mobile' => 'image|nullable',
            'button_text' => 'required',
            'type' => 'required|in:evento,capacitacion,promocion',
            'meta_description' => 'required'
        ]);

        if ($request->hasFile('banner_desktop')) {
            $validated['banner_desktop'] = $request->file('banner_desktop')->store('banners', 'public');
        }

        if ($request->hasFile('banner_mobile')) {
            $validated['banner_mobile'] = $request->file('banner_mobile')->store('banners', 'public');
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
}
