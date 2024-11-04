<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class FormsUpload extends Component
{
    public function __construct(
        public string $name,
        public string $id = '',
     ) {
        if ( $id == '' ) $this->id = $name;
    }

    public function render()
    {
        return view('bvvblades::components.forms.upload');
    }
}
