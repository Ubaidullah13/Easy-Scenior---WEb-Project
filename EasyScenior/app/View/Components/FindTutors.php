<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FindTutors extends Component
{
    public $Img;
    public $Fname;
    public $maj;
    public $ins;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($Img,$Fname,$maj,$ins)
    {
        $this->Img = $Img;
        $this->Fname = $Fname;
        $this->maj = $maj;
        $this->ins = $ins;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.find-tutors');
    }
}
