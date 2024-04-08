<?php

namespace Sti\BvvBlades\View\Components\Layouts;

use Illuminate\View\Component;

class Base extends Component
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function render()
    {
        return view('bvvblades::components.layouts.base');
    }
}
