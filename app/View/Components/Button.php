<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * @var bool
     */
    public $route;
    /**
     * @var string
     */
    public $routeName;
    /**
     * @var string
     */
    public $class;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $small;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route=false,$routeName='home',$class='primary',$message='submit',$small=false)
    {
        $this->route = $route;
        $this->routeName = $routeName;
        $this->class = $class;
        $this->message = $message;
        $this->small = $small;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
