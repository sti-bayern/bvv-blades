<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class LayoutBase extends Component
{

    public function __construct(
        public array $breadcrumbs = [],
        public string $title = ''
     ) {
    }

    public function render()
    {
        return view('bvvblades::components.layouts.base', ['breadcrumbs' => $this->breadcrumbs]);
    }
}
