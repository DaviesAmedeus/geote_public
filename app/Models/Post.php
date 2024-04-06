<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

 
class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'user_id', 'category_id', 'post_title', 'post_intro', 'post_content'
    // ];
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
