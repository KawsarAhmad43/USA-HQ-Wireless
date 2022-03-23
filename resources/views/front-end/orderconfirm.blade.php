@extends('front-end.master')

@section('title')
Order Confirmation
@endsection

@section('content')
<section class="best_seller_product" style="background-color: #fff;padding-bottom: 10px" id="main_content_area">
    <section class="details_section">
      <div class="container" style="padding-right: 0  !important;;">
        <div class="row" style="margin-right: 0">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-sm-offset-2  col-md-offset-2  col-xl-offset-2" style="padding-left: 5px;padding-right: 5px; ">
                    <div class="btn btn-success" style="width: 100%; margin-bottom: 10px;border-radius: 5px;font-size: 18px;font-weight: bold;">Thank You. Your order has been received.</div>
                    <div class="panel panel-info">
                        <div class="panel-heading"><strong style="font-size: 16px;color: #000;"> Order Information  </strong></div>
                        <div class="panel-body " style="padding: 0">
                            <table class="table table-bordered" style="margin-top: 0px;margin-bottom: 0px;">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody id="CustomerOrderData">
                                        @foreach($products as $product)
                                        <tr style="cursor: pointer">
                                            <td>
                                                <img style="width: 60px;float:left;margin-right:10px;" class="img-responsive" src="{{asset('/')}}image/product_image/{{$product->img1}}">
                                                {{$product->title}} <br>
                                                <strong>$ {{$product->product_price}} ✖ {{$product->product_qty}}</strong>
                                            </td>
                                            <td><strong>$ {{$product->total_price}}</strong></td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                          <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Delivery Cost</td>
                                          <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold">  $ {{$order_details->deliver_cost}}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Total</td>
                                            <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold">  $ {{$order_details->total_cost}}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Order Number</td>
                                            <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> {{$order_details->tracking_no}} </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Payment Method</td>
                                            <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Cash On Delivery </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 5px;padding-right: 5px;padding-bottom: 100px;padding-top: 20px">
                    <center>
                        <a href="{{ url('/') }}" class="btn btn-info" style="background:#148AD2;color: #fff;font-weight: bold"> Shop More </a>
                    </center>
                </div>
        </div>
    </div>
    </section>
</section>
@endsection
