<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormRecord;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FormRecordController extends Controller
{
    public function store(Request $request, $slug)
    {
        $form = Form::where('slug', $slug)
                    ->where('is_active', true)
                    ->firstOrFail();

        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthday' => 'required|date',
            'cedula' => [
                'required',
                'string',
                Rule::unique('form_records')->where(function ($query) use ($form) {
                    return $query->where('form_id', $form->id);
                }),
            ],
            'phone' => 'required|string|max:20',
            'email' => [
                'required',
                'email',
                Rule::unique('form_records')->where(function ($query) use ($form) {
                    return $query->where('form_id', $form->id);
                }),
            ],
            'specialty' => ['required', 'in:Eléctrico,Metalmecánico,Mecánico Automotriz,Línea Madera,Jardinería,General'],
            'business_type' => ['required', 'in:Ferretería,Constructora – Contratista,Industria,Independiente,Otros'],
        ]);

        FormRecord::create([
            'form_id' => $form->id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'birthday' => $request->birthday,
            'cedula' => $request->cedula,
            'phone' => $request->phone,
            'email' => $request->email,
            'specialty' => $request->specialty,
            'business_type' => $request->business_type,
            'status' => 'pending'
        ]);

        return redirect()->route('thanks');
    }
}
