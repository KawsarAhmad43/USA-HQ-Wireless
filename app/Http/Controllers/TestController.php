<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function checkout()
     {
         return view('front-end.checkout');
    }
}
