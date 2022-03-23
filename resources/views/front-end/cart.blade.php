@extends('front-end.master')

@section('title')
Product Cart
@endsection

@section('content')
<section class="best_seller_product" style="background-color: #fff;padding-bottom: 10px" id="main_content_area">
    <section class="details_section">
      <div class="container" style="padding-right: 0  !important;;">
          @if($cartItems->count())
          <form action="{{ url('/order/submit') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            @csrf
          <div class="row" style="margin-right: 0">
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-left: 5px;padding-right: 5px">
                  <div class="panel panel-success">
                      <div class="panel-heading">
                          <strong style="font-size: 16px;color: #000018"> Customer Information </strong>
                      </div>
                      <div class="panel-body" style="padding-left: 30px;padding-right: 30px">
                              <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                                      <div class="form-group" style="padding-bottom: 15px">
                                          <!--<input name="product_id" type="hidden" value="">-->
                                          <input style="width: 100% !important;border: 1px solid #4997A2;padding-left: 10px" name="customer_name" type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1"  value="{{ old('customer_name') }}">
                                          @error('customer_name')
                                              <span class="invalid-feedback" style="color:red;" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                      <div class="form-group" style="padding-bottom: 15px">
                                          <input style="width: 100% !important;border: 1px solid #4997A2;padding-left: 10px" name="customer_mobile" required type="number" class="form-control" placeholder="Mobile" aria-describedby="basic-addon1" value="{{ old('customer_mobile') }}">
                                          @error('customer_mobile')
                                          <span class="invalid-feedback" style="color:red;" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>
                                      <div class="form-group" style="padding-bottom: 15px">
                                          <input style="width: 100% !important;border: 1px solid #4997A2;padding-left: 10px" name="customer_email" type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" value="{{ old('customer_email') }}">
                                          @error('customer_email')
                                          <span class="invalid-feedback" style="color:red;" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>
                                      <div class="form-group" style="padding-bottom: 15px">
                                          <select id="DeliAddress" onchange="UpdateOrderInfo(this.value)" name="customer_area" required="required" class="form-control" style="border: 1px solid #4997A2">
                                              <option value="" disabled>Select Your Area</option>
                                              <option selected="" value="1">Inside Los Angeles</option>
                                              <option value="2">Outside Los Angeles</option>
                                          </select>
                                          @error('customer_area')
                                          <span class="invalid-feedback" style="color:red;" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>
                                      <div class="form-group" style="padding-bottom: 15px">
                                          <textarea style="border: 1px solid #4997A2;" class="form-control" name="customer_address" required="" placeholder="Delivery Address" spellcheck="false">{{ old('customer_address') }}</textarea>
                                          @error('customer_address')
                                          <span class="invalid-feedback" style="color:red;" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>
                                      <div class="form-group" style="padding-bottom: 15px">
                                          <input id="submitBTN" type="submit" class="btn btn-success btn-block" value="Submit Order" style="width:100% !important;background: #148AD2">
                                      </div>
                                       <div class="form-group" style="padding-bottom: 15px">
                                            <a href="{{ url('/') }}" class="btn btn-info" style="width: 100%;border-radius: inherit;background:#4997A2"> Shop More </a>
                                       </div>

                              </div>

                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-left: 5px;padding-right: 5px; ">
                  <div class="panel panel-info">
                      <div class="panel-heading"><strong style="font-size: 16px;color: #000;">  Order Information</strong></div>
                      <div class="panel-body " style="padding: 0">
                          <table class="table table-hover" style="margin-top: 0px;">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Image</th>
                                      <th>Qty</th>
                                      <th>Price</th>
                                      <th>Total</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody id="CustomerOrderData">
                                @foreach($cartItems as $item)
                                    @php($product = App\Product::find($item->id))
                                  <tr style="cursor: pointer;font-size: 12px;" id="{{$item->id}}">
                                      <td>
                                        {{ $product->title }}
                                        <input type="hidden" value="{{ $item->id }}" name="products[]" />
                                      </td>
                                      <td style="padding-left: 0;padding-right: 0;">
                                          <img style="width:60px;height: 60px" src="{{ asset('/') }}image/product_image/{{ $product->img1 }}" title="{{ $product->title }}">
                                      </td>
                                      <td>
                                          <div style="float: left;padding: 3px 10px;">
                                              <div style="color: #ddd; font-size: 16px;
                                                   text-align: left;
                                                   cursor: pointer;
                                                   font-weight: bold;
                                                   float: left;
                                                   padding: 2px 4px;
                                                   border: 1px solid;" onclick="DecrementFunction('{{$item->id}}','{{$item->rowId}}');">
                                                  <i class="fa fa-minus-square"></i>
                                              </div>
                                              <span style="float: left;
                                              float: left;
                                              font-size: 16px;
                                              text-align: center;
                                              color: gray;
                                              cursor: pointer;
                                              border: 1px solid #ddd;
                                              height: 28px;
                                              line-height: 30px;
                                              padding: 0px 4px;
                                              width: 28px;" id="quantity-value{{$item->id}}">{{$item->qty}}</span>
                                              <input id="val-quantity-value{{$item->id}}" type="hidden" value="{{ $item->qty }}" name="qty[]" />

                                              <div onclick="IncrementFunction('{{$item->id}}','{{$item->rowId}}')" style="    color: #ddd;
                                                   font-size: 16px;
                                                   text-align: right;
                                                   cursor: pointer !important;
                                                   font-weight: bold;
                                                   float: left;
                                                   padding-left: 5px;
                                                   padding: 2px 4px;
                                                   border: 1px solid;">
                                                  <i class="fa fa-plus-square" style="color:green"></i>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                        $ {{$item->price}}
                                        <input id="val-price{{$item->id}}" type="hidden" value="{{ $item->price }}" name="price[]" />
                                      </td>
                                      <td>
                                        $ <span id="total{{$item->id}}">{{$item->total}}</span>
                                        <input id="val-total{{$item->id}}" type="hidden" value="{{ $item->total }}" name="total[]" />
                                      </td>
                                      <td>
                                          <a href="javascript:void(0)" onclick="CartDataRemove('{{$item->rowId}}','{{$item->id}}')" style="color:#1D70BA ;font-weight: bold;background: #ddd;padding: 2px 5px;">
                                              <i class="fa fa-remove" title="Remove"></i>
                                          </a>
                                      </td>
                                  </tr>
                                @endforeach
                                  <tr>
                                      <td colspan="4" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Sub Total</td>
                                      <td colspan="2" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold">
                                        $  <span id="subtotal">{{$subTotal}}</span>
                                        <input id="val-subtotal" type="hidden" value="{{ $subTotal }}" name="subTotal" />
                                      </td>
                                  </tr>
                                  <tr>
                                      <td colspan="4" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Delivery Cost</td>
                                      <td colspan="2" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold" id="CustomerDeliveryPoint">
                                        $  <span id="deliveryCost"></span>
                                        <input id="val-deliveryCost" type="hidden" value="" name="delivery" />
                                      </td>
                                  </tr>
                                  <tr>
                                    <td colspan="4" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Grand Total</td>
                                    <td colspan="2" style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold" id="GrandOrderTk">
                                        $  <span id="totalCost">0</span>
                                        <input id="val-totalCost" type="hidden" value="" name="totalCost" />
                                    </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              </form>
          </div>
          @else
          <div class="row" style="margin: 20px 0;">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 5px;padding-right: 5px">
                  <center>  <img src="{{ asset('/') }}image/no-product.jpg" class="img-responsive">
                      <h3> No Product Found</h3>
                      <a href="{{ url('/') }}" class="btn btn-info">Chose Product</a>
                  </center>
              </div>
          </div>
          @endif
      </div>
  </section>
</section>
<script>
    $(document).ready(function() {

        @if( old('customer_area') )
          $("#DeliAddress").val('{{old('customer_area')}}');
        @endif

        var deliAddress = $("#DeliAddress").val();
        var totalAmount = $("#subtotal").text();
        totalAmount = totalAmount.replace(/,/g,'');
        var deliveryCost = 0;

        if(deliAddress == 1){
          deliveryCost = {{$basic->delivery_cost1}};
        } else {
          deliveryCost = {{$basic->delivery_cost2}};
        }

        $("#deliveryCost").text(deliveryCost);
        $("#totalCost").text(parseInt(totalAmount)+deliveryCost);
        $("#val-totalCost").val(parseInt(totalAmount)+deliveryCost);
        $("#val-deliveryCost").val(deliveryCost);
    });
    function IncrementFunction(id,rowId){
      var rowId = rowId;
      var id = id;
      var qty = parseInt($("#quantity-value"+id).text())+1;
      var token = '{{ csrf_token() }}';
      var deliveryCost = parseInt($("#deliveryCost").text());

      $("#quantity-value"+id).text(qty);
      $("#val-quantity-value"+id).val(qty);

      $.post( "{{ url('/cart/update') }}", { _token: token, rowId: rowId, id: id, qty:qty})
        .done(function( data ) {
           data = JSON.parse(data);
           var totalAmount = data.totalAmount;
           totalAmount = totalAmount.replace(/,/g,'');
          $("#CartDetailsTotal").text(data.totalAmount+" Tk.");
          $("#totalCartItems2").text(data.totalItem+" Items");
          $("#total"+id).text(data.total);
          $("#subtotal").text(data.totalAmount);
          $("#totalCost").text(parseInt(totalAmount)+deliveryCost);
          $("#val-total"+id).val(data.total);
          $("#val-subtotal").val(data.totalAmount);
          $("#val-totalCost").val(parseInt(totalAmount)+deliveryCost);
          console.log(data);
        });
    }

    function DecrementFunction(id,rowId){
      var rowId = rowId;
      var id = id;
      var qty = parseInt($("#quantity-value"+id).text())-1;
      var token = '{{ csrf_token() }}';
      var deliveryCost = parseInt($("#deliveryCost").text());
      if(qty <= 0){
        qty = 1;
      }
      $("#quantity-value"+id).text(qty);
      $("#val-quantity-value"+id).val(qty);

      $.post( "{{ url('/cart/update') }}", { _token: token, rowId: rowId, id: id, qty:qty})
        .done(function( data ) {
           data = JSON.parse(data);
           var totalAmount = data.totalAmount;
           totalAmount = totalAmount.replace(/,/g,'');
          $("#CartDetailsTotal").text(data.totalAmount+" Tk.");
          $("#totalCartItems2").text(data.totalItem+" Items");
          $("#total"+id).text(data.total);
          $("#subtotal").text(data.totalAmount);
          $("#totalCost").text(parseInt(totalAmount)+deliveryCost);
          $("#val-total"+id).val(data.total);
          $("#val-subtotal").val(data.totalAmount);
          $("#val-totalCost").val(parseInt(totalAmount)+deliveryCost);
          console.log(data);
        });
    }

    function CartDataRemove(rowId,id){
      var rowId = rowId;
      var token = '{{ csrf_token() }}';
      var deliveryCost = parseInt($("#deliveryCost").text());

      $('#'+id).remove();

      $.post( "{{ url('/cart/remove') }}", { _token: token, rowId: rowId})
        .done(function( data ) {
           data = JSON.parse(data);
           var totalAmount = data.totalAmount;
           totalAmount = totalAmount.replace(/,/g,'');
          $("#CartDetailsTotal").text(data.totalAmount+" Tk.");
          $("#totalCartItems2").text(data.totalItem+" Items");
          $("#subtotal").text(data.totalAmount);
          $("#totalCost").text(parseInt(totalAmount)+deliveryCost);
          $("#val-subtotal").val(data.totalAmount);
          $("#val-totalCost").val(parseInt(totalAmount)+deliveryCost);
          if(data.totalItem <= 0){
            window.location.href = '{{ url('/cart') }}';
          }
          //console.log(data);
        });
    }

    function UpdateOrderInfo(area){
        var totalAmount = $("#subtotal").text();
        totalAmount = totalAmount.replace(/,/g,'');
        var deliveryCost = 0;

        if(area == 1){

          deliveryCost = {{$basic->delivery_cost1}};
        } else {
          deliveryCost = {{$basic->delivery_cost2}};
        }
        $("#deliveryCost").text(deliveryCost);
        $("#totalCost").text(parseInt(totalAmount)+deliveryCost);
        $("#val-totalCost").val(parseInt(totalAmount)+deliveryCost);
        $("#val-deliveryCost").val(deliveryCost);
    }

</script>

@endsection
