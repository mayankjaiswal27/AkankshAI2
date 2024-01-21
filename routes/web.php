<?php
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CounselorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meet', function () {
    return view('meet');
})->name('meet');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/student', function () {
    return view('student');
})->name('student');
Route::get('/counselor', function () {
    return view('counselor');
})->name('counselor');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/submit', [QuizController::class, 'submit'])->name('quiz.submit');
Route::get('/student/register', [StudentController::class, 'create'])->name('student.register');
Route::post('/student/register', [StudentController::class, 'store']);

Route::get('/counselor/register', [CounselorController::class, 'create'])->name('counselor.register');
Route::post('/counselor/register', [CounselorController::class, 'store']);
require __DIR__.'/auth.php';