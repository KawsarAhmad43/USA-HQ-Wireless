<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\Category;
use App\Charts\SampleChart;

use DB;

class BackHomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      //$this->middleware('auth');
  }

  public function index() {
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

    //dd($canceledorders);

    return view('back-end.deshboard',[
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
}
