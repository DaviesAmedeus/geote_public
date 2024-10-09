<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;

//    ----Relationships ---
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
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
