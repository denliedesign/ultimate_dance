<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dance extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $day;
    public $time;
    public $name;
    public $age;

    public function __construct($day, $time, $name, $age)
    {
        $this->day = $day;
        $this->time = $time;
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dance');
    }
}
