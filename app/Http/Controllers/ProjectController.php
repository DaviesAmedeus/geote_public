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
        return view('project_posts.index',[
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
        return view('project_posts.create_project');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formfields = $request->validate(
            [
                'post_title'=>'required', 
                'post_intro'=>'required', 
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
            'category_id' => 3 //Project category
        ] + $formfields;

        // dd($post);
        Post::create($post );

        return redirect(route('projects.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('project_posts.show_project_post', [
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
        return view('project_posts.edit_project_post',[
            'project'=> Post::findOrFail($id)
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
                'post_intro'=>'required', 
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
            'category_id' => 3 //Blog post category
        ] + $formfields;

        Post::where('id', $id)->update($post);

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
