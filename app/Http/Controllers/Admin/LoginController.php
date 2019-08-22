<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
    protected $redirectTo = 'hr/auth/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }


  
  public function showLoginForm(){
        return view ('hr.auth.login');

    }

public function loginAdmin(){
        return view ('hr/hr_dashboard');

    }



public function registerAdmin(){
           echo("register");

    }

protected function guard()
    {
        return Auth::guard('admin');
    }
    public function username()
    {
        return 'email';
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return $this->loggedOut($request) ?: redirect('hr.auth.login');
    }



}