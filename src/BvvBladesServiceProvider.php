<?php

namespace Sti\BvvBlades;

use Illuminate\Support\ServiceProvider;
use Sti\BvvBlades\View\Components\Alert;

class BvvBladesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bvvblades');
    }

    public function boot()
    {
        $this->loadViewComponentsAs('bvvblades', [
            Alert::class,
        ]);
    }
}
