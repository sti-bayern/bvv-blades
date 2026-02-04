<?php

namespace Sti\BvvBlades\View\Components\Forms;

use Illuminate\View\Component;

class Textarea extends Component
{
    public function __construct(
        public string $name,
        public string $id = '',
        public string $placeholder = ''
     ) {
        if ( $id == '' ) $this->id = $name;
    }

    public function render()
    {
        return view('bvvblades::components.forms.textarea');
    }
}
