<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Create extends Component
{
    public $input;
    
    public function render()
    {
        return view('livewire.post.create');
    }
}
