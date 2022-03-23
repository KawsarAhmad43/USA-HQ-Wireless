<?php

namespace App\Http\Controllers\vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Seller;
use App\Product;
use App\Category;
use App\Products_categories;
use App\Hotdeal;
use DB;
use App\Order;

use App\Charts\SampleChart;
class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // public function __construct() {
    //     $this->middleware('auth');
    //  }


    public function index()
    {
      $to = date('Y-m-d');
    $from = date( 'Y-m-d', strtotime( $to . '-30 day'));
    $dates = array();
    $alldates = array();
    $orders = array();
    $totalorders = array();

    $oders = DB::table("orders")->select('order_date as date',DB::raw("COUNT(id) as totalorder"))->whereBetween('order_date',[$from,$to])->groupBy('order_date')->get();

    foreach ($oders as $oder) {
      $dates[] = $oder->date;
      $orders[$oder->date] = $oder->totalorder;
    }
    for($i=0;$i<30;$i++){
      $newdate = date( 'Y-m-d', strtotime( $to . '-'.(30-($i+1)).' day'));
      //echo $yesterday."<br />";
      $alldates[] = $newdate;
      if(in_array($newdate,$dates)){
        $totalorders[] = $orders[$newdate];
      } else {
        $totalorders[] = 0;
      }
    }

    $chart = new SampleChart;
    $chart->labels($alldates);
    $chart->dataset('Daily Orders', 'line', $totalorders)
          ->color("rgb(255, 99, 132)")
          ->backgroundcolor("rgb(255, 99, 132)")
          ->fill(false)
          ->linetension(0.1);

    $totalproduct = Product::count('id');
    $totalorder = Order::count('id');
    $totalsales = Order::sum('total_cost');
    $totalcustomer = Order::distinct('customer_phone')->count('customer_phone');
    $totalctg = Category::count('id');
    $pendingorders = Order::where('status','Pending')->count();
    $deliveredorders = Order::where('delivery_status','Delivered')->count();
    $processingorders = Order::where('delivery_status','Processing')->count();
    $canceledorders = Order::where('status','Canceled')->count();


       return view('back-end.vendor.index',[
      'chart' => $chart,
      'totalproduct' => $totalproduct,
      'totalorder' => $totalorder,
      'totalsales' => $totalsales,
      'totalcustomer' => $totalcustomer,
      'totalctg' => $totalctg,
      'pendingorders' => $pendingorders,
      'processingorders' => $processingorders,
      'deliveredorders' => $deliveredorders,
      'canceledorders' => $canceledorders
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addSeller()
    {
        return view('back-end.vendor.seller.add');
       
    }

    public function storeSeller(Request $request)
    {



        $this->validate($request,[

            'name' => 'required|min:5|max:255',
            'email' => 'nullable|email|max:255|',
            'img' => 'nullable|mimes:jpeg,jpg,png',
            'location' => 'required',
            'phone' => 'required|max:15',
            'bkash' => 'required|max:15',
            'address' => 'required|max:500',
            'description' => 'nullable|max:500',
        ]);


        //print_r($request->all());



        $folder = "back-end/seller/";

        if($image = $request->file('img')){
          $ext = $image->extension();
          $image_name = "Seller".rand(100,999).".".$ext;
          $image_url = $folder.$image_name;
          $image->move($folder,$image_name);
        }

        $user = Auth::user();
        $createdBY=$user->name;
        $isActive=1;

        //$createdBy="Vendor";
        $data = new Seller();


        $data->name=request('name');
        $data->email=request('email');
        $data->img=$image_url;
        $data->location=request('location');
        $data->phone=request('phone');
        $data->bkash=request('bkash');
        $data->address=request('address');
        $data->description=request('description');
        $data->createdBy=$createdBY;
        $data->isActive=$isActive;

        $data->save();

        return back()->with('status', 'Success!! New Seller added successfully.');


        //return view('back-end.vendor.seller.add');
       
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function addProduct(){
        $categories = Category::whereNull('mctg')->get();

       
         return view('back-end.vendor.products.add', [
            'categories' => $categories
          ]);
     }


    /**
     * Joining the table and getting data  
     * 
     * @return data to the view
     */

    protected function __getData(){
        $data=Seller::leftjoin('products','products.id','=','sellers.id')
    ->select('sellers.*','products.pcode')
    ->orderBy('isActive','DESC')
    ->get();

    return $data;
    }

    


    public function viewSeller()
    {
        if(request()->ajax()){
            return datatables()->of($this->__getData())
            ->addColumn('action',function($data){
              $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
              $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
              return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
          }


        return view('back-end.vendor.seller.view');
    }




    /**
     * Joining the table and getting data of Products
     * 
     * @return data to the view
     */

    protected function __getProducts()
    {
        $data = Product::leftjoin('sellers', 'sellers.id', '=', 'products.seller_id')
        ->select('products.*', 'sellers.name')
        ->orderBy('id')
        ->get();
      return $data;
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function viewProduct(){

        if(request()->ajax()){
            return datatables()->of($this->__getProducts())
            ->addColumn('action',function($data){
              $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
              $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">Delete</button>';
              return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
          }
          return view('back-end.vendor.products.view');



    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProduct(Request $request)
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
    public function destroy($id)
    {
        echo $id;
    }





}
