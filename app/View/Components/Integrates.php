<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Integrates extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function integrates()
    {
        return \App\Models\Integrity::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.integrates');
    }
}
