<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class StudentLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('student.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        // Check against the Counselor model
        $student = Student::where('email', $credentials['email'])->first();
    
        if ($student && Hash::check($credentials['password'], $student->password)) {
            // Log in the counselor
            Auth::login($student);
    
            // Redirect to the counselor dashboard
            return redirect('/student/dashboard');
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