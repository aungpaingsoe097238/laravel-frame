<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Container extends Component
{
    public $cols , $layout ;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($layout='layouts.app', $cols=null)
    {
        $this->cols = $cols;
        $this->layout = $layout;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.container');
    }
}
