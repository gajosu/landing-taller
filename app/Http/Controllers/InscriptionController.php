<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InscriptionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'event_city' => 'required|in:Guayaquil,Quito,Santo Domingo,Ibarra,Duran,Puempo,Manta,Tulcan',
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required|date',
            'cedula' => [
                'required',
                'numeric',
                Rule::unique('inscriptions')->where(function ($query) use ($request) {
                    return $query->where('event_name', $request->event_name);
                }),
            ],
            'phone' => 'required|numeric',
            'email' => [
                'required',
                'email',
                Rule::unique('inscriptions')->where(function ($query) use ($request) {
                    return $query->where('event_name', $request->event_name);
                }),
            ],
            'specialty' => ['required', 'in:' . implode(',', ['Eléctrico', 'Carpintero', 'Metalmecánico', 'Mecánico Automotriz', 'Línea Madera', 'Jardinería', 'General'])],
            'business_type' => ['required', 'in:' . implode(',', ['Ferretería', 'Constructora – Contratista', 'Industria', 'Independiente', 'Otros', 'Usuario final'])],
            'event_name' => ['required', 'in:' . implode(',', [
                'Dewalt',
                'Black & Decker',
                'Stanley Golpe y Corte',
                'Stanley Herramientas Electricas e Inalambricas',
                'Stanley Herramientas Manuales',
                'Stanley Herramientas Medición y Almacenamiento',
                'Stanley Herramientas de Fijación y Destornilladores',
                'Dewalt 29 de Junio',
                'SBD',
                'Activaciones',
                'Dewalt Taller ibarra',
                'Taller Durán',
                'Taller Puempo',
                'Taller Manta',
                'Taller Tulcan'
            ])],
        ]);
        Inscription::create($request->all());

        return redirect()->route('thanks');
    }
}
