<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Profile;
class ConsultantController extends Controller
{

    public function index(){
        
        return view("dashboard.dashboard_consultant.index");
    }

    public function edit(){
        if(!Profile::where('user_id', Auth::id())->first()){
            $profile = new Profile;
            $profile->user_id = Auth::id();
            $profile->save();
        }
        $user = User::find(Auth::id());
        return view("dashboard.dashboard_consultant.account", ['user' => $user]);
    }

    public function images(Request $request){
        if($request->file('image')){
            $compressedImage = cloudinary()->upload($request->file('image')->getRealPath(), [
                'folder' => 'uploads',
                'transformation' => [
                          'height' => 150,
                          'width' => 150,
                ]
            ])->getSecurePath();

            return $compressedImage;
        } else {
            $img = Profile::where('user_id', Auth::id())->first();
            return $img->profile_pic;
        }
    }

    public function update(Request $request){
        $compressedImage = self::images($request);
        $user = User::find(Auth::id());
        $profile = $user->profile;
        $user->name = $request->name;
        $profile->gender = $request->gender;
        $profile->education = $request->education;
        $profile->skill = $request->skill;
        $profile->bio = $request->bio;
        $profile->profile_pic = $compressedImage;
        $user->save();
        $profile->save();

        return redirect()->route('consultant_edit');
        
       
    }

    public function chat(){
        return view("dashboard.dashboard_consultant.chat");
    }

    public function transaction(){
        return view("dashboard.dashboard_consultant.transaction");
    }
}
