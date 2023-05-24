<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    protected $title;
    protected $description;
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $title = "Início"; 
        $description = "Página Inicial";
           
        return view('layouts.app', compact('title', 'description'));
    }
}
