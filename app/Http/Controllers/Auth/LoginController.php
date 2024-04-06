<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;
 
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
 
    public function login(Request $request)
    {   
        $input = $request->all();
       
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
       
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == 'admin')
             {
                return redirect()->route('admin.home');

            }else if (auth()->user()->type == 'user') 
            {
                return redirect()->route('user.home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('message','Email-Address And Password Are Wrong.');
        }
            
    }
}