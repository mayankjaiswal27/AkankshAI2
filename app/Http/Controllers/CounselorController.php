<?php

// app/Http/Controllers/StudentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CounselorController extends Controller
{
    public function showRegistrationForm()
    {
        return view('counselor.register');
    }

    public function register(Request $request)
    {
        // Add your registration logic here

        // For example, redirect to the student dashboard
        return redirect()->route('counselor.dashboard');
    }

    public function showLoginForm()
    {
        return view('counselor.login');
    }

    public function login(Request $request)
    {
        // Add your login logic here

        // For example, redirect to the student dashboard
        return redirect()->route('counselor.dashboard');
    }

    public function dashboard()
    {
        return view('counselor.dashboard');
    }

    public function logout()
    {
        Auth::logout();

        // Redirect to the home page after logout
        return redirect('/');
    }
}

