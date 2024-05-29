<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $type;
    public $heads;
    public $rows;

    public function __construct(
        $type = null,
        $heads = null,
        $rows = null,
    ) {
        $this->type = $type;
        $this->heads = $heads;
        $this->rows = $rows;
    }

    public function render()
    {
        if ( is_array($this->heads) ) {
            return view(
                'bvvblades::components.tables.table',
                [
                    'heads' => $this->heads,
                    'rows' => $this->rows
                ]
            );
        }
        if ($this->type == 'table') return view('bvvblades::components.tables.table');
        if ($this->type == 'head') return view('bvvblades::components.tables.thead');
    }
}
