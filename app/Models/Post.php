<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    // Define the relationship: a post belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship: a post belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
