<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    function  blank_page()
    {
        return view('admin.blank');
    }
    public function loginPage()
    {
        return view('login');
    }
    public function registerPage()
    {
        return view('register');
    }
    public function submit_register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed',
        ]);
        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 2, // agent
            'password' => Hash::make($request->password),
        ]);
        // Optionally, you could log the user in automatically after signup
        // auth()->login($user);

        // Redirect the user after successful signup
        return redirect()->route('admin.login')->with('success', 'Your account has been created successfully. You can now login.');
    }
    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function postlogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication successful
            // dd(Auth::user());
            return redirect()->intended('/'); // Redirect to the intended URL or a default
            if (Auth::user()->sataus) {
                return redirect()->intended('/'); // Redirect to the intended URL or a default
            } else {
                return redirect()->route('login')->with('error', 'Your Account is deactivated please contact support!');
            }
        }
        // Authentication failed
        return redirect()->route('login')->with('error', 'Wrong Username Or Password');
    }
}
