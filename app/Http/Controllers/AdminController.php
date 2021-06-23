<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Profile;

class AdminController extends Controller
{
    public function index(){
        $activity = Order::all();
        // dd($activity);

        return view("dashboard.dashboard_admin.index", ['activity' => $activity]);
    }

    public function edit(){
        $user = User::find(Auth::id());
        return view("dashboard.dashboard_admin.account", ['user' => $user]);
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
        return redirect()->route('admin_edit');
        
       
    }


    public function customer(){
        $customers = User::where('role', 'user')->get();
        return view("dashboard.dashboard_admin.customer", ['customers' => $customers]);
    }

    public function consultant(){
        $consultants = User::where('role', 'consultant')->get();
        return view("dashboard.dashboard_admin.consultant",['consultants' => $consultants]);
    }
}
