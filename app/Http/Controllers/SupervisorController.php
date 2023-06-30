<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\WeeklyActivity;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SupervisorController extends Controller
{
    public function index()
    {
       $activities =Activity::all();

        return view('supervisor.dashboard', compact('activities'));
    }
   
}
