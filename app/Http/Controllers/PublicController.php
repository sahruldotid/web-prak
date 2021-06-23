<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class PublicController extends Controller
{
    function index(){
        $consultants = User::where('role', 'consultant')->get();
        return view("home.index", ['consultants' => $consultants]);
    }

    function hire($id){
        $consultant = User::findOrFail($id);
        if($consultant->role == "consultant"){
            return view('hire.index', ['consultant' => $consultant]);
        } else {
            return abort(403);
        }

    }
}
