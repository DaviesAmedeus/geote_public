<?php

namespace App\View\Components;

use App\Models\Blog;
use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $blogs = Blog::latest()->limit(3)->get();
        $projects = Post::with('category')
            ->whereHas('category', function ($query) {
                $query->where('slug', 'projects'); // Assuming you're filtering by slug 'projects'
            })->latest()->limit(3)->get();

        return view('components.sidebar', compact('blogs', 'projects'));
    }
}
