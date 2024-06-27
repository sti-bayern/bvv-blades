<?php

namespace Sti\BvvBlades\View\Components;

use stdClass;
use Ramsey\Uuid\Type\Integer;
use Illuminate\View\Component;

class FormsElements extends Component
{

    public function __construct(
        public array $elements,
        public array $options = [],             // select
        public array $item = []      // select
     ) {
    }

    public function render()
    {
        return view('bvvblades::components.forms.elements');
    }
}
