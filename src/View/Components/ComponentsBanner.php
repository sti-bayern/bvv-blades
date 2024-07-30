<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class ComponentsBanner extends Component
{

    public function __construct(
        public string $src
     ) {
    }

    public function render()
    {
        return view('bvvblades::components.components.banner');
    }
}
