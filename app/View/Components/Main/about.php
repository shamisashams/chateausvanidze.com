<?php

namespace App\View\Components\Mian;

use Illuminate\View\Component;

class about extends Component
{
    public $page;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($page)
    {
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        // return view('components.main.about');
    }
}
