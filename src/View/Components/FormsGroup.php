<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class FormsGroup extends Component
{

    public function __construct(
        // default
        public string $element,
        public string $name,
        public string $id = '',
        public string $placeholder = '',
        public string $value = '',
        public string $label = '',
        public string $helper = '',
        public string $error = '',
        // select
        public array $options = [],
        // input
        public string $type = 'text',
     ) {
        if ( $id == '' ) $this->id = $name;
    }

    public function render()
    {
        return view('bvvblades::components.forms.group');
    }
}
