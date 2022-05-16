<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerReg extends Model
{
    protected $fillable =[
        'company',
        'street1',
        'street2',
        'postcode',
        'city',
        'state',
        'country',
        'telephone',
        'taxvat',
        'username',
        'password',
        'confirmation',
        'firstname',
        'lastname',
        'email',
        'otp_mobile',
        


    ];
    public static function store($request){


        self::updateOrCreate(
            [
                'id' => $request->id,
            ],
            [
                'company'    => $request->company,
                
                'street1'   => $request->street1,
                'street2'   => $request->street2,
                'postcode'   => $request->postcode,
                'city'   => $request->city,
                'state'   => $request->state,
                'country'   => $request->country,
                'telephone'   => $request->telephone,
                'taxvat'   => $request->taxvat,
                'username'   => $request->username,
                'password'   => $request->password,
                'confirmation'   => $request->confirmation,
                'firstname'   => $request->firstname,
                'lastname'   => $request->lastname,
                'email'   => $request->email,
                'otp_mobile'   => $request->otp_mobile,
            ]
        );

       

        return back();


    }



}
