<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * @var string
     */
    public $label;
    /**
     * @var array
     */
    public $array;
    public $name;
    /**
     * @var bool
     */
    public $multiple;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label="Selected Title",$array=[],$name='selected_name',$multiple=false)
    {
        //
        $this->label = $label;
        $this->array = $array;
        $this->name = $name;
        $this->multiple = $multiple;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select');
    }
}
