<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostImage extends Model
{
    use HasFactory;

    public $post;


    protected $fillable = [
        'post_photo_path',
        'post_id'
    ];



    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->post_id =  DB::table('posts')->count();          
        });
    }

}
