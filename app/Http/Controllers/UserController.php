<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authLogin(Request $request)
    {
        // dd($request);
        $formData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($formData)) {
            $request->session()->regenerate();
            return redirect('/todo')->with('message', 'User login sucessfully');
        }
        return back()->withErrors(['email' => 'Invalid Crediantials'])->onlyInput('email');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        // dd($request);
        $formData = $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('users')],
            'password' => 'required|confirmed|min:6'
        ]);
        $formData['password'] = bcrypt($request['password']);

        auth()->login(User::create($formData));

        return redirect('/todo')->with('message', 'User created sucessfully');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logout');
    }
}
