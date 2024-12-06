<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\ReturnTypePass;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug'];

    function Posts(){
          return $this->hasMany(Post::class);

    }

}
