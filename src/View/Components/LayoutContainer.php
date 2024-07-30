<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class LayoutContainer extends Component
{

    public function __construct() 
    {
    }

    public function render()
    {
        return view('bvvblades::components.layouts.container');
    }
}
