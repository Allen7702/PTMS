<?php

namespace App\Http\Controllers;

use App\Models\WeeklyActivity;
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
    {    
        $data = $request->all();

        for($i = 0; $i < 5; $i++) {
            if(!empty($data['activities'][$i]['activity'])) {
                Activity::create([
                    'user_id' => Auth::id(),
                    'date' => $data['activities'][$i]['date'],
                    'activity' => $data['activities'][$i]['activity']
                ]);
            }
        }
        $validatedData = $request->validate([
            'weekly_description' => 'required|string',
            'tools_used' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $weeklyActivity = new WeeklyActivity();
        $weeklyActivity->user_id = Auth::id();
        $weeklyActivity->weekly_description = $validatedData['weekly_description'];
        $weeklyActivity->tools_used = $validatedData['tools_used'];

        // Handling the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('weekly_images', 'public');
            $weeklyActivity->image = $imagePath;
        }

        $weeklyActivity->save();

    return redirect()->back()->with('success', 'Activities saved successfully.');

    }

    public function saveWeeklyActivity(Request $request)
    {
        $validatedData = $request->validate([
            'weekly_description' => 'required|string',
            'tools_used' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $weeklyActivity = new WeeklyActivity();
        $weeklyActivity->user_id = Auth::id();
        $weeklyActivity->weekly_description = $validatedData['weekly_description'];
        $weeklyActivity->tools_used = $validatedData['tools_used'];

        // Handling the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('weekly_images', 'public');
            $weeklyActivity->image = $imagePath;
        }

        $weeklyActivity->save();

        return redirect()->back()->with('success', 'Weekly activity saved successfully.');
    }
    
    public function logout(Request $request)
    {
        Auth::logout(); // Perform the sign out

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Redirect the user to the login page or any other desired page
    }


}
