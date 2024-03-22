<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function render()
    {
        return view('bvvblades::components.alert');
    }
}
