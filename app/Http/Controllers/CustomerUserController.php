<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerReg;
use Illuminate\Support\Facades\Hash;

class CustomerUserController extends Controller
{
        // login
        public function login()
        {
            return view('front-end.login');
        }
    
        public function customerlogin(Request $request)
        {
            $customerreg= CustomerReg::where(['email'=>$request->email])->first();
       if(!$customerreg || Hash::check($request->pswd.$customerreg->password)){
           return $mssg="Username or Password didn't matched";
       }
       else{
  return back();
       }
        }
}
