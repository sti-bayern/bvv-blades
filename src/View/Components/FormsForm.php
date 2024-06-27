<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class FormsForm extends Component
{
    public array $methods = [
        'get'       => 'get',
        'post'      => 'post',
        'patch'     => 'post',
        'put'       => 'post',
        'delete'    => 'post',
    ];
    public string $form_method = 'get';

    public function __construct(
        public string $action,
        public string $method = 'post',
     ) {
        if ( !isset($this->methods[strtolower($method)]) ) $this->method = 'get';
        $this->form_method = $this->methods[strtolower($method)];
    }

    public function render()
    {
        return view('bvvblades::components.forms.form');
    }
}
