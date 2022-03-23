<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
  public function adminlogin() {
    return view('back-end.adminlogin');
  }
}
