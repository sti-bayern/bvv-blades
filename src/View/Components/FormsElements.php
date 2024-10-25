<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class FormsElements extends Component
{
    public array $elements = [];

    public function __construct(
        array $elements,
        array $options = [],    // select
        array $item = []        // select
    ) {
        foreach ($elements as $key => $value) {
            // element
            $this->elements[$key]['element'] = $value[0];
            // label
            $this->elements[$key]['label'] = $value[1];
            // options
            $this->elements[$key]['options'] = [];
            if ( isset($options[$key]) && is_array($options[$key]) ) $this->elements[$key]['options'] = $options[$key];
            // values
            $this->elements[$key]['value'] = '';
            if ( isset($item[$key]) && !is_array($item[$key]) ) $this->elements[$key]['value'] = $item[$key];
            if ( old($key) ) $this->elements[$key]['value'] = old($key);
            // checked
            $this->elements[$key]['checked'] = false;
            if ( isset($item[$key]) ) $this->elements[$key]['checked'] = old($key, $item[$key]) == $this->elements[$key]['value'];
            // helper
            $this->elements[$key]['helper'] = null;
            if ( isset($value[2]) && !is_array($value[2]) ) $this->elements[$key]['helper'] = $value[2];
        }
    }

    public function render()
    {
        return view('bvvblades::components.forms.elements');
    }
}
