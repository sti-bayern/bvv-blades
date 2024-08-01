<?php

namespace Sti\BvvBlades;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Sti\BvvBlades\View\Components\Alert;
use Sti\BvvBlades\View\Components\Table;
use Sti\BvvBlades\View\Components\FormsForm;
use Sti\BvvBlades\View\Components\FormsGroup;
use Sti\BvvBlades\View\Components\FormsInput;
use Sti\BvvBlades\View\Components\LayoutBase;
use Sti\BvvBlades\View\Components\FormsButton;
use Sti\BvvBlades\View\Components\FormsSelect;
use Sti\BvvBlades\View\Components\FormsElements;
use Sti\BvvBlades\View\Components\FormsFieldset;
use Sti\BvvBlades\View\Components\FormsTextarea;
use Sti\BvvBlades\View\Components\LayoutContainer;
use Sti\BvvBlades\View\Components\Accordion;
use Sti\BvvBlades\View\Components\AccordionItem;

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
            LayoutContainer::class,

            ComponentsBanner::class,

            FormsForm::class,
            FormsFieldset::class,
            FormsElements::class,
            FormsGroup::class,
            FormsButton::class,
            FormsInput::class,
            FormsSelect::class,
            FormsTextarea::class,
            FormsCheckbox::class,
            FormsRadio::class,

            Table::class,
            
            Alert::class,
            Accordion::class,
            AccordionItem::class,
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
