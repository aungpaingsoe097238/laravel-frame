<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $route;
    /**
     * @var string
     */
    public $routeName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title='Card Title',$route=null,$routeName=null)
    {
        $this->title = $title;
        $this->route = $route;
        $this->routeName = $routeName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
