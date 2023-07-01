<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\WeeklyActivity;
use Dompdf\Dompdf;
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
     // Create a new Dompdf instance
    //  $dompdf = new Dompdf();

    //  // Load the HTML content or view you want to convert to PDF
    //  $html = view('student.loogbookpdf')->render();
 
    //  // Load the HTML into Dompdf
    //  $dompdf->loadHtml($html);
 
    //  // Set the paper size and orientation
    //  $dompdf->setPaper('A4', 'portrait');
 
    //  // Render the HTML as PDF
    //  $dompdf->render();
 
    //  // Output the PDF to the browser for download
    //  $dompdf->stream('document.pdf', ['Attachment' => true]);
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

public function editActivities($week)
{
    $activities = Activity::where('week_number', $week)
        ->orderBy('date')
        ->get();

        $weeklyActivity = WeeklyActivity::where('user_id', Auth::id())->first();

    return view('student.editActivities', compact('activities', 'weeklyActivity'));
}

public function updateActivities(Request $request, $week)
{
    $data = $request->all();

    // Loop over the activities data in the request
    for($i = 0; $i < 5; $i++) {
        if(!empty($data['activities'][$i]['activity']) && isset($data['activities'][$i]['date'])) {
            // Find the activity and update it
            $activity = Activity::where('week_number', $week)
                ->whereDate('date', $data['activities'][$i]['date'])
                ->first();

            if($activity) {
                $activity->update([
                    'activity' => $data['activities'][$i]['activity']
                ]);
            }
        }
    }

    // Validate the data
    $validatedData = $request->validate([
        'weekly_description' => 'required|string',
        'tools_used' => 'required|string',
    ]);

    // Find the WeeklyActivity and update it
    $weeklyActivity = WeeklyActivity::where('user_id', Auth::id())->first();
    
    if($weeklyActivity) {
        $weeklyActivity->update($validatedData);
    }
    
    // Assuming you want to redirect back to the edit page
    return redirect()->route('student.editActivities', ['week' => $week])
                     ->with('success', 'Activities updated successfully');
}


public function deleteLogbookWeek($week)
{
    // Get all activities for the specified week
    $activities = Activity::where('week_number', $week)->get();

    foreach ($activities as $activity) {
        // Get the WeeklyActivity associated with the activity and delete it
        if ($activity->weeklyActivity) {
            $activity->weeklyActivity->delete();
        }
    }

    // Delete the activities for the specified week
    Activity::where('week_number', $week)->delete();

    // Redirect back with a success message
    return back()->with('success', 'Logbook week deleted successfully');
}


    public function logout(Request $request)
    {
        
        Auth::logout(); // Perform the sign out

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Redirect the user to the login page or any other desired page
    }


}
