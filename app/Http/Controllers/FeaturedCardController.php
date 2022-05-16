<?php

namespace App\Http\Controllers;

use App\FeaturedCard;
use App\Models\Post;
use Illuminate\Http\Request;

class FeaturedCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feature = FeaturedCard::latest()->paginate(15);

        return view('back-end.featured.index', [
            'feature' => $feature,
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
        $validated = $request->validate([
            'name' => 'required|max:20|min:3',
            'image' => 'required|max:2048',

        ]);

        if ($request->has('image')) {
            $image = time().'.'.$request->image->extension();
            $request->image->move(
                public_path('content/featured'),
                $image
            );
        } else {
            $image = 'featured.png';
        }

        $feature = new FeaturedCard();
        $feature->name = $request->name;
        $feature->image = $image;
        $feature->category_link = $request->category_link;
        $feature->save();

       
        return back()->with('msg-success', 'Success!! New data added successfully.');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeaturedCard  $featuredCard
     * @return \Illuminate\Http\Response
     */
    public function show(FeaturedCard $featuredCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeaturedCard  $featuredCard
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $featured = FeaturedCard::latest()->paginate(15);
        $feature = FeaturedCard::where('id', $id)->firstOrFail();

        return view('back-end.featured.edit', [
            'featured' => $featured,
            'feature' => $feature,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeaturedCard  $featuredCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:20|min:3',
            'image' => 'max:2048',

        ]);

        if ($request->has('image')) {
            $image = time().'.'.$request->image->extension();
            $request->image->move(
                public_path('content/featured'),
                $image
            );
        } elseif ($request->has('id') && $request->get('id') != '') {
            $feature = FeaturedCard::find($request->id);
            $image = $feature->image;
        } else {
            $image = 'featured.png';
        }
        $feature = FeaturedCard::find($request->id);

        $feature->name = $request->name;
        $feature->image = $image;
        $feature->category_link = $request->category_link;
        $feature->update();
      
        return back()->with('msg-success', 'Success!! data updated successfully.');
        return redirect()->route('back-end.featured.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeaturedCard  $featuredCard
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
              // delete zoombie post first.
              FeaturedCard::find($id)->delete();

              return back()->with('msg-success', 'Deleted Successfully!!!');
     }
}