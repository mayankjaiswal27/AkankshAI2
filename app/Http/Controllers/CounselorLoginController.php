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
        $credentials = $request->only('email', 'password');

        // Check against the Student model
        $counselor = Counselor::where('email', $credentials['email'])->first();

        if ($counselor && Hash::check($credentials['password'], $counselor->password)) {
            // Log in the student
            Auth::login($counselor);

            // Redirect to the student dashboard
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

