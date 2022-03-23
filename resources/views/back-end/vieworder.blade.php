@extends('back-end.admin')

@section('title')
View Order
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-info">
          <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Order Details
                    <small class="float-right">Date: {{$order->order_date}}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Customer Info</b>
                  <address>
                    <strong>{{$order->customer_name}}</strong><br>
                      Phone: {{ $order->customer_phone }}<br>
                    @if($order->customer_email)
                      Email: {{ $order->customer_email }}<br>
                    @endif
                      Address: {{ $order->delivery_address }}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <br>
                  <b>Order ID:</b> {{$order->tracking_no}}<br>
                  <b>Payment:</b> Chash on Delivery<br>
                  <b>Status:</b> @if($order->status == 'Pending') <span style="color:red;">Order {{$order->status}}</span> @else <span style="color:green;">Order {{$order->status}}</span> @endif<br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>SL#</th>
                      <th>Product</th>
                      <th>Qty</th>
                      <th>Price</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                      @php( $sl = 1 )
                      @foreach($products as $product)
                    <tr>
                      <td>{{ $sl }}</td>
                      <td><img src="{{url('image/product_image')}}/{{ $product->img1 }}" width="50"  /> &nbsp;{{ $product->title }}</td>
                      <td>{{$product->product_qty}}</td>
                      <td>$ {{$product->product_price}}</td>
                      <td>$ {{$product->total_price}}</td>
                    </tr>
                    @php($sl++)
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Note:</p>

                </div>
                <!-- /.col -->
                <div class="col-6">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$ {{$order->subtotal_cost}}</td>
                      </tr>
                      <tr>
                        <th>Delivery Cost:</th>
                        <td>$ {{$order->deliver_cost}}</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$ {{$order->total_cost}}</td>
                      </tr>
                    </tbody></table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="#" onclick="print();" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  @if($order->status == 'Pending')
                  <form action="{{ url('admin/orders/accept/'.$order->id)}}" method="post">
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-success float-right"> Accept Order</button>
                  </form>
                  @elseif($order->status == 'Received')
                    @if($order->delivery_status == 'Processing')
                    <form action="{{ url('admin/orders/delivered/'.$order->id)}}" method="post">
                      @csrf
                      @method('put')
                      <button type="submit" class="btn btn-success float-right"> Delivery Completed</button>
                    </form>
                    @endif
                  @endif
                  @if($order->delivery_status == 'Pending' || $order->delivery_status == 'Processing')
                  <form action="{{ url('admin/orders/canceled/'.$order->id)}}" method="post">
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-danger float-right" style="margin-right: 5px;"> Cancel Order</button>
                  </form>
                  @endif
                </div>
              </div>
            </div>
          <!-- /.invoice -->
        </div>
      </div>
  </div><!--/. container-fluid -->


</section>

@endsection

@section('script')
  @foreach(['success','error'] as $type)
      @if(Session::has('msg-'.$type))
        toastr.{{ $type }}('{{ Session::get('msg-'.$type) }}');
      @endif
  @endforeach

@endsection
