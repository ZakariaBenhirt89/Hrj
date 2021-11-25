<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;

class Uploader extends Component
{
    /* attributes*/
    public $url;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.uploader');
    }
    public function boot()
    {
        Blade::component('upload', Uploader::class);
    }
}
