<?php

namespace App\Http\Controllers;

use App\Models\Post;
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


    public function allBlogPosts(){

        $user = Auth::id();
      

        return view('users.all_blog_posts',[
            'posts'=>Post::where('user_id',$user)->where('category_id', 1)->latest()->paginate(10),
            'total'=>Post::where('user_id',$user)->count()
        ]);
    }


   

    /**
     * Show the form for creating a new resource.
     */
    public function createblogpost()
    {
        return view('blog.create_blog_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->file());

        $formfields = $request->validate(
            [
                'post_title'=>'required', 
                'post_intro'=>'required|max:500', 
                'post_content'=>'required',
                'post_picture' => ['required', File::image()->dimensions(Rule::dimensions()->maxWidth(800)->maxHeight(600)),],

            ]
        );

        if($request->hasFile('post_picture')){
            $formfields['post_picture'] = $request->file('post_picture')->
            store('post_pics', 'public');
        }

        

        $post= [
            'user_id'=>Auth::id(),
            'category_id' => 1 //Blog post category
        ] + $formfields;

        // dd($post);
        Post::create($post );

        return redirect('/blog_section/blog')->with('message', 'Youve created a Post!');

    }

    /**
     * Display the specified resource.
     */
    // SINGLE BLOG POST
    public function showBlogPost(string $id)
    {
      
      return view('blog.show_blog_post', [
        'blogpost' => Post::findOrFail($id),
        'recentNewsUpdates'=> Post::where('category_id', 2)->take(3)->latest()->get(),
        'recentBlogPosts'=> Post::where('category_id', 1)->take(3)->latest()->get(),
        'recentProjects'=> Post::where('category_id', 3)->take(3)->latest()->get(),

      ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editBlogPost(string $id)
    {
        // $blogpost = Post::findOrFail($id);
        // dd($blogpost);
        return view('blog.edit_blog_post',[
            'blogpost'=> Post::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)

    {
        

        $formfields = $request->validate(
            [
                'post_title'=>'required', 
                'post_intro'=>'required|max:500', 
                'post_content'=>'required',
                'post_picture' => [ File::image()->dimensions(Rule::dimensions()->maxWidth(800)->maxHeight(600)),],

            ]
        );

        if($request->hasFile('post_picture')){
            $post = Post::findOrFail($id);

            // This deletes the existing picture and clears the space
            if($post->post_picture && Storage::disk('public')->exists($post->post_picture)) {
                Storage::disk('public')->delete($post->post_picture);
            }

            // Places onother picture after the previous one being deleted
            $formfields['post_picture'] = $request->file('post_picture')->
            store('post_pics', 'public');
        }

        

        $post= [
            'user_id'=>Auth::id(),
            'category_id' => 1 //Blog post category
        ] + $formfields;

        Post::where('id', $id)->update($post);

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
