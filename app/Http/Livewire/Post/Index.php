<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.post.index', ['posts' => Post::paginate(9)]);
    }
}
