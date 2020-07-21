<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use App\Model\Helper;
use App\Model\VerifyUser;
use App\Model\LocalStudent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

use Mail;
use App\Mail\VerifyMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    public function showRegistrationForm() {
        $helper = Helper::find(6);
        return view('auth.register', compact('helper'));
    }

    public function register(Request $request) {
        // return $request;
        $user = new User;
        $user->id_role = $request->input('id_role');
        $user->id_payment_type = $request->input('id_payment_type');
        $user->name = $request->input('user_name');
        $user->email = $request->input('user_email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        if($request->input('user_from') == 1 && (!empty($request->input('nim_student')))) {
            $a = new LocalStudent;
            $a->id_user = $user->id;
            $a->nim = $request->input('nim_student');
            $a->nama = $request->input('user_name');
            $a->save();
        }

        $user->sendEmailVerificationNotification();

        // $verifyUser = VerifyUser::create([
        //     'user_id' => $user->id,
        //     'token' => str_random(40)
        // ]);

        // Mail::to($user->email)->send(new VerifyMail($user));

        return view('auth.register-finish');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'id_role' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'id_role' => $data['id_role'],
        ]);
    }
}
