<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_city',
        'firstname',
        'lastname',
        'birthday',
        'cedula',
        'phone',
        'email',
        'specialty',
        'business_type',
        'event_name',
    ];
}
