<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class FormsRadio extends Component
{

    public function __construct(
        public string $id = '',
        public string $name,
        public array $options,
        public string $value = ''
     ) {
        if ( $id == '' ) $this->id = $name;
    }

    public function render()
    {
        return view('bvvblades::components.forms.radio');
    }
}
