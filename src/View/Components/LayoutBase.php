<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class LayoutBase extends Component
{
    public $breadcrumb;
    public $title;

    public function __construct(
        $breadcrumb = [],
        $title = null
     ) {
        // dd('hallo');
        $this->title = $title;
        $this->breadcrumb = $breadcrumb;
    }

    public function render()
    {
        return view('bvvblades::components.layouts.base', ['breadcrumb' => $this->breadcrumb]);
    }
}
