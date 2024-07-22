<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function login(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            if(Auth::guard('admin')->attempt([
                
                'email'=>$data['email'],
                'password'=>$data['password'],
                ])){
                    return redirect('admin/dashboard');
                }else{
                    return redirect()->back()->with("error_message", "Invalid email or password");
                }

        }
        
        return view('admin.login');
    }

    public function home(){
        return view('admin.index',  ['authors'=>Author::all(),]);
    }

   

    public function logout_admin(){

        Auth::logout();
        return view('auth.login')->with('logout_message', 'You have logged out!');
    }
}
