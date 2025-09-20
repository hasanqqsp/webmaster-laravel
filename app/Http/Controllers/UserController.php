<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(string $id)
    {
        return view('user.profile', [
            'user' => [
                'id' => $id,
                'name' => 'John Doe',
                'email' => 'john@example.com'
            ]
        ]);
    }

    public function register() {
        return view('user.register');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Create the user
        $user = \App\Models\User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Log the user in
        auth()->login($user);

        return redirect('/')->with('success', 'Registration successful!');
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/')->with('success', 'Logged out successfully!');
    }

    public function login() {
        return view('user.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Login successful!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
