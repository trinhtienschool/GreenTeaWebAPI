<?php

namespace App\View\Components;

use Illuminate\View\Component;

class About extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $des1;
    public $des2;
    public function __construct($des1,$des2)
    {
        $this->des1=$des1;
        $this->des2=$des2;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.about');
    }
}
