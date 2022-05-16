<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewOrderCustomer;
use App\Notifications\NewOrderAdmin;
use App\Product;
use App\Order;
use App\OrderDetail;
use App\User;
use App\Notifysetting;
use App\Setting\App;
use Cart;

use Mail;

class AllOrdersController extends Controller
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

  public function orderconfirm($id)
  {
    Cart::destroy();
    $order_details = Order::find($id);
    $products = OrderDetail::join('products', 'products.id', 'order_details.product_id')
      ->where('order_details.order_id', $id)->get(array('products.title', 'products.img1', 'order_details.product_qty', 'order_details.product_price', 'order_details.total_price'));
    //return $products;
    return view('front-end.orderconfirm', [
      'order_details' => $order_details,
      'products' => $products
    ]);
  }
  public function orderdetails($order_no)
  {
    $order_details = Order::where('tracking_no', $order_no)->first();
    $products = null;

    if (!$order_details == null) {
      $products = OrderDetail::join('products', 'products.id', 'order_details.product_id')
        ->where('order_details.order_id', $order_details->id)->get(array('products.title', 'products.img1', 'order_details.product_qty', 'order_details.product_price', 'order_details.total_price'));
      //return $products;
    }
    return view('front-end.orderhistory', [
      'order_details' => $order_details,
      'products' => $products
    ]);
  }
  public function ordertrack(Request $request)
  {
    $phone = $request->phone;
    $products = null;

    $order_details = Order::where('customer_phone', $phone)->orderBy('id', 'DESC')->first();
    if ($order_details) {
      $products = OrderDetail::join('products', 'products.id', 'order_details.product_id')
        ->where('order_details.order_id', $order_details->id)->get(array('products.title', 'products.img1', 'order_details.product_qty', 'order_details.product_price', 'order_details.total_price'));
    }
    //return $products;
    return view('front-end.orderhistory', [
      'order_details' => $order_details,
      'products' => $products
    ]);
  }




  
  public function ordersubmit(Request $request)
  {
    $cashcom="COD";
    $stripecom="online_payment";
    request()->validate([
      'customer_name' => 'required|min:3',
      'customer_mobile' => 'required',
      'customer_email' => 'sometimes|nullable|email',
      'customer_area' => 'required',
      'paymeth' => 'required',
      'customer_address' => 'required'
    ]);
    if($request->paymeth==$cashcom){

      
    $order_date = date('Y-m-d');
    $status = 'Pending';

    $order = new Order();

    $order->order_date = $order_date;
    $order->customer_name = $request->customer_name;
    $order->lname = $request->lname;
// 
    $order->company = $request->company;
    $order->strline = $request->strline;
    $order->postcode = $request->postcode;
    $order->addoptional = $request->addoptional;
    $order->state = $request->state;
    $order->city = $request->city;
    $order->country = $request->country;
  // 
    $order->customer_phone = $request->customer_phone;
    $order->customer_email = $request->customer_email;
    $order->customer_area = $request->customer_area;
    $order->paymeth = $request->paymeth;
    $order->subtotal_cost = $request->subTotal;
    $order->deliver_cost = $request->delivery;
    $order->total_cost = $request->totalCost;
    $order->delivery_address = $request->customer_address;
    $order->delivery_status = $status;
    $order->status = $status;

    $order->save();

    $order_id = $order->id;
    $tracking_no = $order_id . rand(10000, 99999);

    $update_order = Order::find($order_id);
    $update_order->tracking_no = $tracking_no;

    $update_order->save();

    $products = $request->products;
    $qty = $request->qty;
    $price = $request->price;
    $total = $request->total;

    $total_product = count($products);

    $sl = 1;
    for ($i = 0; $i < $total_product; $i++) {
      $order_details = new OrderDetail();

      $order_details->order_id = $order_id;
      $order_details->product_id = $products[$i];
      $order_details->product_qty = $qty[$i];
      $order_details->product_price = $price[$i];
      $order_details->total_price = $total[$i];
      $order_details->sts = 1;

      $order_details->save();

      $sl++;
    }

    $order = $update_order;

    $admin = Notifysetting::latest()->first();

    if ($admin->notify_admin == 1 && $admin->admin_mail != null) {
      Notification::route('mail', $admin->admin_mail)->notify(new  NewOrderAdmin($order));
    }
    if ($admin->notify_customer == 1 && $request->customer_email != null) {
      Notification::route('mail', $request->customer_email)->notify(new  NewOrderCustomer($order));
    }

    return redirect()->route('confirm', $order_id)->with('msg', 'Thank you! Your order has been received.');

// 
    }
    else{

      session()->put('request',$request->all());
      $data=session()->get('request');



        return view('payment');



    }




    $order_date = date('Y-m-d');
    $status = 'Pending';

    $order = new Order();

    $order->order_date = $order_date;
    $order->customer_name = $request->customer_name;

    // $order->company_name = $request->company_name;
    // $order->strline = $request->strline;
    // $order->postcode = $request->postcode;
    // $order->state = $request->state;
    // $order->country = $request->country;
  
    $order->customer_phone = $request->customer_phone;
    $order->customer_email = $request->customer_email;
    $order->customer_area = $request->customer_area;
    $order->subtotal_cost = $request->subTotal;
    $order->deliver_cost = $request->delivery;
    $order->total_cost = $request->totalCost;
    $order->delivery_address = $request->customer_address;
    $order->delivery_status = $status;
    $order->status = $status;

    $order->save();

    $order_id = $order->id;
    $tracking_no = $order_id . rand(10000, 99999);

    $update_order = Order::find($order_id);
    $update_order->tracking_no = $tracking_no;

    $update_order->save();

    $products = $request->products;
    $qty = $request->qty;
    $price = $request->price;
    $total = $request->total;

    $total_product = count($products);

    $sl = 1;
    for ($i = 0; $i < $total_product; $i++) {
      $order_details = new OrderDetail();

      $order_details->order_id = $order_id;
      $order_details->product_id = $products[$i];
      $order_details->product_qty = $qty[$i];
      $order_details->product_price = $price[$i];
      $order_details->total_price = $total[$i];
      $order_details->sts = 1;

      $order_details->save();

      $sl++;
    }

    $order = $update_order;

    $admin = Notifysetting::latest()->first();

    if ($admin->notify_admin == 1 && $admin->admin_mail != null) {
      Notification::route('mail', $admin->admin_mail)->notify(new  NewOrderAdmin($order));
    }
    if ($admin->notify_customer == 1 && $request->customer_email != null) {
      Notification::route('mail', $request->customer_email)->notify(new  NewOrderCustomer($order));
    }

    return redirect()->route('confirm', $order_id)->with('msg', 'Thank you! Your order has been received.');
  }

  public function sendmail()
  {
    $order = Order::find(12);

    Notification::route('mail', App::email)->notify(new  NewOrderCustomer($order));
  }

  public function additem(Request $request)
  {
    $product = Product::find($request->product_id);
    $qty = $request->quantity;

    Cart::setGlobalTax(0);

    Cart::add($product->id, $product->title, $qty, $product->sprice);

    $totalItem = Cart::content()->count();
    $totalAmount = Cart::total(0, '', '');

    $data = array(
      'totalItem' => $totalItem,
      'totalAmount' => $totalAmount
    );
    return json_encode($data);
  }

  public function cart()
  {
    $cartItems = Cart::content();
    $subTotal = Cart::subtotal(0, '', '');
    //dd($cartItems);
    return view('front-end.cart', [
      'cartItems' => $cartItems,
      'subTotal' => $subTotal
    ]);
  }

  public function cartupdate(Request $request)
  {
    Cart::update($request->rowId, $request->qty);

    //return $request->rowId;

    $total = Cart::get($request->rowId)->total;
    $totalItem = Cart::content()->count();
    $totalAmount = Cart::total(0, '', '');

    $data = array(
      'total' => $total,
      'totalItem' => $totalItem,
      'totalAmount' => $totalAmount
    );
    return json_encode($data);
  }

  public function cartremove(Request $request)
  {
    Cart::remove($request->rowId);

    //return $request->rowId;

    $totalItem = Cart::content()->count();
    $totalAmount = Cart::total(0, '', '');

    $data = array(
      'totalItem' => $totalItem,
      'totalAmount' => $totalAmount
    );
    return json_encode($data);
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
    //
  }
}
