<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorteo extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'cedula',
        'phone',
        'email',
        'business_type',
        'factura',
        'lugar',
        'ciudad',
        'monto',
        'fecha',
        'imagen',
    ];
}
