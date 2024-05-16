<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'event_city' => 'required|in:Guayaquil,Quito',
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required|date',
            'cedula' => 'required|numeric|unique:inscriptions,cedula',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:inscriptions,email',
            'specialty' => ['required', 'in:' . implode(',', ['Eléctrico', 'Carpintero', 'Metalmecánico', 'Mecánico Automotriz', 'Línea Madera', 'Jardinería', 'General'])],
            'business_type' => ['required', 'in:' . implode(',', ['Ferretería', 'Constructora – Contratista', 'Industria', 'Independiente', 'Otros'])],
            'event_name' => ['required', 'in:' . implode(',', ['Dewalt', 'Black & Decker'])],
        ]);

        Inscription::create($request->all());

        return redirect()->route('thanks');
    }
}
