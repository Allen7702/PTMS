<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
public function dashboard(){
return view('organization.pages.dashboard');
}

public function application(){
    return view('organization.pages.application');
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
