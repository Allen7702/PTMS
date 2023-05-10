<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class StudentController extends Controller
{
    public function index()
    {
        $startDate = request('start_date', now()->startOfMonth());
        $endDate = request('end_date', now()->endOfMonth());
    
        $dates = collect();
        for ($date = $startDate; $date <= $endDate; $date = $date->addDay()) {
            $dates->push($date);
        }
    
        $activities = Activity::whereIn('date', $dates)
            ->orderBy('date')
            ->get()
            ->groupBy('date');
    
        return view('student.dashboard', compact('activities', 'startDate', 'endDate'));
    }
    
    public function store(Request $request)
    {
        foreach ($request->activities as $date => $activity) {
            Activity::updateOrCreate(['date' => $date], ['activity' => $activity]);
        }
    
        return back()->with('success', 'Activities saved successfully.');
    }
    
}
