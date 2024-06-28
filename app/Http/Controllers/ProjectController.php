<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('projects.index',[
            'projects'=> Post::where('category_id', 3)->latest()->paginate(6) //SimplePaginate(3)
        ]);
    }


    public function allProjects(){

        $user = Auth::id();
      

        return view('users.all_projects',[
            'posts'=>Post::where('user_id',$user)->where('category_id', 3)->latest()->paginate(10),
            'total'=>Post::where('user_id',$user)->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        Post::validate($request);
        $validated_entries = [
            'post_title' => $request->input('post_title'),
            'post_intro' => $request->input('post_intro'),
            'status' => $request->input('status'),

            'post_content' => $request->input('post_content'),
         
            'author_name' => $request->input('author_name'),
            
            'user_id'=>Auth::user()->id,
            'category_id'=> 3,
            'author_desc' => $request->input('author_desc')

        ];
   

        if($request->hasFile('post_picture')){
    
            $validated_entries['post_picture'] = $request->file('post_picture')->
            store('post_pics', 'public');
        }
    
        if($request->hasFile('author_photo')){
            $validated_entries['author_photo'] = $request->file('author_photo')->
            store('author_photos', 'public');
        }
        

       
        Post::create($validated_entries);

        return back()->with('message', 'Project post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('projects.show', [
            'project' => Post::findOrFail($id),
            'recentNewsUpdates'=> Post::where('category_id', 2)->take(3)->latest()->get(),
            'recentBlogPosts'=> Post::where('category_id', 1)->take(3)->latest()->get(),
            'recentProjects'=> Post::where('category_id', 3)->take(3)->latest()->get(),
          ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('projects.edit',[
            'project'=> Post::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Post::validate($request);
        $validated_entries = [
            'post_title' => $request->input('post_title'),
            'post_intro' => $request->input('post_intro'),
            'status' => $request->input('status'),

            'post_content' => $request->input('post_content'),
         
            'author_name' => $request->input('author_name'),
            
            'user_id'=>Auth::user()->id,
            'category_id'=> 3,
            'author_desc' => $request->input('author_desc')

        ];
   

        if($request->hasFile('post_picture')){
    
            $validated_entries['post_picture'] = $request->file('post_picture')->
            store('post_pics', 'public');
        }
    
        if($request->hasFile('author_photo')){
            $validated_entries['author_photo'] = $request->file('author_photo')->
            store('author_photos', 'public');
        }
        

        Post::where('id', $id)->update($validated_entries);

        return redirect(route('user.allProjects'));


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
        return redirect(route('user.allProjects'))->with('message', 'Listing deleted successfully');
    
    }
}
