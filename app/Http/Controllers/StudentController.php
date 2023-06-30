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
$weeklyActivity = new WeeklyActivity();
$weeklyActivity->user_id = Auth::id();
$weeklyActivity->weekly_description = $request->input('weekly_description');
$weeklyActivity->tools_used = $request->input('tools_used');

// Handling the image upload
if ($request->hasFile('image')) {
    $image = $request->file('image');
    $imagePath = $image->store('img', 'public');
    $weeklyActivity->image = $imagePath;
}

$weeklyActivity->save();

    return redirect()->back()->with('success', 'Daily activities saved successfully.');
}


    public function showLogbook()
{
    $activities = Activity::select('week_number', DB::raw('MAX(updated_at) as last_modified'), DB::raw('MIN(date) as start_date'), DB::raw('MAX(date) as end_date'))
                    ->groupBy('week_number')
                    ->get();

    return view('student.dashboard', compact('activities'));
}
    


public function viewActivityDetails($week)
{
    $activities = Activity::where('week_number', $week)->get();
    $weeklyActivity = WeeklyActivity::where('user_id', Auth::id())->first(); // assuming there is a user_id in the WeeklyActivity table

    return view('student.activity-details', compact('activities', 'weeklyActivity'));
}


    public function logout(Request $request)
    {
        
        Auth::logout(); // Perform the sign out

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Redirect the user to the login page or any other desired page
    }


}
