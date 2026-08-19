<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Testimonial extends Model
{
    public const DEFAULT_AVATAR = 'assets/images/testimonial/1.webp';

    protected $fillable = [
        'name',
        'avatar',
        'review_date',
        'rating',
        'review',
        'sort_order',
        'is_feature',
        'is_active',
    ];

    protected $casts = [
        'review_date' => 'date',
        'rating' => 'decimal:1',
        'is_feature' => 'boolean',
        'is_active' => 'boolean',
    ];

    protected function avatarUrl(): Attribute
    {
        return Attribute::get(function () {
            if (! $this->avatar) {
                return asset(self::DEFAULT_AVATAR);
            }

            // Seeded testimonials point at a public asset path rather than an uploaded file.
            if (str_starts_with($this->avatar, 'assets/')) {
                return asset($this->avatar);
            }

            return Storage::disk('public')->url($this->avatar);
        });
    }
}
