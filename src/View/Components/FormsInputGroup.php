<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class FormsInputGroup extends Component
{
    public function __construct(
        public string $name,
        public string $type = 'text',
        public string $label = '',
        public string $placeholder = '',
        public string $helper = '',
        public string $error = ''
     ) {
        // dd('hallo');
        // $this->name = $name;
        // dd($label);
        // $this->breadcrumbs = $breadcrumbs;
    }

    public function render()
    {
        return view('bvvblades::components.forms.input-group');
    }
}
