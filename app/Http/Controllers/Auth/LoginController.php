<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    

    protected function authenticated($request,$user){
    if($user->role == 1){
            return redirect()->route('backAdmin.master'); //redirect to admin panel
        }

        return redirect()->route('pendaftaran'); //redirect to standard user homepage
    }

    // protected $redirectTo = '/index/pendaftaran';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function logout(){
        \Auth::logout();
        return redirect('/index'); // ini untuk redirect setelah logout
    }
}
