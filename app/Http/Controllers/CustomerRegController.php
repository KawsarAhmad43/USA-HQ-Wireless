<?php

namespace App\Http\Controllers;


use App\CustomerReg;
use Illuminate\Http\Request;

class CustomerRegController extends Controller
{



    // reg
    public function regi()
    {
        return view('front-end.registration');
    }
    // logout
    public function logout()
    {
        auth('web')->logout();
        return redirect('/');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'telephone' => 'required|max:11|min:10',
            

        ]);



        $registration = new CustomerReg();
        $registration->company = $request->company;
        $registration->street1 = $request->street1;
        $registration->street2 = $request->street2;
        $registration->postcode = $request->postcode;
        $registration->city = $request->city;
        $registration->state = $request->state;
        $registration->country = $request->country;
        $registration->telephone = $request->telephone;
        $registration->taxvat = $request->taxvat;
        $registration->username = $request->username;
        $registration->password = $request->password;
        $registration->confirmation = $request->confirmation;
        $registration->firstname = $request->firstname;
        $registration->lastname = $request->lastname;
        $registration->email = $request->email;
        $registration->otp_mobile = $request->otp_mobile;


        $registration->save();

       
        return redirect()->back()->with('msg', 'Successful');  

        
    }




    // backend

    public function customerview(){
        return view('back-end.customerreglist');
    }








}
