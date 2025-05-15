<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function handleRegister(Request $request)
    {
        $request->validate([
            'phone' => ['required', 'regex:/^09\d{8}$/', 'unique:users,phone'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],
        ], [
            'phone.regex' => 'رقم الهاتف يجب أن يبدأ بـ 09 ويتكون من 10 أرقام.',
        ]);

        $user = User::create([
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        session(['registered' => true]);
        Auth::login($user); // بعد الإنشاء


        return redirect()->route('verify')->with('success', 'تم التسجيل بنجاح!');
    }


    public function verify(Request $request)
    {
    
        return view('verify');
    }
}
