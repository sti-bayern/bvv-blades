<?php

namespace Sti\BvvBlades;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Sti\BvvBlades\View\Components\Alert;
use Sti\BvvBlades\View\Components\Table;
use Sti\BvvBlades\View\Components\LayoutBase;

class BvvBladesServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'bvvblades');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bvvblades');
    }

    public function boot()
    {
        $this->loadViewComponentsAs('bvvblades', [
            Alert::class,
            LayoutBase::class,
            Table::class,
        ]);
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bvvblades');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'bvvblades');

        Paginator::defaultView('bvvblades::paginator');
        

        if ($this->app->runningInConsole()) {
            // Publish config
            $this->publishes([
              __DIR__.'/../config/config.php' => config_path('bvvblades.php'),
            ], 'config');
        
            // Publish views
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/bvvblades'),
            ], 'views');
        }
    }
}
