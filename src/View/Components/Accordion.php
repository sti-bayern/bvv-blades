<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class Accordion extends Component
{
    private array $header_levels = [2, 3, 4];
    private array $aligns = ['left', 'center', 'right'];
    public bool $nested = false;

    public function __construct(
        public string $title,
        public int $level = 3,
        public string $align = 'center',
    )
    {
        if ( !in_array($level, $this->header_levels) ) $this->level = 3;
        if ( in_array($align, $this->aligns) ) $this->align = $align;
    }

    public function render()
    {
        return view('bvvblades::components.components.accordion');
    }
}
