<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Register;


class AuthController extends Controller

{
    public function LoginPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'pass' => 'required'
        ]);

        $user = Register::where('userName', $request->input('username'))->first();

        if ($user && $request->input('pass') === $user->Pass) {

            Auth::login($user);
            session()->flush();
            session(['username' => $user->userName]); // تخزين اسم المستخدم في الجلسة
          
            return redirect()->route('home'); // تأكد من أن لديك المسار home
        } else {
            return redirect()->back()->withErrors(['error' => 'Invalid username or password.']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout(); // تسجيل الخروج
        session()->forget('username'); // حذف اسم المستخدم من الجلسة
        return redirect('/login'); // إعادة التوجيه إلى صفحة تسجيل الدخول
    }
    public function SignUpPost(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:30',
            'em' => 'required|email|unique:register,email',
            'pass' => 'required|string|min:6',
            'phone' => 'required|string|size:9',
            'adress' => 'required|string|max:60',
            'gender' => 'required',
        ]);
        Register::create([
            'userName' => $request->username,
            'Email' => $request->em,
            'Pass' => $request->pass, 
            'Phone' => $request->phone,
            'Adress' => $request->adress,
            'Gender' => $request->gender,
        ]);
        $user = Register::where('userName', $request->input('username'))->first();
        
            Auth::login($user);
            session()->flush();
            session(['username' => $user->userName]); // تخزين اسم المستخدم في الجلسة
          
            return redirect()->route('home'); // تأكد من أن لديك المسار home
        }    }

    
