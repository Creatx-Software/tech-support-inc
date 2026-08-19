<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('frontend.components.header', function ($view) {
            $view->with('navFeaturedServices', Service::where('is_active', true)
                ->where('is_feature', true)
                ->orderBy('id')
                ->get());
        });
    }
}
