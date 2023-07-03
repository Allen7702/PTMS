<?php

namespace App\Http\Controllers;

use App\Models\Activity;


class CoordinatorController extends Controller
{
    public function index()
    {
        $activities = Activity::all();

        return view('coordinator.dashboard', compact('activities'));
    }
}
