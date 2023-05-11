<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

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
        'activities.*.date' => 'required|date',
        'activities.*.activity' => 'required|string',
    ]);

    foreach ($data['activities'] as $activityData) {
        Activity::create($activityData);
    }

    return redirect()->back()->with('success', 'Activities saved successfully.');

    }
    
}
