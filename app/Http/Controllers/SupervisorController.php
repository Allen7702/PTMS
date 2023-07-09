<?php

namespace App\Http\Controllers;


use App\Models\Activity;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class SupervisorController extends Controller
{
    public function index()
    {
       $activities =Activity::all();

        return view('supervisor.dashboard', compact('activities'));
    }

    public function showUserLogbook()
    {
        // Fetch all users
        $users = User::all();
    
        // Initialize an empty array to hold the logbook activities for all users
        $activitiesByUsers = [];
    
        foreach ($users as $user) {
            // Fetch activities for each user along with the user information
            $activities = Activity::select(
                'week_number',
                DB::raw('MAX(updated_at) as last_modified'),
                DB::raw('MIN(date) as start_date'),
                DB::raw('MAX(date) as end_date')
            )
            ->where('user_id', $user->id)
            ->groupBy('week_number')
            ->get();
    
            // Add the user and their respective activities to the array
            $activitiesByUsers[$user->name] = $activities;
        }
    
        return view('supervisor.dashboard', compact('activitiesByUsers'));
    }
     
}
