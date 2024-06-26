<?php

namespace Sti\BvvBlades;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Sti\BvvBlades\View\Components\Alert;
use Sti\BvvBlades\View\Components\Table;
use Sti\BvvBlades\View\Components\FormsInput;
use Sti\BvvBlades\View\Components\LayoutBase;
use Sti\BvvBlades\View\Components\FormsButton;
use Sti\BvvBlades\View\Components\FormsFieldset;
use Sti\BvvBlades\View\Components\FormsForm;
use Sti\BvvBlades\View\Components\FormsInputGroup;

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
            LayoutBase::class,

            FormsForm::class,
            FormsFieldset::class,
            FormsButton::class,
            FormsInput::class,
            FormsInputGroup::class,

            Table::class,
            
            Alert::class,
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
