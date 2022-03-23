<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class FrontPagesController extends Controller
{
    public function index($slug){
      $page = Page::where('slug',$slug)->first();

      return view('front-end.page',[
        'page' => $page
      ]);
    }
}
