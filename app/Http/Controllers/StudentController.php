<?php

// app/Http/Controllers/StudentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class StudentController extends Controller
{
    public function showRegistrationForm()
    {
        return view('student.register');
    }

    public function register(Request $request)
    {
        // Validate the registration data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'password' => 'required|string|min:8',
        ]);

        // Create a new student record
        $student = Student::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Log in the newly registered student
        Auth::login($student);

        // Redirect to the student dashboard
        return redirect()->route('student.dashboard');
    }

    public function showLoginForm()
    {
        return view('student.login');
    }

    public function login(Request $request)
    {
        // Add your login logic here

        // For example, redirect to the student dashboard
        return redirect()->route('student.dashboard');
    }

    public function dashboard()
    {
        return view('student.dashboard');
    }

    public function logout()
    {
        Auth::logout();

        // Redirect to the home page after logout
        return redirect('/');
    }
}
