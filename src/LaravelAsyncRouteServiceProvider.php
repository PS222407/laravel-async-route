<?php

namespace Jensramakers\LaravelAsyncRoute;

use Illuminate\Support\ServiceProvider;

class LaravelAsyncRouteServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/resources/views/includes' => resource_path('views/vendor/jensramakers'),
            __DIR__.'/resources/views/async' => resource_path('views/vendor/jensramakers'),
        ]);
    }
}
