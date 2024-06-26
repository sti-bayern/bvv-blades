<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class FormsInput extends Component
{

    public function __construct(
        // $breadcrumbs = [],
        public string $name,
        public string $type = 'text',
        public string $label = '',
        public string $placeholder = ''
     ) {
        // dd($type);
        // $this->name = $name;
        // $this->breadcrumbs = $breadcrumbs;
    }

    public function render()
    {
        return view('bvvblades::components.forms.input');
    }
}
