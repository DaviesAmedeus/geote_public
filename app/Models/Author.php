<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;

    public static function validate($request){
       return $request->validate(
            [
                'author_name'=>['required', 'unique:authors,author_name'],
                'author_bio'=>'max:550',
                'author_profile_pic' => [ File::image()->dimensions(Rule::dimensions()->maxWidth(400)->maxHeight(400)),],
            ]
        );
    }


    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function blog(): HasMany
    {
        return $this->hasMany(Blog::class);
    }
}
