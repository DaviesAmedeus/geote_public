<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    
    

    // public function login(Request  $request){

    //     if($request->isMethod('post')){
    //         $data = $request->all();
    //         // echo "<pre>"; print_r($data); die;

    //         if(Auth::guard('user')->attempt([
                
    //             'email'=>$data['email'],
    //             'password'=>$data['password'],
    //             ])){
    //                 return redirect('user/dashboard');
    //             }else{
    //                 return redirect()->back()->with("error_message", "Invalid email or password");
    //             }

    //     }
        
    //     return view('users.login');
    // }
    
    // public function dashboard(){
    //     return view('users.dashboard');
    // }

    // public function logout(){

    //     Auth::guard('user')->logout();
    //     return redirect('/');
    // }

}
