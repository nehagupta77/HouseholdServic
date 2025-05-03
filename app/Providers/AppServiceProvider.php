<?php

namespace App\Providers;
use App\Services\SiteSettingService;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SiteSettingService::class, function () {
            return new SiteSettingService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            try {
                $settings = app(SiteSettingService::class);
                $view->with('globalSettings', $settings);
            } catch (\Exception $e) {
                $view->with('globalSettings', null);
            }
        });
    }
}
