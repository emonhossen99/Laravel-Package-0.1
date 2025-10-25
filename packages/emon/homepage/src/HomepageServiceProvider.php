<?php

namespace Emon\Homepage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class HomepageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'homepage');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/homepage'),
        ], 'views');
    }

    public function register()
    {
        //
    }
}
