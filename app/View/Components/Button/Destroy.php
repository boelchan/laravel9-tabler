<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Destroy extends Component
{
    public $action;
    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $label = 'data')
    {
        $this->action = $action;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button.destroy');
    }
}
