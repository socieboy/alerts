<?php

namespace Socieboy\Alerts;

use Illuminate\Support\ServiceProvider;

class AlertServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishFiles();

        $this->loadViewsFrom(__DIR__.'/Views', 'Alerts');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/helpers.php';
    }

    /**
     * Publish the style and scripts for the sweetalert.
     */
    protected function publishFiles()
    {
        $this->publishes([

            __DIR__.'/libraries/sweetalert.css' => public_path('css/sweetalert.css'),

            __DIR__.'/libraries/sweetalert.js' => public_path('js/sweetalert.js'),

        ], 'alerts');
    }
}
