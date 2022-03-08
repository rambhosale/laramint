<?php

namespace App\View\Components\Box;

use Illuminate\View\Component;

class sessionItem extends Component
{
    public $title;
    public $color = 'primary';


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $color = 'primary')
    {
        $this->color = $color;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.box.session-item');
    }
}
