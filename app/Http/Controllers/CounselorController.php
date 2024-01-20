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
        ]);

        $counselor = Counselor::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // You may want to add authentication, redirect, etc.

        return redirect()->route('counselor.register')->with('success', 'Counselor registered successfully!');
    }
}

