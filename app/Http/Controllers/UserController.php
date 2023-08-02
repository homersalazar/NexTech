<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index()
    {
        return view('users.Login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()
            ->intended('dashboard')
            ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }


    public function registration()
    {
        return view('users.Signup');
    }

    public function register(Request $request)
    {
        $request->validate([
            'Fullname' => 'required',
            'Email' => 'required|email|unique:users,email',
            'Username' => 'required|unique:users,username',
            'pass_word' => 'required|min:6|confirmed',
            'pass_word_confirmation' => 'required', // Add this rule for pass_word confirmation
            'remember' => 'accepted',
        ]);
    
        $user = User::create([
            'fullname' => $request->input('Fullname'),
            'email' => $request->input('Email'),
            'username' => $request->input('Username'),
            'password' => bcrypt($request->input('pass_word')),
            'role' => 1 // 0 - admin , 1 - user
        ]);
    
        // Additional actions if necessary (e.g., sending verification email)
    
        return redirect()->route('login')->with('success', 'You have signed up successfully. Please log in.');
    }
    

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard.index');
        }

        return redirect("login")->withSuccess('are not allowed to access');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
