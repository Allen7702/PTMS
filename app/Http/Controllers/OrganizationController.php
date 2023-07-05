<?php

namespace App\Http\Controllers;

use App\Models\application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;

class OrganizationController extends Controller
{
public function dashboard(){
    $user = Auth::guard('organization')->user();
    if ($user) {
        session(['company_name' => $user->company_name]);
    } else {
        // Handle the case when the user is not logged in
        // For example, you could redirect them to the login page
        return redirect('/organization');
    }
return view('organization.pages.dashboard');
}

public function application(){

    return view('organization.pages.application');
    }

public function ApplicationStore(Request $request)
    {
        $application = new application;
        $application->department = $request->department;
        $application->region = $request->region;
        $application->course = $request->course;
        $application->year = $request->year;
        $application->college = $request->college;
        $application->number_students = $request->number_students;

        $application->save();
    
        return redirect('/organization');
    }

public function table(){
return view('organization.pages.tables');
}

public function signin(){
return view('organization.pages.sign-in');
}
public function ValSignIn(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::guard('organization')->attempt($credentials)) {
        return redirect('/organization');
    }

    return back()->withErrors(['email' => 'Invalid credentials']);
}

public function signup(){
return view('organization.pages.sign-up');
}
public function ValSignUp(Request $request)
{
    $validatedData = $request->validate([
        'company_name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'unique:organizations'],
        'password' => ['required', 'min:5'],
    ]);

    $organization = Organization::create([
        'company_name' => $validatedData['company_name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
    ]);

    Auth::guard('organization')->login($organization);

    return redirect('/organization');
}

}
