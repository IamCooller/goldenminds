<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (file_exists($assetsFile = __DIR__ . '/../../resources/assets/assets.php')) {
            include $assetsFile;
        }
        $this->loadViewsFrom(__DIR__.'/../../resources/views/vendor/translation-manager', 'translation-manager');
    }
}
