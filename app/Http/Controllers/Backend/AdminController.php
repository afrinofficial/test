<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard(){
        return view("backend.dashboard");
    }

    public function adminHome(){
        return view("backend.home");
    }

    public function adminRegister(){
        return view("backend.register");
    }

}
