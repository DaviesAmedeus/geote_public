<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

      // Define the relationship: a category has many posts
      public function posts()
      {
          return $this->hasMany(Post::class);
      }
}
