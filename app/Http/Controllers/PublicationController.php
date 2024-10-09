<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {

        $publications = Publication::latest()->paginate(6);
        return view('publications.index', compact('publications'));
    }
}
