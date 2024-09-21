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


    public static function validate($request){
       return $request->validate([
            'post_title'=>'required',
            'post_intro'=>'required|max:500',
            'status' => 'in:Completed,Inprogress,Pending',
            'post_content'=>'required',
            'post_picture' => [File::image()->dimensions(Rule::dimensions()->maxWidth(2000)->maxHeight(1200)),],


        ]);
    }


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
}
