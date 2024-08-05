<?php

namespace App\Http\Controllers;

use App\Models\Sorteo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SorteoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'cedula' => [
                'required',
                'numeric',
            ],
            'phone' => 'required|numeric',
            'email' => [
                'required',
                'email',
            ],
            'business_type' => ['required', 'in:' . implode(',', ['Ferretería', 'Constructora – Contratista', 'Industria', 'Independiente', 'Otros', 'Usuario final'])],
            'factura' => 'required',
            'lugar' => 'required',
            'ciudad' => 'required',
            'monto' => 'required',
            'fecha' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // put imagen with laravel storage
        $file = Storage::putFile('public/sorteo', $request->file('imagen'));
        $url = Storage::url('sorteo/' . $file);
        $request->merge(['imagen' => $url]);
        Sorteo::create($request->except(['_token']));

        return redirect()->route('thanks');
    }
}
