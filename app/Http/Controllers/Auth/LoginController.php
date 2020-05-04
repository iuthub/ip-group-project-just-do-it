<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

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
    protected $username;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->username=$this->findUsername();
    }

//    protected function sendLoginResponse(Request $request)
//    {
//        $customRememberMeTimeInMinutes = 10;
//        $rememberTokenCookieKey = Auth::getRecallerName();
//        Cookie::queue($rememberTokenCookieKey, Cookie::get($rememberTokenCookieKey), $customRememberMeTimeInMinutes);
//        $request->session()->regenerate();
//        $this->clearLoginAttempts($request);
//        return $this->authenticated($request, $this->guard()->user())
//            ?: redirect()->intended($this->redirectPath());
//    }

    public function findUsername()
    {
        $login=request()->input('login');
        $fieldType=filter_var($login,FILTER_VALIDATE_EMAIL)?'email':'username';
        request()->merge([$fieldType=>$login]);
        return $fieldType;
    }

    public function username()
    {
        return $this->username;
    }

}
