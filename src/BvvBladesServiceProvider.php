<?php

namespace Sti\BvvBlades;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class BvvBladesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'bvvblades');
    }

    public function boot()
    {
        $prefix = config('bvvblades.prefix', 'bvvblades');

        // Automatically register all components under the configured prefix
        Blade::componentNamespace('Sti\\BvvBlades\\View\\Components', $prefix);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bvvblades');
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'bvvblades');

        Paginator::defaultView('bvvblades::paginator');

        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    protected function bootForConsole()
    {
        // Publish config
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('bvvblades.php'),
        ], 'config');

        // Publish views
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/bvvblades'),
        ], 'views');

        // Publish assets (Tailwind preset)
        $this->publishes([
            __DIR__ . '/../tailwind-preset.js' => base_path('tailwind-preset.js'),
        ], 'tailwind');
    }
}
