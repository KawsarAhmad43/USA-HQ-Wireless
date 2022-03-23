<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Auth;

class BackPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
    public function edit($slug)
    {
        $page = Page::where('slug',$slug)->first();
        return view('back-end.updatepage',[
          'page' => $page
        ]);
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
      if(Auth::check()){
        request()->validate([
          'title' => 'required|min:3',
          'slug' => 'required|min:3'
        ]);

        $page = Page::find($id);
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->description = $request->description;

        $page->save();

        return back()->with('msg-success', 'Success!! Page info updated successfully.');
      }
      return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
