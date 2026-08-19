<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'category_name',
        'image_path',
        'sort_order',
        'is_feature',
        'is_active',
    ];

    protected $casts = [
        'is_feature' => 'boolean',
        'is_active' => 'boolean',
    ];

    protected function categorySlug(): Attribute
    {
        return Attribute::get(fn () => Str::slug($this->category_name));
    }

    protected function imageUrl(): Attribute
    {
        return Attribute::get(function () {
            // Seeded galleries point at a public asset path rather than an uploaded file.
            if (str_starts_with($this->image_path, 'assets/')) {
                return asset($this->image_path);
            }

            return Storage::disk('public')->url($this->image_path);
        });
    }
}
