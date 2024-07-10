<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Author;
use App\Models\Writer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  ALL BLOG POSTS
    public function index()
    {   
        // dd(Post::latest()->paginate(3));
        // return view('blog.index')->with('posts', Post::latest()->paginate(2));
        return view('blog.index',[
            'posts'=> Post::where('category_id', 1)->latest()->paginate(6) //SimplePaginate(3)
        ]);
          
    }


    public function blogPosts(){

        $user = Auth::id();
      

        return view('users.all_blog_posts',[
            'posts'=>Post::where('user_id',$user)->where('category_id', 1)->latest()->paginate(10),
            'total'=>Post::where('user_id',$user)->count()
        ]);
    }



    public function createblogpost()
    {
        return view('blog.create', 
        ['authors'=>Author::all(),]);
    }

 
    public function store(Request $request)
    {
        $validated_entries = Post::validate($request);
        $validated_entries['user_id'] = Auth::user()->id;
        $validated_entries['category_id'] = 1;
        $validated_entries['author_id'] = $request->author_id;

        if($request->hasFile('post_picture')){
        
            $validated_entries['post_picture'] = $request->file('post_picture')->
            store('post_pics', 'public');
        }

        Post::create( $validated_entries);

        return back()->with('message', 'Youve created a Post!');

    }

    /**
     * Display the specified resource.
     */
    // SINGLE BLOG POST
    public function showBlogPost(string $id)
    {
      
      return view('blog.show', [
        'blogpost' => Post::findOrFail($id),
        'blog_posts'=> Post::where('category_id', 1)->take(3)->latest()->get(),
        'projects'=> Post::where('category_id', 3)->take(3)->latest()->get(),

      ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editBlogPost(string $id)
    {
        // $blogpost = Post::findOrFail($id);
        // dd($blogpost);
        return view('blog.edit',[
            'blog'=> Post::findOrFail($id),
            'authors'=>Author::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)

    {
        

        $validated_entries = Post::validate($request);
        $validated_entries['category_id'] = 1;
        $validated_entries['author_id'] = $request->author_id;

    if($request->hasFile('post_picture')){
    
        $validated_entries['post_picture'] = $request->file('post_picture')->
        store('post_pics', 'public');
    }

    if($request->hasFile('author_photo')){
        $validated_entries['author_photo'] = $request->file('author_photo')->
        store('author_photos', 'public');
    }
        


        Post::where('id', $id)->update($validated_entries);

        return redirect(route('user.allposts'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);


        if($post->post_picture && Storage::disk('public')->exists($post->post_picture)) {
            Storage::disk('public')->delete($post->post_picture);
        }

        Post::destroy($id);
        // return redirect('/')->with('message', 'Listing deleted successfully');
        return redirect(route('user.allposts'))->with('message', 'Listing deleted successfully');;

    }


    
}
