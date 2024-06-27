<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class FormsSelectGroup extends Component
{
    // public $name;

    public function __construct(
        public string $id,
        public string $name,
        public array $options,
        public string $value = '',
        public string $label = '',
        public string $helper = '',
        public string $error = ''
     ) {
    }

    public function render()
    {
        return view('bvvblades::components.forms.select-group');
    }
}
