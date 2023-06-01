<?php

namespace App\Http\Livewire\Post;

use App\Models\PostImage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class CreateImages extends Component
{
    
    public $files = [];
    public $post_photo_path;

    use WithFileUploads;

    public function mount()
    {
        $this->files = PostImage::all();
    }

    public function updatePostImage()
    {
        //$this->validate(['post_photo_path' => 'required']);
    }

    public function upload()
    {
       //$this->validate([ 'post_photo_path' => 'required|image|max:1024']);

        $filename = Str::slug($this->files);
        $path = $this->post_photo_path->store('post-images', $filename);
       // $filename = $this->post_photo_path->store('/', 'files');

        PostImage::create(['path' => $path]);

        //$this->files = PostImage::all();


    }
    
    public function render()
    {
        return view('livewire.post.create-images');
    }
}
