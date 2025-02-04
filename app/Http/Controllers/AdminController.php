<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormRecord;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Obtener estadísticas básicas
        $stats = [
            'total_forms' => Form::count(),
            'active_forms' => Form::where('is_active', true)->count(),
            'total_records' => FormRecord::count(),
            'recent_records' => FormRecord::with('form')
                                        ->latest()
                                        ->take(5)
                                        ->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
