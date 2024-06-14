<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;
use Ramsey\Uuid\Type\Integer;

class FormsFieldset extends Component
{

    public function __construct(
        public string $type = 'default',
        public string $legend = '',
        public int $span = 0
     ) {
        if ( $this->legend != '' ) $this->type = 'default';
    }

    public function render()
    {
        return view('bvvblades::components.forms.fieldset');
    }
}
