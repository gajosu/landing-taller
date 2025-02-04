<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Muestra un formulario específico por su slug
     */
    public function show($slug)
    {
        $form = Form::where('slug', $slug)
                    ->where('is_active', true)
                    ->firstOrFail();

        // Establecer el título de la página y meta descripción
        view()->share('siteTitle', $form->name);
        view()->share('meta_description', $form->meta_description);

        return view('forms.show', compact('form'));
    }

    /**
     * Lista todos los formularios activos (opcional, por si necesitas una página de índice)
     */
    public function index()
    {
        $forms = Form::where('is_active', true)
                     ->orderBy('event_date', 'asc')
                     ->get();

        return view('forms.index', compact('forms'));
    }

    /**
     * Muestra la página de agradecimiento después de una inscripción exitosa
     */
    public function thanks()
    {
        return view('forms.thanks');
    }

    public function events()
    {
        $forms = Form::where('type', 'evento')
                     ->where('is_active', true)
                     ->orderBy('event_date', 'asc')
                     ->get();

        return view('forms.index', [
            'forms' => $forms,
            'title' => 'Eventos',
            'meta_description' => 'Descubre nuestros próximos eventos'
        ]);
    }

    public function trainings()
    {
        $forms = Form::where('type', 'capacitacion')
                     ->where('is_active', true)
                     ->orderBy('event_date', 'asc')
                     ->get();

        return view('forms.index', [
            'forms' => $forms,
            'title' => 'Capacitaciones',
            'meta_description' => 'Nuestras capacitaciones disponibles'
        ]);
    }

    public function promotions()
    {
        $forms = Form::where('type', 'promocion')
                     ->where('is_active', true)
                     ->orderBy('event_date', 'asc')
                     ->get();

        return view('forms.index', [
            'forms' => $forms,
            'title' => 'Promociones',
            'meta_description' => 'Promociones especiales disponibles'
        ]);
    }
}
