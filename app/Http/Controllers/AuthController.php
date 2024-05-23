<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('main_auth.register');
    }

    public function store(AuthRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);
        Auth::login($user);

        return to_route('home');
    }

    public function login()
    {
        return view('main_auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ] , [
            'email.required' => "  الإيميل  مطلوب",
            'password.required' => "  كلمة المرور  مطلوبة",
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'يوجد خطأ بالبيانات المدخلة يرجى اعادة المحاولة',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('home');
    }
}
