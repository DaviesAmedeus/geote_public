<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Publication extends Model
{
    use HasFactory;

//    Relationships
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

//    other custom methods
    public function image()
    {
        if(str_starts_with($this->image, 'http')){
            return $this->image;
        }

        return '/storage/'.$this->image;
    }
}
