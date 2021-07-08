<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use PDF;
use App\Models\Message;

class UserController extends Controller
{
    public function index(){
        $past = Order::all();
        return view("dashboard.dashboard_user.index", ['past' => $past]);
    }

    public function edit(){
        $user = User::find(Auth::id());
        return view("dashboard.dashboard_user.account", ['user' => $user]);
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
        return redirect()->route('user_edit');
    }

    public function chat(){
        $session = Order::all();
        return view("dashboard.dashboard_user.chat", ['session' => $session]);
    }

    public function transaction(){
        $user = User::find(Auth::id());
        return view("dashboard.dashboard_user.transaction", ['user' => $user->transaction]);
    }


    public function invoice($id){
        $user = User::find(Auth::id());
        $invoice = $user->transaction->find($id);
        if ($invoice){
            $pdf = PDF::loadView('invoice',['invoice' => $invoice]);
            return $pdf->download('invoice_'.$invoice->id.'.pdf'); 
        } else {
            return abort(403);
        }

    }

    public function purchase(Request $request){
        // dd($request);
        // dd($request->consultation_date);
        // dd(\Carbon\Carbon::parse($request->consultation_date)->addDays(1)->format('Y-m-d\TH:i'));
        // dd(Carbon::parse($request->consultation_date)->addDays(1)->format()->toDateString());
        $user = User::find(Auth::id());
        $transaction = Order::create([
            'user_id' => $user->id,
            'consultant_id' => $request->consultant_id,
            'amount' => $request->price,
            'consultation_date' =>  $request->consultation_date,
            'consultation_end' => Carbon::parse($request->consultation_date)->addDays(1)->format('Y-m-d\TH:i'),
        ]);
        
        return redirect()->route('user_transaction');
}
}