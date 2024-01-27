<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CounselorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meet', function () {
    return view('meet');
})->name('meet');

Route::get('/dashboard', function () {
    return view('dashbaord');
})->name('dashboard');

Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/submit', [QuizController::class, 'submit'])->name('quiz.submit');

Route::get('/login', function () {
    return view('login');
})->name('login');

// Student Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/student/register', [StudentController::class, 'showRegistrationForm'])->name('student.register');
    Route::post('/student/register', [StudentController::class, 'register']);
    Route::get('/login/student', [StudentController::class, 'showLoginForm'])->name('student.login');
    Route::post('/login/student', [StudentController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
    Route::post('/logout', [StudentController::class, 'logout'])->name('student.logout');
});



    // Profile routes for students
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/logout', [StudentController::class, 'logout'])->name('logout');


// Counselor Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/register/counselor', [CounselorController::class, 'registerForm'])->name('counselor.register');
    Route::post('/register/counselor', [CounselorController::class, 'register']);
    Route::get('/login/counselor', [CounselorController::class, 'loginForm'])->name('counselor.login');
    Route::post('/login/counselor', [CounselorController::class, 'login']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/counselor/dashboard', [CounselorController::class, 'dashboard'])->name('counselor.dashboard');

    // Profile routes for counselors
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/logout', [CounselorController::class, 'logout'])->name('logout');
});
require __DIR__.'/auth.php';

