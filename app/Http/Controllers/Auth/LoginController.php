<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $r){
        $input = $r->all();

        $valid = $r->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            if(auth()->user()->user_type == 1){
                return redirect('/admin/dashboard');
            }elseif (auth()->user()->user_type == 2) {
                return redirect('/officer/dashboard');
            }else{
                return redirect('/client/dashboard');
            }
        }else{
            return redirect('/login')->with('error', 'Unknown credentials!');
        }
    }
}
