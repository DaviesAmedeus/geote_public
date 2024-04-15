<?php

namespace App\Models;

use App\Models\Writer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

 
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

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }
}
