<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'title_en', 'title_fr',
        'description_en', 'description_fr',
        'technologies',
        'project_date'
    ];

    protected $casts = [
        'technologies' => 'array',
        'project_date' => 'date'
    ];

    // Accesseur pour le titre
    public function getTitleAttribute()
    {
        $locale = app()->getLocale();
        return $this->attributes["title_{$locale}"] ?? $this->attributes['title_en'];
    }

    // Accesseur pour description
    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        return $this->attributes["description_{$locale}"] ?? $this->attributes['description_en'];
    }
}
