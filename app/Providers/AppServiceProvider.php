<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Firebase\Auth\Token\Verifier;

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
        $this->app->singleton(Verifier::class, function ($app) {
            return new Verifier(config('firebase.project_id'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__ . '/config.php' => config_path('firebase.php'),
        ]);
    }
}
