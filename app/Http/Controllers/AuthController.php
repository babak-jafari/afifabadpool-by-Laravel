<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
        // return 'hellow';
    }

    public function register(Request $request)
    {
        $request->validate([
            'phone' => 'required|regex:/^09\d{9}$/|unique:users,phone',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        return back()->with('success', '✅ثبت‌نام با موفقیت انجام شد!');

        // return redirect()->route('login.form')->with('success', 'ثبت‌نام با موفقیت انجام شد!');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'phone' => 'required|regex:/^09\d{9}$/',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', '✅با موفقیت وارد شدید!');

            // return redirect()->intended('/')->with('success', 'با موفقیت وارد شدید!');
        }

        // return back()->with(['error' , 'شماره یا رمز عبور اشتباه است.']);
        return back()->with('error', '❌شماره یا رمز عبور اشتباه است.');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('main');
        
    }
}
