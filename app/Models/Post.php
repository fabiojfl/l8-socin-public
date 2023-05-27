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
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    protected static function booted()
    {
        static::creating(function ($model) {
            $model->user_id = auth()->user()->id;
        });
    }
}
