<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description_en', 'description_fr',
        'content_en', 'content_fr',
        'category',
        'main_image',
        'gallery_images',
        'technologies',
        'github_url',
        'demo_url',
        'project_date'
    ];

    protected $casts = [
        'technologies' => 'array',
        'gallery_images' => 'array',
        'project_date' => 'date'
    ];

    // Accesseur pour description
    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        return $this->attributes["description_{$locale}"] ?? $this->attributes['description_en'];
    }

    // Accesseur pour content
    public function getContentAttribute()
    {
        $locale = app()->getLocale();
        return $this->attributes["content_{$locale}"] ?? $this->attributes['content_en'];
    }
}