<?php

namespace Sti\BvvBlades\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{

    public string $svg;
    private array $types = ['solid', 'regular'];

    public function __construct(public string $name, public string $type = 'solid')
    {
        if ( in_array($type, $this->types) ) $this->type = $type;
        $this->svg = $this->loadSvg($name, $type);
    }

    protected function loadSvg(string $name, string $type): string
    {
        $path = __DIR__ . '/../../../resources/icons/' . $type . '/' . $name . '.svg';

        if (!file_exists($path)) {
            return '';
        }

        return file_get_contents($path);
    }

    public function render()
    {
        return view('bvvblades::components.components.icon');
    }
}