<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   


   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
     {
         return view('home.dashboard');
     }

    public function adminHome()
    {
        return view('admin.index');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }


    public function logout_user(){

        Auth::logout();
        return view('auth.login')->with('logout_message', 'You have logged out!');
    }

    public function logout_admin(){

        Auth::logout();
        return view('auth.login')->with('logout_message', 'You have logged out!');
    }



    // Concerning the user profile:
    public function userProfile(string $id){
        return view('home.user_profile', [
            'user'=>User::findOrFail($id)
        ]);
    }
    

    public function update(Request $request, string $id)  {
        

        $formfields = $request->validate(
            [
                'name'=>'required', 
                'email'=>'required', 
                'about'=>'max:550',
                'profile_pic' => [ File::image()->dimensions(Rule::dimensions()->maxWidth(400)->maxHeight(400)),],

            ]
        );

        if($request->hasFile('profile_pic')){
            $user = User::findOrFail($id);

            // This deletes the existing picture and clears the space
            if($user->profile_pic && Storage::disk('public')->exists($user->profile_pic )) {
                Storage::disk('public')->delete($user->profile_pic  );
            }

            // Places onother picture after the previous one being deleted
            $formfields['profile_pic'] = $request->file('profile_pic')->
            store('profile_pictures', 'public');
        }
        

        

        // $post= [
        //     'user_id'=>Auth::id(),
        //     'category_id' => 1 //Blog post category
        // ] + $formfields;

        User::where('id', $id)->update($formfields);

        return redirect(route('user.profile', ['id'=>$id]));
    }
}
