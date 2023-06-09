<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'status',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post_images()
    {
       return $this->hasMany(PostImage::class);
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->user_id = auth()->user()->id;
            $model->status = "yes";
        });
    }
}
