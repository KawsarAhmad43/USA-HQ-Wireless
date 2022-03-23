<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Slider;


class BackSlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id','DESC')->get();
        return view('back-end.sliders', [
          'sliders' => $sliders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(Auth::check()){
        request()->validate([
          'title' => 'min:3',
          'slider' => 'required|image'
        ]);

        $folder = "image/banner/";

        if($image = $request->file('slider')){
          $ext = $image->extension();
          $image_name = "banner_".rand(100,999).".".$ext;
          $image_url = $folder.$image_name;
          $image->move($folder,$image_name);
        }

        $pre = Slider::orderBy('id','DESC')->first();
        if($pre){
          $position = $pre->position + 1;
        } else {
          $position= 1;
        }
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->img = $image_url;
        $slider->position = $position;
        $slider->sts = 1;

        $slider->save();

        return back()->with('msg-success', 'Success!! New Image added successfully.');
      }
      return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      if(Auth::check()){
        $pre = Slider::find($request->delete_id);
        $preimg = $pre->img;
        if($preimg){
          unlink($preimg);
        }
        $pre->delete();

        return back()->with('msg-success', 'Success!! Image deleted successfully.');
      }
      return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
    }
}
