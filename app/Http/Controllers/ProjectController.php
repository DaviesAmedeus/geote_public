<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Post::with('category')
            ->whereHas('category', function ($query) {
                $query->where('slug', 'projects'); // Assuming you're filtering by slug 'projects'
            })->latest()->paginate(6);
        return view('projects.index', compact('projects'));
    }




    public function show(Post $project)
    {

//        dd($project);
        $project = Post::findOrFail($project->id);
//            'blog_posts'=> Post::where('category_id', 1)->take(3)->latest()->get(),
//            'projects'=> Post::where('category_id', 3)->take(3)->latest()->get(),
        return view('projects.show', compact('project'));
    }


}
