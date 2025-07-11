<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ViewServiceProvider extends ServiceProvider
{
    public const PER_PAGE = 10;
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        $assetDir = LaravelLocalization::getCurrentLocale() == 'ar' ? 'admin-rtl' : 'admin';
        $locale = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';

        View::share([
            'assetDir' => $assetDir,
            'locale' => $locale,
        ]);

        // bootstrap
            Paginator::useBootstrapFive();

    }
}
