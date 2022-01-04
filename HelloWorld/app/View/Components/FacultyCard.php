<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FacultyCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $img;
    public $fName;
    public $fDescription;
    public function __construct($img,$fName,$fDescription)
    {
        $this->img=$img;
        $this->fName=$fName;
        $this->fDescription = $fDescription;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.faculty-card');
    }
}
