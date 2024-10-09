<?php

namespace App\Models;

use App\Models\Writer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;



    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    // Define the relationship: a post belongs to a category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }

    //    ----Other Methods ---
    public function image()
    {
        if(str_starts_with($this->image, 'http')){
            return $this->image;
        }

        return '/storage/'.$this->image;
    }
}
