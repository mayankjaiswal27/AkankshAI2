<?php

namespace App\Http\Controllers;
use App\Models\Counselor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class CounselorLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('counselor.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        // Check against the Counselor model
        $counselor = Counselor::where('email', $credentials['email'])->first();
    
        if ($counselor && Hash::check($credentials['password'], $counselor->password)) {
            // Log in the counselor
            Auth::login($counselor);
    
            // Redirect to the counselor dashboard
            return redirect('/counselor/dashboard');
        } else {
            // Invalid credentials, redirect back with an error message
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
    

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}