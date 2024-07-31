<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class ComponentsBanner extends Component
{
    public string $src;
    public string $alt;

    public function __construct(string $src, string $alt = '')
    {
        $this->src = $src;
        $this->alt = $alt;
    }

    public function render()
    {
        return view('bvvblades::components.components.banner');
    }
}
