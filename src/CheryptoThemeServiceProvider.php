<?php

namespace EkyGalih\Cherypto;

use Illuminate\Support\ServiceProvider;

class CheryptoThemeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'cherypto');

        $this->publishes([
            __DIR__ . '/../public/assets' => public_path('themes/cherypto'),
        ], 'public');
    }

    public function register()
    {
        //
    }
}
