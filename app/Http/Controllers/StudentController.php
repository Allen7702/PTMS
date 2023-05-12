<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
       $activities =Activity::all();
        return view('student.dashboard', compact('activities'));
    }
    
    public function store(Request $request)
    {    $data = $request->validate([
        'activities' => 'required|array',
        
    ]);

    foreach ($data['activities'] as $activityData) {
        Activity::create($activityData);
    }

    return redirect()->back()->with('success', 'Activities saved successfully.');

    }
    
    public function logout(Request $request)
    {
        Auth::logout(); // Perform the sign out

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Redirect the user to the login page or any other desired page
    }

}
