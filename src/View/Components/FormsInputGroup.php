<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class FormsInputGroup extends Component
{
    // public $name;

    public function __construct(
        public string $name,
        public string $id = '',
        public string $type = 'text',
        public string $label = '',
        public string $placeholder = '',
        public string $helper = '',
        public string $error = ''
     ) {
        if ( $id == '' ) $this->id = $name;
    }

    public function render()
    {
        return view('bvvblades::components.forms.input-group');
    }
}
