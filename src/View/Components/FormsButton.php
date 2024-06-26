<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class FormsButton extends Component
{

    public function __construct(
        public string $link = '',
        // $breadcrumbs = [],
        // $title = null
     ) {
        // dd('hallo');
        // $this->title = $title;
        // $this->breadcrumbs = $breadcrumbs;
    }

    public function render()
    {
        return view('bvvblades::components.forms.button');
    }
}
