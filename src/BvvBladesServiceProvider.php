<?php

namespace Sti\BvvBlades;

use Illuminate\Support\ServiceProvider;
use Sti\BvvBlades\View\Components\Krompi;
use Sti\BvvBlades\View\Components\Layout\Test;
use Sti\BvvBlades\View\Components\Layouts\Base;
use Sti\BvvBlades\View\Components\Alert;

class BvvBladesServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bvvblades');
    }

    public function boot()
    {

        if ($this->app->runningInConsole()) {
            // Publish views
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/bvvblades'),
            ], 'views');
        }
    }
}
