<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class LayoutBase extends Component
{
    public $breadcrumbs;
    public $title;

    public function __construct(
        $breadcrumbs = [],
        $title = null
     ) {
        // dd('hallo');
        $this->title = $title;
        $this->breadcrumbs = $breadcrumbs;
    }

    public function render()
    {
        return view('bvvblades::components.layouts.base', ['breadcrumbs' => $this->breadcrumbs]);
    }
}
