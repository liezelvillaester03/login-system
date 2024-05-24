<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facilitator;

class FacilitatorController extends Controller
{
    public function showLoginForm()
    {
        return view('facilitator.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $facilitator = Facilitator::where('username', $request->username)->first();

        // Check if a facilitator with the given username exists and if the password matches
        if ($facilitator && $facilitator->password === $request->password) {
            // If valid, store the facilitator's ID in the session and redirect to the dashboard
            session(['facilitator' => $facilitator->id]);
            return redirect()->route('facilitator.dashboard');
        } else {
            // If invalid, redirect back to the login page with an error message
            return redirect()->route('facilitator.login')->withErrors(['username' => 'Invalid credentials']);
        }
    }

    public function dashboard()
    {
        // Check if the facilitator is logged in
        if (session()->has('facilitator')) {
            return view('facilitator.dashboard');
        } else {
            // If not logged in, redirect to the login page
            return redirect()->route('facilitator.login');
        }
    }

    public function logout(Request $request)
    {
        // Forget the facilitator session and redirect to the login page
        $request->session()->forget('facilitator');
        return redirect()->route('facilitator.login');
    }
}
