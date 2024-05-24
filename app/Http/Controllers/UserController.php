<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
{
    $request->validate([
        'full_name' => 'required',
        'password' => 'required',
    ]);

    $fullName = $request->input('full_name');
    $password = $request->input('password');

    $user = User::where('full_name', $fullName)->first();

    if ($user && $user->password === $password) {

        return redirect()->route('user.dashboard');
    } else {

        return redirect()->route('user.login')->withErrors(['full_name' => 'Invalid credentials']);
    }
}



public function logout()
{
    Auth::logout();
    return redirect()->route('user.login');
}

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function timeIn(Request $request)
    {
        // Logic for time-in
    }

    public function timeOut(Request $request)
    {
        // Logic for time-out
    }
}
