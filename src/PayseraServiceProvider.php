<?php

namespace Donatis\Paysera;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class PayseraServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('paysera.php'),
			__DIR__.'/../views/paysera/accept.blade.php' => resource_path('views/application/paysera/accept.blade.php'),
			__DIR__.'/../views/paysera/cancel.blade.php' => resource_path('views/application/paysera/cancel.blade.php')
        ]);
    }

    /**
     * Register the application services.
     *
     *
     *
     * @return void
     */
    public function register()
    {
        require_once(__DIR__.'/../lib/WebToPay.php');

        $this->app->singleton('paysera', function() {
            return new PayseraManager();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['paysera'];
    }
}
