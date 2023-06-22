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

Route::get('/', [StudentController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.index');
Route::get('/pdf', [StudentController::class, 'pdfview']);
// Route for daily activities
Route::post('student.dashboard/daily', [StudentController::class, 'storeDailyActivities'])->name('dashboard.storeDailyActivities');

// Route for weekly activity
Route::post('student.dashboard/weekly', [StudentController::class, 'storeWeeklyActivity'])->name('dashboard.storeWeeklyActivity');
Route::get('/', [StudentController::class, 'showLogbook'])->middleware(['auth', 'verified'])->name('dashboard.index');
Route::get('student.dashboard/activities/{week_number}', [StudentController::class, 'showActivities'])->name('student.dashboard.showActivities');
Route::patch('student.dashboard/activities/{id}', [StudentController::class, 'updateActivity'])->name('student.dashboard.updateActivity');
Route::patch('student.dashboard/weekly/{id}', [StudentController::class, 'updateWeeklyActivity'])->name('student.dashboard.updateWeeklyActivity');


Route::get('/logout', [StudentController::class, 'logout'])->name('logout');

// Route::get('/dashboard', function () {
    
//     return view('student.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/org', function () {
    return view('organization.layout');
});

require __DIR__.'/auth.php';
