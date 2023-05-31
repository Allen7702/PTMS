<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\WeeklyActivity;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function index()
    {
       $activities =Activity::all();
       $weekNumbers = Activity::distinct('week_number')->pluck('week_number');

        return view('student.dashboard', compact('activities','weekNumbers'));
    }
    
    public function store(Request $request)
    {    
        $data = $request->all();
        $weekNumber = $request->input('week_number');
        for($i = 0; $i < 5; $i++) {
            if(!empty($data['activities'][$i]['activity'])) {
                Activity::create([
                    'user_id' => Auth::id(),
                    'week_number' => $weekNumber,    
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

    public function showActivities()
    {
        $user_id = Auth::id();
        $activities = Activity::where('user_id', $user_id)
                              ->orderBy('date', 'desc')
                              ->get();
                            
    $formData = [];   
    $activities = collect();

    for ($weekNumber = 1; $weekNumber <= 8; $weekNumber++) {
    $activitiesForWeek = Activity::where('week_number', $weekNumber)->get();
    $activities = $activities->concat($activitiesForWeek);
    }

    // Calculate the start and end dates for the selected week number
    $startDate = Carbon::now()->startOfWeek()->addWeeks($weekNumber - 1);
    $endDate = Carbon::now()->startOfWeek()->addWeeks($weekNumber - 1)->endOfWeek();

     // Get the last modified date
    $lastModifiedDate = Activity::max('updated_at');

     // Format the dates for display
    $formattedStartDate = Carbon::parse($startDate)->format('M d');
    $formattedEndDate = Carbon::parse($endDate)->format('M d');

     // Prepare the form data
    $formData = [
        'weekNumber' => $weekNumber,
        'lastModifiedDate' => $lastModifiedDate,
        'dateRange' => $formattedStartDate . ' - ' . $formattedEndDate,
        'activities' => $activities,
    ];

        return view('student.dashboard', compact('activities','formData'));
    }
    
    public function logout(Request $request)
    {
        
        Auth::logout(); // Perform the sign out

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Redirect the user to the login page or any other desired page
    }


}
