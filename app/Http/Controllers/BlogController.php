<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Post;
use App\Models\Author;
use App\Models\Writer;
use Doctrine\DBAL\Schema\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\String\b;

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
        $blogs = Blog::with('author')->latest()->paginate(6);
//        dd($blogs);
        return view('blog.index',compact('blogs'));

    }


    public function show(Blog $blog)
    {

        $blog  =Blog::findOrFail($blog->id);
//        dd($blog);
//        'blog_posts'=> Post::where('category_id', 1)->take(3)->latest()->get(),
//        'projects'=> Post::where('category_id', 3)->take(3)->latest()->get(),
      return view('blog.show', compact('blog'));
    }


}
