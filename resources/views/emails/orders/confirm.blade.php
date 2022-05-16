
<table style="width:100%;text-align: center;">
    <tr>
      <td style="padding: 20px;font-weight: bold;font-size: 20px;background: #F8FAFC;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';font-weight: bold;">
        <a href="{{ url('/') }}" style="text-decoration: none;">{{ $basic->name }}</a>
      </td>
    </tr>
    <tr>
      <td>
        <table width="570" align="center">
          <tr>
            <td>
              <table class="table table-bordered" border="1" style="border-collapse: collapse;width: 100%;margin-top: 0px;margin-bottom: 0px;">
                <thead>
                    <tr>
                        <th colspan="2" style="text-align:center;">Customer Information</th>
                    </tr>
                </thead>
                  <tbody id="CustomerOrderData">
                          <tr>
                            <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Name</td>
                            <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> {{$order_details->customer_name}}</td>
                          </tr>
                          <tr>
                            <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Name</td>
                            <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> {{$order_details->customer_name}}</td>
                          </tr>
                          <tr>
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Phone</td>
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold">  {{$order_details->customer_phone}}</td>
                          </tr>
                          <tr>
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Email</td>
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> {{$order_details->customer_email}} </td>
                          </tr>
                          <tr>
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Area</td>
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> @if($order_details->customer_area == 1) Inside Dhaka @else Outside Dhaka @endif </td>
                          </tr>
                          <tr>
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Shipping Address</td>
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> {{$order_details->delivery_address}} </td>
                          </tr>
                  </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td>
              <table class="table table-bordered" border="1" style="border-collapse: collapse;width: 100%;margin-top: 0px;margin-bottom: 0px;">
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
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> {{$order_details->tracking_no}} <a href="{{ url('/order/track/'.$order_details->tracking_no) }}" target="_blank">Click here to track order.</a> </td>
                          </tr>
                          <tr>
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold;color: #4CAF50;"> Order Status</td>
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold;color:#fff;@if($order_details->delivery_status == 'Pending') background:#f43636; @elseif($order_details->status == 'Canceled') background: #f43636; @elseif($order_details->delivery_status == 'Processing') background: #FF5722; @elseif($order_details->delivery_status == 'Delivered') background: #4CAF50; @endif">
                                {{$order_details->delivery_status}}@if($order_details->delivery_status == 'Pending')...@endif
                              </td>
                          </tr>
                          <tr>
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Payment Method</td>
                              <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Online Payment </td>
                          </tr>
                          <tr>
                              <td colspan="2"> <a href="{{ url('admin/orders/'.$order_details->id) }}" style="width:100%;padding:10px 0 !important;text-align:center;font-size:16px;font-weight:bold;background:#4990DC;color: #fff;display: block;text-decoration: none;" target="_blank">Click here to Accept Order</a></td>
                          </tr>
                  </tbody>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td style="padding: 14px;font-weight: bold;background: #F8FAFC;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">
        © <?php echo date('Y'); ?> {{$basic->name}}. All rights reserved.
      </td>
    </tr>
  </table>
  