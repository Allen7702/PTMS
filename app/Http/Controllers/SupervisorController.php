<?php

namespace App\Http\Controllers;

use App\Models\Activity;


class SupervisorController extends Controller
{
    public function index()
    {
       $activities =Activity::all();

        return view('supervisor.dashboard', compact('activities'));
    }
   
}
