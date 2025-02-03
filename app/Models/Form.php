<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'event_date',
        'event_time',
        'event_address',
        'event_city',
        'banner_desktop',
        'banner_mobile',
        'button_text',
        'is_active',
        'meta_description',
        'type'
    ];

    protected $casts = [
        'event_date' => 'date',
        'is_active' => 'boolean'
    ];

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    public function records()
    {
        return $this->hasMany(FormRecord::class);
    }
}
