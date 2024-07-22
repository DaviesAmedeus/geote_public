<?php

namespace App\Http\Controllers\Admin;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Ui\Presets\React;

class AdminAuthorController extends Controller
{
    public function create()
    {
        return view('admin.author.create');
    }

    public function store(Request $request){
        $formfields = Author::validate($request);

        if($request->hasFile('author_profile_pic')){
            $formfields['author_profile_pic'] = $request->file('author_profile_pic')->
            store('author_profile_pictures', 'public');
        }

        Author::create($formfields);

        return redirect(route('author.create'))->with('message', 'Author have been created');
    }

    public function destroy(String $id)
    {
        Author::destroy($id);
        return redirect(route('admin.home'));
    }
}
