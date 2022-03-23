<?php

namespace App\Http\Controllers;

use App\Notifications\OrderConfirmed;
use App\Notifysetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Order;
use App\OrderDetail;
use App\Product;

class BackOrdersController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    if (request()->ajax()) {
      return datatables()->of(Order::latest()->get())
        ->addColumn('action', function ($data) {
          $button = '<button type="button" name="edit" id="' . $data->id . '" class="view btn btn-primary btn-sm">View</button>';
          if ($data->delivery_status == "Pending" || $data->delivery_status == "Processing") {
            $button .= '<button type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">Cancel</button>';
          }
          return $button;
        })
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);
    }
    return view('back-end.orders');
  }

  public function pendingorders()
  {
    if (request()->ajax()) {
      return datatables()->of(Order::where('status', 'Pending')->orderBy('id', 'DESC')->get())
        ->addColumn('action', function ($data) {
          $button = '<button type="button" name="edit" id="' . $data->id . '" class="view btn btn-primary btn-sm">View</button>';
          if ($data->delivery_status == "Pending" || $data->delivery_status == "Processing") {
            $button .= '<button type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">Cancel</button>';
          }
          return $button;
        })
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);
    }
    return view('back-end.pendingorders');
  }

  public function processingorders()
  {
    if (request()->ajax()) {
      return datatables()->of(Order::where('delivery_status', 'Processing')->orderBy('id', 'DESC')->get())
        ->addColumn('action', function ($data) {
          $button = '<button type="button" name="edit" id="' . $data->id . '" class="view btn btn-primary btn-sm">View</button>';
          if ($data->delivery_status == "Pending" || $data->delivery_status == "Processing") {
            $button .= '<button type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">Cancel</button>';
          }
          return $button;
        })
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);
    }
    return view('back-end.processingorders');
  }

  public function deliveredorders()
  {
    if (request()->ajax()) {
      return datatables()->of(Order::where('delivery_status', 'Delivered')->orderBy('id', 'DESC')->get())
        ->addColumn('action', function ($data) {
          $button = '<button type="button" name="edit" id="' . $data->id . '" class="view btn btn-primary btn-sm">View</button>';
          if ($data->delivery_status == "Pending" || $data->delivery_status == "Processing") {
            $button .= '<button type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">Cancel</button>';
          }
          return $button;
        })
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);
    }
    return view('back-end.deliveredorders');
  }

  public function canceledorders()
  {
    if (request()->ajax()) {
      return datatables()->of(Order::where('status', 'Canceled')->orderBy('id', 'DESC')->get())
        ->addColumn('action', function ($data) {
          $button = '<button type="button" name="edit" id="' . $data->id . '" class="view btn btn-primary btn-sm">View</button>';
          if ($data->delivery_status == "Pending" || $data->delivery_status == "Processing") {
            $button .= '<button type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">Cancel</button>';
          }
          return $button;
        })
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);
    }
    return view('back-end.canceledorders');
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
    $order_details = Order::find($id);
    $products = OrderDetail::join('products', 'products.id', 'order_details.product_id')
      ->where('order_details.order_id', $id)->get(array('products.title', 'products.img1', 'order_details.product_qty', 'order_details.product_price', 'order_details.total_price'));
    //return $products;
    return view('back-end.vieworder', [
      'order' => $order_details,
      'products' => $products
    ]);
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
  public function orderaccept(Request $request, $id)
  {
    $order = Order::find($id);
    $order->status = "Received";
    $order->delivery_status = "Processing";
    $order->save();

    $admin = Notifysetting::latest()->first();

    if ($admin->notify_customer == 1 && $order->customer_email != null) {
      Notification::route('mail', $order->customer_email)->notify(new OrderConfirmed($order));
    }

    return back()->with('msg-success', 'Order has been accepted successfully.');
  }

  public function orderdelivered(Request $request, $id)
  {
    $order = Order::find($id);

    $order->delivery_status = "Delivered";

    $order->save();

    return back()->with('msg-success', 'Order has been delivered successfully.');
  }

  public function ordercanceled(Request $request, $id)
  {
    $order = Order::find($id);

    $order->status = "Canceled";
    $order->delivery_status = "Canceled";

    $order->save();

    return redirect('/admin/orders')->with('msg-success', 'Order has been Canceled successfully.');
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
