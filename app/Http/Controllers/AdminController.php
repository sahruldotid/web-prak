<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("dashboard.dashboard_admin.index");
    }

    public function edit(){
        return view("dashboard.dashboard_admin.account");
    }

    public function customer(){
        return view("dashboard.dashboard_admin.customer");
    }

    public function consultant(){
        return view("dashboard.dashboard_admin.consultant");
    }
}
