<?php

namespace Sti\BvvBlades\View\Components\Forms;

use Illuminate\View\Component;

class Button extends Component
{

    public function __construct(
        public string $link = '',
     ) {
    }

    public function render()
    {
        return view('bvvblades::components.forms.button');
    }
}
