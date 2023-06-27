<?php

namespace App\Http\Controllers;

use App\Models\application;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
public function dashboard(){
return view('organization.pages.dashboard');
}

public function application(){

    return view('organization.pages.application');
    }

public function ApplicationStore(Request $request)
    {
        $application = new application;
        $application->department = $request->department;
        $application->course = $request->course;
        $application->year = $request->year;
        $application->college = $request->college;
        $application->number_students = $request->number_students;

        $application->save();
    
        return redirect('/org');
    }

public function table(){
return view('organization.pages.tables');
}

public function signin(){
return view('organization.pages.sign-in');
}

public function signup(){
return view('organization.pages.sign-in');
}

}
