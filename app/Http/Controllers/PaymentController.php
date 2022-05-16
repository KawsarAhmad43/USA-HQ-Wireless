<?php

namespace App\Http\Controllers;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Subscription;
use App\Product;
use App\Order;
use App\OrderDetail;
use App\User;
use App\Notifysetting;
use App\Setting\App;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewOrderCustomer;
use App\Notifications\NewOrderAdmin;





class PaymentController extends Controller
{
    public function makePayment(Request $request)
    {
    $data=session()->get('request');
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Charge::create([
            "amount" => $data['totalCost'],
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Make payment and chill."
        ]);

        if ($charge['status'] == 'succeeded') {
            // 

            
    $order_date = date('Y-m-d');
    $status = 'Pending';

    $order = new Order();

    $order->order_date = $order_date; 
    $order->customer_name = $data['customer_name'];

    // $order->company_name = $request->company_name;
    // $order->strline = $request->strline;
    // $order->postcode = $request->postcode;
    // $order->state = $request->state;
    // $order->country = $request->country;
  
    $order->customer_phone = $data['customer_mobile']; 
    $order->customer_email = $data['customer_email']; 
    $order->customer_area = $data['customer_area'];
    $order->paymeth = $data['paymeth']; 
    $order->subtotal_cost = $data['subTotal']; 
    $order->deliver_cost = $data['delivery'];  
    $order->total_cost = $data['totalCost']; 
    $order->delivery_address = $data['customer_address']; 
    $order->delivery_status = $status;
    $order->status = $status; 

    $order->save();

    $order_id = $order->id;
    $tracking_no = $order_id . rand(10000, 99999);

    $update_order = Order::find($order_id);
    $update_order->tracking_no = $tracking_no;

    $update_order->save();

    $products = $data['products'];
    $qty = $data['qty'];  
    $price = $data['price']; 
    $total = $data['total']; 

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

        return "Please try again!";
    }
}
