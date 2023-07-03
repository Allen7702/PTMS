<?php

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\CompanyController;
use App\Mail\notification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


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
Route::get('/activity-details/{week}',[StudentController::class, 'viewActivityDetails']);
Route::get('student/activities/{week}/edit',[StudentController::class, 'editActivities'])->name('student.editActivities');
Route::post('student/activities/{week}', [StudentController::class, 'updateActivities'])->name('student.updateActivities');
Route::delete('/student/deleteLogbookWeek/{week}', [StudentController::class, 'deleteLogbookWeek'])->name('student.deleteLogbookWeek');
Route::get('/download-pdf/{week}',[StudentController::class, 'downloadActivityDetails']);


//Route for company allocation
Route::get('/pt',[CompanyController::class, 'ptAllocation']);

Route::get('/logout', [StudentController::class, 'logout'])->name('logout');

// Route::get('/dashboard', function () {
    
//     return view('student.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// For Organization Dashboard
Route::get('/org',[OrganizationController::class, 'dashboard'])->name('organization.dashboard');
Route::get('/app', [OrganizationController::class, 'application'])->name('organization.pages.application');
Route::get('/tables', [OrganizationController::class, 'table'])->name('organization.pages.tables');
Route::get('/signin', [OrganizationController::class, 'signin'])->name('organization.pages.signin');
Route::post('/applicationstore', [OrganizationController::class, 'ApplicationStore']);

//For Supervisor Dashboard
Route::get('/supervisor', [SupervisorController::class, 'index']);
Route::get('/supervisor', [SupervisorController::class, 'showUserLogbook']);


//For the email notification service
Route::get('/mail', function() {
    $recipient = 'mgeyekwaallen@gmail.com';
    Mail::to($recipient)->send(new notification());
    return view('success_fail');
  });
require __DIR__.'/auth.php';
