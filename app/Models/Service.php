<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Service extends Model
{
    public const DEFAULT_ICON = 'assets/images/service/customer-service.png';

    public const DEFAULT_IMAGE = 'assets/images/service/pexels-mikhail-nilov-7682204.jpg';

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'long_description',
        'icon',
        'image',
        'includes',
        'is_feature',
        'is_active',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'includes' => 'array',
        'is_feature' => 'boolean',
        'is_active' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::creating(function (Service $service) {
            if (blank($service->slug)) {
                $service->slug = static::generateUniqueSlug($service->title);
            }
        });

        static::updating(function (Service $service) {
            if (blank($service->slug)) {
                $service->slug = static::generateUniqueSlug($service->title, $service->id);
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

    protected function iconUrl(): Attribute
    {
        return Attribute::get(fn () => $this->icon
            ? Storage::disk('public')->url($this->icon)
            : asset(self::DEFAULT_ICON));
    }

    protected function imageUrl(): Attribute
    {
        return Attribute::get(fn () => $this->image
            ? Storage::disk('public')->url($this->image)
            : asset(self::DEFAULT_IMAGE));
    }
}
