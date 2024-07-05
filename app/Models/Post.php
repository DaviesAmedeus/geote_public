<?php

namespace App\Models;

use App\Models\Writer;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

 
class Post extends Model
{
    use HasFactory;


    public static function validate($request){
        $request->validate([
            'post_title'=>'required', 
            'post_intro'=>'required|max:500', 
            'status' => 'in:Completed,Inprogress,Pending',
            'post_content'=>'required',
            'post_picture' => [File::image()->dimensions(Rule::dimensions()->maxWidth(2000)->maxHeight(1200)),],
            'author_name'=>'max:55',
            'author_photo' => [File::image()->dimensions(\Illuminate\Validation\Rule::dimensions()->maxWidth(400)->maxHeight(400)),],
            'author_desc'=>'max:500', 
        ]);
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
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
