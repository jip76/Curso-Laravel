<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title','slug'];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
    use HasFactory;
}
