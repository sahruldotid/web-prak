<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Profile;
class ConsultantController extends Controller
{

    public function index(){
        $session = Order::where('consultant_id', Auth::id())->get();
        return view("dashboard.dashboard_consultant.index", ['session' => $session]);
    }

    public function edit(){
        $user = User::find(Auth::id());
        return view("dashboard.dashboard_consultant.account", ['user' => $user]);
    }

    public function images(Request $request){
        if($request->file('image')){
            $compressedImage = cloudinary()->upload($request->file('image')->getRealPath(), [
                'folder' => 'uploads',
                'transformation' => [
                          'height' => 348,
                          'width' => 348,
                ]
            ])->getSecurePath();

            return $compressedImage;
        } else {
            $img = User::find(Auth::id());
            return $img->profile_pic;
        }
    }

    public function update(Request $request){
        $compressedImage = self::images($request);
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->education = $request->education;
        $user->skill = $request->skill;
        $user->bio = $request->bio;
        $user->profile_pic = $compressedImage;
        $user->save();
        return redirect()->route('consultant_edit');
        
       
    }

    public function chat(){
       
        return view("dashboard.dashboard_consultant.chat", ['session' => $session]);
    }

    public function transaction(){
        return view("dashboard.dashboard_consultant.transaction");
    }
}
