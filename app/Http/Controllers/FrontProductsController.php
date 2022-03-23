<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Hotdeal;
use App\Category;
use App\Products_categories;
use App\Slider;

class FrontProductsController extends Controller
{
    public function index() {
      $products = Product::where('status','publish')->orderBy('id', 'DESC')->paginate(36);
      $hotdeals1 = Hotdeal::join('products', 'hotdeals.product_id','products.id')->select('products.*')->where('products.status','publish')->orderBy('products.id', 'DESC')->take(12)->get();
      $hotdeals2 = Hotdeal::join('products', 'hotdeals.product_id','products.id')->select('products.*')->where('products.status','publish')->orderBy('products.id', 'DESC')->skip(12)->take(12)->get();

      $categories = Category::where('sts','=',1)->orderBy('id','ASC')->get();

      $sliders = Slider::orderBy('id','DESC')->get();
      //dd($hotdeals);

      return view('front-end.home', [
        'products' => $products,
        'hotdeals1' => $hotdeals1,
        'hotdeals2' => $hotdeals2,
        'categories' => $categories,
        'sliders' => $sliders
      ]);
    }

    public function hotdeals(){
      $products = Hotdeal::join('products', 'hotdeals.product_id','products.id')->select('products.*')->where('products.status','publish')->orderBy('products.id', 'DESC')->paginate(36);
      return view('front-end.hotdeals', [
        'products' => $products
      ]);
    }


    public function single($id,$slug){

      $product = Product::where('id',$id)->first();
      $category = Products_categories::select('categories.id')->join('categories','categories.id','products_categories.category_id')
                          ->where('products_categories.product_id',$id)->first();
      $more = Product::select('products.*')
                      ->join('products_categories','products_categories.product_id','products.id')
                      ->where('products.status','publish')->where('products_categories.category_id',$category->id)->orderBy('products.id', 'DESC')->take(30)->get();
      //dd($product->title);
      //return $more;
      return view('front-end.product', [
        'product' => $product,
        'related' => $more
      ]);
    }

    public function productsearch($words){
      if($words == "null"){
        $products = Product::orderBy('id','DESC')->take(30)->get();
      } else {
        $products = Product::where('title','LIKE',"%{$words}%")->orderBy('id','DESC')->get();
      }

      return view('front-end.searchproduct', [
        'products' => $products
      ]);
    }

    public function itemsbyctg($name,$id){
      $products = Product::select('products.*')
                      ->join('products_categories','products_categories.product_id','products.id')
                      ->where('products.status','publish')->where('products_categories.category_id',$id)->orderBy('products.id', 'DESC')->paginate(36);
      $category = Category::find($id);
      return view('front-end.itemsbyctg', [
        'products' => $products,
        'category' => $category
      ]);
    }
}
