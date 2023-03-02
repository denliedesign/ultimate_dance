<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Room extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $room;
    public $time;
    public $name;
    public $age;
    public $staff;

    public function __construct($room, $time, $name, $age, $staff)
    {
        $this->room = $room;
        $this->time = $time;
        $this->name = $name;
        $this->age = $age;
        $this->staff = $staff;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.room');
    }
}
