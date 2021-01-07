<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $styled;
    // public $dismissable;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $styled = false)
    {
        $this->type = $type;
        $this->styled = $styled;
        // $this->dismissable = $dismissable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
