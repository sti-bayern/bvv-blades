<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class FormsCheckbox extends Component
{
    public function __construct(
        public string $name,
        public string $id = '',
        public string $value = '1'
     ) {
        if ( $id == '' ) $this->id = $name;
    }

    public function render()
    {
        return view('bvvblades::components.forms.checkbox');
    }
}
