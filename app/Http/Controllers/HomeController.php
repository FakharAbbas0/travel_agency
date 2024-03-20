<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\VerficationCode;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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
    public function verfiy_email(Request $request){
        if($request->isMethod('POST')){
           $verifyCode=VerficationCode::where('verfication_code',$request->verfication_code)->whereNull('expiration_date')->first();
           if(is_null($verifyCode)){
                return redirect()->route('verfiy_email')->with('error', 'Invalid Verfication Code')->withInput($request->only('verfication_code'));
           }
           $verifyCode->expiration_date = now();
           $verifyCode->save();
           $user = User::find($verifyCode->user_id);
           $user->is_verify=1;
           $user->save();
           Session::forget('verify_account_id');
           return redirect()->route('admin.login')->with('success', 'Your Account has been Verified');
        }

        if(!Session::has("verify_account_id")){
            return redirect()->route('register');
        }
        if($request->has('send') || $request->has('resend')){
            $user_id=Session::get('verify_account_id');
            $user = User::find($user_id);
            $verifyCode=VerficationCode::where('user_id',$user->id)->whereNull('expiration_date')->first();
            $code = $verifyCode->verfication_code;
            $data['user']=$user;
            $data['code']=$code;
            Mail::to($user->email)->send(new VerifyEmail($data));
        }
        return view('verfiy_email');
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

        $verificatin_code = $user->id.rand(1111,9999);
        $verificatin = new VerficationCode();
        $verificatin->user_id = $user->id;
        $verificatin->verfication_code = $verificatin_code;
        $verificatin->save();
        // Optionally, you could log the user in automatically after signup
        // auth()->login($user);
        Session::put('verify_account_id',$user->id);
        // Redirect the user after successful signup
        // return redirect()->route('admin.login')->with('success', 'Your account has been created successfully. You can now login.');

        return redirect(route('verfiy_email').'?send')->with('info', 'Please Verify Your Account Email Has been Sent');
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
