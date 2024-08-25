<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function registerView()
    {
        return view('register');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nim' => ['required'],
            'password' => ['required'],
        ]);

        if (auth()->guard('student')->attempt($credentials)) {
            return redirect()->intended('/news');
        }

        return redirect()->back()->withErrors(['nim' => 'Invalid Credentials!']);
    }

    public function logout(Request $request)
    {
        Auth::guard('student')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:40',
            'password' => 'required|string|min:8',
        ]);

        $latestNim = Student::max('nim');
        $newNim = $latestNim ? $latestNim + 1 : 1;

        Student::create([
            'name' => $request->name,
            'nim' => $newNim,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. You can now log in.');
    }
}
