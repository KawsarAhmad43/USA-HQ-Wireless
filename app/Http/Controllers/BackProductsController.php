<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Hotdeal;
use App\Products_categories;
use Auth;
use Yajra\Datatables\Datatables;

class BackProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected function __getData()
    {

      $data = Product::leftjoin('sellers', 'sellers.id', '=', 'products.seller_id')
        ->select('products.*', 'sellers.name')
        ->orderBy('id')
        ->get();
      return $data;
    }

    public function index()
    {
      
        if(request()->ajax()){
          return datatables()->of($this->__getData())
          ->addColumn('action',function($data){
            $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">Delete</button>';
            return $button;
          })
          ->rawColumns(['action'])
          ->addIndexColumn()
          ->make(true);
        }
        return view('back-end.products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::whereNull('mctg')->get();

        return view('back-end.addproduct', [
          'categories' => $categories
        ]);
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

          // $title_slug = str_replace(" ","-",$request->name);
          // dd($title_slug);
          //dd(str_random(32));

          request()->validate([
            'name' => 'required|min:3',
            'img1' => 'required|image',
            'img2' => 'image',
            'img3' => 'image',
            'img4' => 'image',
            'rprice' => 'numeric',
            'sprice' => 'required'
          ]);

          $pdate = date('Y-m-d');
          $title_slug = str_replace(" ","-",$request->name);

          $folder = "image/product_image/";

          if($request->img1){
            $img1 = $request->file('img1');
            $ext = $img1->extension();
            $imgUrl1 = str_random(32).".".$ext;

            $img1->move($folder,$imgUrl1);
          } else {
            $imgUrl1 = null;
          }

          if($request->img2){
            $img2 = $request->file('img2');
            $ext = $img2->extension();
            $imgUrl2 = str_random(32).".".$ext;
            $img2->move($folder,$imgUrl2);
          } else {
            $imgUrl2 = null;
          }

          if($request->img3){
            $img3 = $request->file('img3');
            $ext = $img3->extension();
            $imgUrl3 = str_random(32).".".$ext;
            $img3->move($folder,$imgUrl3);
          } else {
            $imgUrl3 = null;
          }

          if($request->img4){
            $img4 = $request->file('img4');
            $ext = $img4->extension();
            $imgUrl4 = str_random(32).".".$ext;
            $img4->move($folder,$imgUrl4);
          } else {
            $imgUrl4 = null;
          }

          $product = new Product();

          $product->title = $request->name;
          $product->seller_id = $request->seller_id;
          $product->pcode = $request->pcode;
          $product->slug = $title_slug;
          $product->phone = $request->phone;
          $product->bkash = $request->bkash;
          $product->long_description = $request->long_description;
          $product->rprice = $request->rprice;
          $product->sprice = $request->sprice;
          $product->img1 = $imgUrl1;
          $product->img2 = $imgUrl2;
          $product->img3 = $imgUrl3;
          $product->img4 = $imgUrl4;
          $product->pdate = $pdate;
          $product->status = $request->action;
          $product->sts = 1;

          $product->save();

          $ctgs = $request->pr_ctg;
          $totalctg = count($ctgs);
          $product_id = $product->id;

          if($request->has('hot')){
            $hotdeal = new Hotdeal();
            $hotdeal->product_id = $product_id;
            $hotdeal->sts = 1;

            $hotdeal->save();
          }

          for($i=0;$i<$totalctg;$i++){
            $product_ctg = new Products_categories();

            $product_ctg->product_id = $product_id;
            $product_ctg->category_id = $ctgs[$i];

            $product_ctg->save();
          }

          return back()->with('msg-success', 'Success!! New Product added successfully.');
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
        $product = Product::where('id',$id)->first();
        $category = Products_categories::select('categories.id')->join('categories','categories.id','products_categories.category_id')
                            ->where('products_categories.product_id',$id)->get();
        $hotdeal = Hotdeal::where('product_id',$id)->first();
        $categories = Category::whereNull('mctg')->get();

        $hot = null;

        if($hotdeal){
          $hot = 1;
        }

        $ctgs = array();
        foreach($category as $key=>$ctg){
          $ctgs[$key] = $ctg->id;
        }

        return view('back-end.editproduct', [
          'product' => $product,
          'hotdeal' => $hot,
          'ctgs' => $ctgs,
          'categories' => $categories
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

        // $title_slug = str_replace(" ","-",$request->name);
        // dd($title_slug);
        //dd(str_random(32));

        request()->validate([
          'name' => 'required|min:3',
          'img1' => 'image',
          'img2' => 'image',
          'img3' => 'image',
          'img4' => 'image',
          'rprice' => 'numeric',
          'sprice' => 'required'
        ]);

        $title_slug = str_replace(" ","-",$request->name);

        $folder = "image/product_image/";

        if($request->img1){
          $img1 = $request->file('img1');
          $ext = $img1->extension();
          $imgUrl1 = str_random(32).".".$ext;

          $img1->move($folder,$imgUrl1);
          if($request->preimg1){
            unlink("image/product_image/".$request->preimg1);
          }
        } else {
          $imgUrl1 = null;
          if($request->preimg1){
            $imgUrl1 = $request->preimg1;
          }
        }

        if($request->img2){
          $img2 = $request->file('img2');
          $ext = $img2->extension();
          $imgUrl2 = str_random(32).".".$ext;
          $img2->move($folder,$imgUrl2);
          if($request->preimg2){
            unlink("image/product_image/".$request->preimg2);
          }
        } else {
          $imgUrl2 = null;
          if($request->preimg2){
            $imgUrl2 = $request->preimg2;
          }
        }

        if($request->img3){
          $img3 = $request->file('img3');
          $ext = $img3->extension();
          $imgUrl3 = str_random(32).".".$ext;
          $img3->move($folder,$imgUrl3);
          if($request->preimg3){
            unlink("image/product_image/".$request->preimg3);
          }
        } else {
          $imgUrl3 = null;
          if($request->preimg3){
            $imgUrl3 = $request->preimg3;
          }
        }

        if($request->img4){
          $img4 = $request->file('img4');
          $ext = $img4->extension();
          $imgUrl4 = str_random(32).".".$ext;
          $img4->move($folder,$imgUrl4);
          if($request->preimg4){
            unlink("image/product_image/".$request->preimg4);
          }
        } else {
          $imgUrl4 = null;
          if($request->preimg4){
            $imgUrl4 = $request->preimg4;
          }
        }

        $product = Product::find($id);

        $product->title = $request->name;
        $product->pcode = $request->pcode;
        $product->slug = $title_slug;
        $product->phone = $request->phone;
        $product->bkash = $request->bkash;
        $product->long_description = $request->long_description;
        $product->rprice = $request->rprice;
        $product->sprice = $request->sprice;
        $product->img1 = $imgUrl1;
        $product->img2 = $imgUrl2;
        $product->img3 = $imgUrl3;
        $product->img4 = $imgUrl4;

        $product->save();

        $dctg = Products_categories::where('product_id',$id)->delete();
        $dhot = Hotdeal::where('product_id',$id)->delete();

        $ctgs = $request->pr_ctg;
        $totalctg = count($ctgs);
        $product_id = $product->id;

        if($request->has('hot')){
          $hotdeal = new Hotdeal();
          $hotdeal->product_id = $product_id;
          $hotdeal->sts = 1;

          $hotdeal->save();
        }

        for($i=0;$i<$totalctg;$i++){
          $product_ctg = new Products_categories();

          $product_ctg->product_id = $product_id;
          $product_ctg->category_id = $ctgs[$i];

          $product_ctg->save();
        }

        return back()->with('msg-success', 'Success!! Product info updated successfully.');
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
      if(Auth::check()){
        $product = Product::find($id);

        $imgUrl1 = $product->img1;
        $imgUrl2 = $product->img2;
        $imgUrl3 = $product->img3;
        $imgUrl4 = $product->img4;

        if($imgUrl1){
          unlink("image/product_image/".$imgUrl1);
        }
        if($imgUrl2){
          unlink("image/product_image/".$imgUrl2);
        }
        if($imgUrl3){
          unlink("image/product_image/".$imgUrl3);
        }
        if($imgUrl4){
          unlink("image/product_image/".$imgUrl4);
        }
        $dctg = Products_categories::where('product_id',$id)->delete();
        $dhot = Hotdeal::where('product_id',$id)->delete();
        $product->delete();
        return back()->with('msg-success', 'Success!! Product info updated successfully.');
      }
      return back()->with('msg-error', 'Opps!! Something wrong, please try again.');
    }
}
