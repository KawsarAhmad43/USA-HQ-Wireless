<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class BackChangePassController extends Controller
{
    public function index(){
      return view('back-end.changepass');
    }

    public function update(Request $request){
      if(Auth::check()){
        request()->validate([
          'crpassword' => 'required',
          'password' => 'required|confirmed'
        ]);

        $hashedpass = Auth::user()->password;

        if(Hash::check($request->crpassword,$hashedpass)){
          if(!Hash::check($request->password,$hashedpass)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect('/admin')->with('msg-success', 'Success!! Password updated successfully.');
          } else {
            return redirect('/admin/changepass')->with('msg-error', 'New Password cannot be same as old password');
          }
        } else {
          return redirect('/admin/changepass')->with('msg-error', 'Current Password not matched');
        }
      }
      return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
    }
}
