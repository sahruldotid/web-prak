<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->role == "user"){
            return redirect()->route("user_dashboard");
        } elseif(Auth::user()->role == "consultant"){
            return redirect()->route("consultant_dashboard");
        } elseif (Auth::user()->role == "admin"){
            return redirect()->route("admin_dashboard");
        }
    }
}
