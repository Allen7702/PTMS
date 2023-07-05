<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\Organization;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function ptAllocation()
    {

        $applications = Application::all();
        $randomNumber = session()->get('randomNumber') ?? rand(1, 10);
        session(['randomNumber' => $randomNumber]);    
        return view('student.company', compact('applications', 'randomNumber'));
    }
    
    
}
