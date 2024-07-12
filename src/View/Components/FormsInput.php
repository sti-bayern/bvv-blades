<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class FormsInput extends Component
{
    private array $types = [
        'text', 'date', 'hidden', 'email', 'number', 'password', 'url', 'tel'
    ];

    public function __construct(
        // $breadcrumbs = [],
        public string $name,
        public string $id = '',
        public string $type = 'text',
        public string $placeholder = ''
     ) {
        if ( !in_array($type, $this->types) ) $this->type = 'text';
        if ( $id == '' ) $this->id = $name;
    }

    public function render()
    {
        return view('bvvblades::components.forms.input');
    }
}
