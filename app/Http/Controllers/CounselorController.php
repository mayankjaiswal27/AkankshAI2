<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counselor;
use Illuminate\Support\Facades\Hash;

class CounselorController extends Controller
{
    public function create()
    {
        return view('counselor.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:counselors,email',
            'password' => 'required|min:6|confirmed',
            'college' => 'required|string',
            'graduated' => 'required|string',
            'industry_experience' => 'required|string',
            'career_experience' => 'required|string',
            'degree_obtained' => 'required|string',
        ]);

        $counselor = Counselor::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'college' => $request->input('college'),
            'graduated' => $request->input('graduated'),
            'industry_experience' => $request->input('industry_experience'),
            'career_experience' => $request->input('career_experience'),
            'degree_obtained' => $request->input('degree_obtained'),
        ]);

        return redirect(url('/counselor/dashboard'))->with('success', 'Counselor registered successfully!');
    }
}
