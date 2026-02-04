<?php

namespace Sti\BvvBlades\View\Components\Layouts;

use Illuminate\View\Component;

class Container extends Component
{

    public function __construct() 
    {
    }

    public function render()
    {
        return view('bvvblades::components.layouts.container');
    }
}
