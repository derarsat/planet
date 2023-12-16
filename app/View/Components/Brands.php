<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Brands extends Component
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


    public function brands()
    {
        return \App\Models\Brand::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.brands');
    }
}
