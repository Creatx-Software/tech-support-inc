<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PricingPlan extends Model
{
    public const DEFAULT_IMAGE = 'assets/images/home/pexels-michael-burrows-7129688.jpg';

    protected $fillable = [
        'title',
        'slug',
        'badge',
        'price_amount',
        'price_period',
        'description',
        'features',
        'image',
        'is_popular',
        'is_feature',
        'is_active',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'price_amount' => 'decimal:2',
        'features' => 'array',
        'is_popular' => 'boolean',
        'is_feature' => 'boolean',
        'is_active' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::creating(function (PricingPlan $plan) {
            if (blank($plan->slug)) {
                $plan->slug = static::generateUniqueSlug($plan->title);
            }
        });

        static::updating(function (PricingPlan $plan) {
            if (blank($plan->slug)) {
                $plan->slug = static::generateUniqueSlug($plan->title, $plan->id);
            }
        });
    }

    public static function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $slug = Str::slug($title);
        $original = $slug;
        $count = 1;

        while (
            static::where('slug', $slug)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$original}-{$count}";
            $count++;
        }

        return $slug;
    }

    protected function imageUrl(): Attribute
    {
        return Attribute::get(fn () => $this->image
            ? Storage::disk('public')->url($this->image)
            : asset(self::DEFAULT_IMAGE));
    }

    protected function priceLabel(): Attribute
    {
        return Attribute::get(fn () => $this->price_amount !== null
            ? '£'.rtrim(rtrim(number_format((float) $this->price_amount, 2), '0'), '.')
            : 'Varies');
    }
}
