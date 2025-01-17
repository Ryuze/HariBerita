<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $outline;

    public function __construct($outline)
    {
        $this->outline = $outline;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
