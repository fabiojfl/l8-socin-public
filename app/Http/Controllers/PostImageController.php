<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostImage;
use Illuminate\Support\Facades\DB;

class PostImageController extends Controller
{
    public $post_image;

    public function __construct(PostImage $post_image)
    {
        $this->post_image = $post_image;
    }

    public function create()
    {
        return view('postImages.create');
    }

    public function store(Request $request)
    {
        //dd(DB::table('posts')->latest()->first());
        //dd(DB::table('posts')->count());

        return $this->post_image->create($request->all());
    }
}
