<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('auth/login');
// });

Route::get('/', [StudentController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.index');
Route::post('student.dashboard', [StudentController::class, 'store'])->name('dashboard.store');
Route::post('student.dashboard/weekly', [StudentController::class, 'saveWeeklyActivity'])->name('student.dashboard.saveWeeklyActivity');
Route::get('/', [StudentController::class, 'showActivities']);

Route::get('/logout', [StudentController::class, 'logout'])->name('logout');

// Route::get('/dashboard', function () {
    
//     return view('student.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
