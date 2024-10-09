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

    public function index()
    {
        $blogs = Blog::with('author')->latest()->paginate(6);
        return view('blog.index',compact('blogs'));

    }


    public function show(Blog $blog)
    {
      return view('blog.show', compact('blog'));
    }


}
