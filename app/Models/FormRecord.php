<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormRecord extends Model
{
    protected $fillable = [
        'form_id',
        'firstname',
        'lastname',
        'birthday',
        'cedula',
        'phone',
        'email',
        'city',
        'specialty',
        'business_type',
        'status' // para manejar estados como: pending, confirmed, attended, etc.
    ];

    protected $casts = [
        'birthday' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
