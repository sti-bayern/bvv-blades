<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class Accordion extends Component
{
    public string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('bvvblades::components.components.accordion');
    }
}
