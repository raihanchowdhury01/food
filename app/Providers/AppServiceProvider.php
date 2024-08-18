<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Custom redirect for 404 or 405 errors
        $this->app['router']->fallback(function () {
            return redirect('/');
        });
    }

    public function register()
    {
        //
    }
}
