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

    

//     public function setId($id){
//          $this->attributes['id'] = $id;
//     }

//     public function getPostTitle(){
//         return $this->attributes['post_title'];
//     }

//     public function setPostTitle($post_title){
//          $this->attributes['post_title'] = $post_title;
//     }

//     public function getPostIntro(){
//         return $this->attributes['post_intro'];
//     }

//     public function setPostIntro($post_intro){
//          $this->attributes['post_intro'] = $post_intro;
//     }


//     public function getPostContent(){
//         return $this->attributes['post_content'];
//     }

//     public function setPostContent($post_content){
//          $this->attributes['post_content'] = $post_content;
//     }

//     public function getPostPicture(){
//        return  $this->attributes['id'];
//    }

//    public function setPostPicture($post_picture){
//     $this->attributes['id'] = $post_picture;
//     }

//     public function getAuthorName(){
//         return $this->attributes['author_name'];
//     }

//     public function setAuthorName($author_name){
//         $this->attributes['author_name'] =$author_name;
//     }

//     public function getAuthorPhoto(){
//         return $this->attributes['author_photo'];
//     }

//     public function setAuthorPhoto($author_photo){
//         return $this->attributes['author_photo'] = $author_photo;
//     }

//     public function getAuthorDesc(){
//         return $this->attributes['author_desc'];
//     }

//     public function setAuthorDesc($author_desc){
//         return $this->attributes['author_desc'] = $author_desc;
//     }


//     public function setUserId($user_id){
//         return $this->attributes['user_id'] = $user_id;
//     }

//     public function setCategoryId($category_id){
//         return $this->attributes['category_id'] = $category_id;
//     }

//     public function getCreatedAt(){
//         return $this->attributes['created_at'];
//         }
        
//         public function setCreatedAt($createdAt){
//         $this->attributes['created_at'] = $createdAt;
//         }
        
//         public function getUpdatedAt(){
//             return $this->attributes['updated_at'];
//             }
        
//         public function setUpdatedAt($updatedAt){
//             $this->attributes['updated_at'] = $updatedAt;
//             }
        


    

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
