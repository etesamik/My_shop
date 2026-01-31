<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //show login form----------
    public function showLogin()
    {
        return view('frontend.auth.login');

    }

    //show register form-------
    public function showRegister()
    {
        return view('frontend.auth.register');
    }

    //login process------------
    public function login(Request $request)
    {

        // authentication
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // try for login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        // error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'The provided credentials do not match our records.',
        ]);
    }

    //register process ------
    public function register(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' =>$request->phone_number,
            'password' => Hash::make($request->password),
            'creates_by' => 0,
        ]);
        Auth::login($user);
        return redirect()->intended('/');


    }

    // exit ---------------

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }


}
