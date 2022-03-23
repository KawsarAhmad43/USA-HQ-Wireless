<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;

class BackCategoriesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categories = Category::whereNull('mctg')->get();

    return view('back-end.categories', [
      'categories' => $categories
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
    $last_position = Category::where('sts', 1)->orderBy('position', 'DESC')->first();
    if ($last_position) {
      $new_position = $last_position->position + 1;
    } else {
      $new_position = 1;
    }
    if ($request->has('sts')) {
      $sts = 1;
    } else {
      $sts = 0;
      $new_position = null;
    }

    if (Auth::check()) {
      request()->validate([
        'name' => 'required|min:3'
      ]);

      $category = new Category();

      $category->name = $request->name;
      $category->position = $new_position;
      $category->sts = $sts;

      $category->save();

      return back()->with('msg-success', 'Success!! New category added successfully.');
    }
    return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
  }
  public function addsub(Request $request)
  {
    //dd($request->all());
    if ($request->has('substs')) {
      $sts = 1;
    } else {
      $sts = 0;
    }

    if (Auth::check()) {
      request()->validate([
        'subname' => 'required|min:3',
        'mctg' => 'required'
      ]);

      //dd($request->mctg);

      $category = new Category();

      $category->name = $request->subname;
      $category->mctg = $request->mctg;
      $category->sts = $sts;

      $category->save();

      return back()->with('msg-success', 'Success!! New sub-category added successfully.');
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
  public function update(Request $request)
  {
    if (Auth::check()) {
      request()->validate([
        'edit_name' => 'required|min:3'
      ]);
      $new_position = $request->edit_pos; //4

      if ($request->edit_pos == "") {
        $category = Category::whereNull('mctg')->orderBy('position', 'DESC')->first();
        $position = $category->position + 1;
      }

      if ($request->has('edit_sts')) {
        $sts = 1;
      } else {
        $sts = 0;
        $position = null;
      }

      $category = Category::find($request->edit_id);

      $category->name = $request->edit_name;
      $category->position = $position;
      $category->sts = $sts;

      $category->save();
      return back()->with('msg-success', 'Success!! Category info updated successfully.');
    }
    return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
  }

  public function updatesub(Request $request)
  {
    if (Auth::check()) {
      request()->validate([
        'edit_sub_name' => 'required|min:3',
        'edit_mctg' => 'required'
      ]);

      if ($request->has('edit_sub_sts')) {
        $sts = 1;
      } else {
        $sts = 0;
      }

      $category = Category::find($request->edit_sub_id);

      $category->name = $request->edit_sub_name;
      $category->mctg = $request->edit_mctg;
      $category->sts = $sts;

      $category->save();
      return back()->with('msg-success', 'Success!! Sub-Category info updated successfully.');
    }
    return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroySub($id)
  {
    Category::find($id)->delete();

    return back()->with('msg-success', 'Sub Category Deleted Successfully!!!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroyMain($id)
  {
    $check_first = Category::where('mctg', '=', $id);

    $bool = $check_first->count();

    if ($bool != 0) {
      return back()->with('msg-error', 'Are you sure ? Please Delete Sub Category First!!!');
    } else {
      Category::find($id)->delete();

      return back()->with('msg-success', 'Main Category Deleted Successfully!!!');
    }
  }
}
