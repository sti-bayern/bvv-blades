<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class ComponentsBanner extends Component
{
    protected array $sizes = ['s', 'm', 'l'];

    public function __construct(
        public string $src, 
        public string $alt = '', 
        public string $size = 'm'
    )
    {
        $this->size = in_array($size, $this->sizes) ? $size : 'm';
    }

    public function render()
    {
        return view('bvvblades::components.components.banner');
    }
}
