<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\WeeklyActivity;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
       $activities =Activity::all();

        return view('student.dashboard', compact('activities'));
    }
    public function pdfview()
    {
    //    $activities =Activity::all();
         return view('student.loogbookpdf');
    }
    
    public function storeDailyActivities(Request $request)
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

    return redirect()->back()->with('success', 'Daily activities saved successfully.');
}

public function storeWeeklyActivity(Request $request)
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


    public function showLogbook()
{
    $activities = Activity::select('week_number', DB::raw('MAX(updated_at) as last_modified'), DB::raw('MIN(date) as start_date'), DB::raw('MAX(date) as end_date'))
                    ->groupBy('week_number')
                    ->get();

    return view('student.dashboard', compact('activities'));
}
    

public function updateActivity(Request $request, $id)
{
    $activity = Activity::find($id);
    $activity->activity = $request->activity;
    $activity->save();

    return redirect()->back()->with('success', 'Activity updated successfully.');
}

public function updateWeeklyActivity(Request $request, $id)
{
    $weeklyActivity = WeeklyActivity::find($id);
    $weeklyActivity->weekly_description = $request->weekly_description;
    $weeklyActivity->tools_used = $request->tools_used;

    // Handle image update if image is present
    if($request->hasFile('image')) {
        // Add your code here to handle image update
    }

    $weeklyActivity->save();

    return redirect()->back()->with('success', 'Weekly Activity updated successfully.');
}

    public function logout(Request $request)
    {
        
        Auth::logout(); // Perform the sign out

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Redirect the user to the login page or any other desired page
    }


}
