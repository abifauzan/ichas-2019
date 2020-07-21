<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Alert;
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

    use AuthenticatesUsers {
        redirectPath as laravelRedirectPath;
        logout as performLogout;
    }

    public function redirectPath() {
        // Do your logic to flash data to session...
        Alert::success('Successful Login');
        // Return the results of the method we are overriding that we aliased.
        return $this->laravelRedirectPath();
    }

    protected function sendFailedLoginResponse(Request $request) {
        Alert::error('Failed to Login');
        return redirect()->to('/login')
            ->withInput($request->only($request->email, 'remember'));
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('login');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
