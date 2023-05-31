<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class Create extends Component
{
    public $title;
    public $subtitle;
    public $content;
    
    public function submit()
    {
        $data = $this->validate([
            'title' => 'required|max:75',
            'subtitle' => 'max:255',
            'content' => 'required',
        ]);
dd($data);
        Post::create([
            'title' => $data['title'],
            'subtitle' => $data['subtitle'],
            'content' => $data['content']
        ]);

        return redirect()->to('postImages.create');
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
