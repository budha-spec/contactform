<?php

namespace Budhaspec\Contactform;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
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
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'contactform');
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/contactform'),
        ], 'public');
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('contactform.php'),
        ], 'contactform-config');
    }
}
