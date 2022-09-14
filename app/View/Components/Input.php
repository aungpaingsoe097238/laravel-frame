<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    /**
     * @var bool
     */
    public $multiple;
    /**
     * @var null
     */
    public $defaultValue;
    /**
     * @var null
     */
    public $form;
    /**
     * @var null
     */
    public $placeholder;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label='Input Label',$name='Input Name',$type='text',$multiple=false,$placeholder='',$defaultValue=null,$form=null)
    {
        //
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->multiple = $multiple;
        $this->defaultValue = $defaultValue;
        $this->form = $form;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
