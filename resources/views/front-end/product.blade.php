@extends('front-end.master')

@section('title')
{{ $product->title }}
@endsection

@section('content')

<section class="best_seller_product" style="background-color: #fff;padding-bottom: 10px" id="main_content_area">
  <style>
    #ListStyle1 li{
       list-style-type: none !important;
    background: url(../../image/right-arrow.png) no-repeat;
    padding-left: 25px;
    margin-bottom: 10px;
    font-size: 16px;
    }
    #ListStyle2 li{
        list-style-type: none !important;
    background: url(../../image/right-arrow.png) no-repeat;
    padding-left: 25px;
    margin-bottom: 10px;
    font-size: 16px;
    }
    .slider{
        width: auto;
        margin: auto;
    }
    .product {
        /*border: 1px solid #ddd;*/
    }
    .owl-nav {
        position: absolute;
        top: 39%;
        height: 0;
        font-size: 29px;
        width: 100%;
    }

    .owl-next{
        position: absolute;
        right: 0
    }
    .owl-prev {
     float: left;
     /*margin-left: -25px !important;*/
    }


</style>
 <link rel="stylesheet" href="{{ asset('/') }}slider-asset/css/owl.carousel.min.css">
 <link rel="stylesheet" href="{{ asset('/') }}slider-asset/css/owl.theme.default.min.css">
<div class="container" style="padding-right:0px">
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mobile-padding-left-15px">
            <div class="panel panel-info ">

                <div class="panel-body mobile-padding-zero" style="padding:15px 0 ">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 details_whole" style="padding-left: 0px">

                                <div class="tab-design-product mobile-padding-zero mobile-padding-10px col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-left: 0;">

                                    <div class="slider">
                                      <ul class="product-category owl-carousel owl-theme nav owl-loaded owl-drag">
                                        @if($product->img1)
                                        <li class="product">
                                            <a href="#">
                                                <img src="{{ asset('/') }}image/product_image/{{ $product->img1 }}" alt="{{ $product->title }}">
                                            </a>
                                        </li>
                                        @endif
                                        @if($product->img2)
                                        <li class="product">
                                            <a href="#">
                                                <img src="{{ asset('/') }}image/product_image/{{ $product->img2 }}" alt="{{ $product->title }}">
                                            </a>
                                        </li>
                                        @endif
                                        @if($product->img3)
                                        <li class="product">
                                            <a href="#">
                                                <img src="{{ asset('/') }}image/product_image/{{ $product->img3 }}" alt="{{ $product->title }}">
                                            </a>
                                        </li>
                                        @endif
                                        @if($product->img4)
                                        <li class="product">
                                            <a href="#">
                                                <img src="{{ asset('/') }}image/product_image/{{ $product->img4 }}" alt="{{ $product->title }}">
                                            </a>
                                        </li>
                                        @endif
                                      </ul>
                                    </div>
                            </div>

                                <div class="mobile-margin-left-zero mobile-margin-bottom-45 col-lg-6 col-md-6 col-sm-6 col-xs-12  right" style="padding:0;min-height: 300px">
                                    <div class="col-sm-12" id="P_UserOrderForm1186" style="padding:0">

                                         <h4 class="modal-title" id="gridSystemModalLabel" style="font-size: 22px;font-weight: bold;color: #525252">{{ $product->title }}</h4>

                                       <div class="col-xs-12 col-sm-6 col-md-6 " style="padding: 0px;">

                                           <p style="margin: 20px 0;color: #525252;font-size: 25px">
                                             Price :   <?php if($product->rprice > $product->sprice) { ?><del>$ {{ $product->rprice }}</del><?php } ?> <strong> $ {{ $product->sprice }} </strong></p>

                                            @if($product->pcode)
                                            <p style="font-size: 16px;background: #148AD2;color: #fff; display: inline-block;padding: 1px 8px;border-radius: 20px;">Product Code: {{ $product->pcode }}</p>
                                            @endif
                                          <input type="hidden" name="QtnLimitPerUserHiddenField" id="QtnLimitPerUserHiddenField" value="15">

                                          <div class="col-xs-12 col-sm-12 col-md-12 deal-quantity" style="padding-left: 0px;margin-top: 10px">
                                              <div id="Quantity">
                                                  <span style="float: left;margin-top: 5px">Quantity : </span>

                                                  <div style="float: left; border: solid 1px #24b193; width: 150px; height: 36px;margin-left:5px">
                                                      <div style="color:orangered;font-size: 25px;text-align: center; width: 50px; float: left; cursor: pointer;font-weight: bold;" onclick="DecrementFunction();">
                                                          -
                                                      </div>

                                                      <span style="font-size: 25px;text-align: center;color: gray; width: 50px; float: left; cursor: pointer;border-right: 1px solid #24b193;border-left: 1px solid #24b193;font-weight: bold;" id="quantity-value">1</span>

                                                      <div onclick="IncrementFunction()" style="font-weight: bold;color:orangered;font-size: 25px;text-align: center; width: 40px; float: left;
                                                           cursor: pointer;">
                                                          +
                                                      </div>

                                                  </div>

                                              </div>
                                          </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6 " style="padding: 0px;margin-top: 30px;    margin-bottom: 30px;">

                                            <div class="btn col-xs-12 col-sm-12 col-md-12" style="font-size: 21px;margin-bottom: 20px;background:#148AD2 ;color:#fff">
                                                <input type="button"  onclick="buyNow({{ $product->id }})" value="Place Order" style="background: transparent;border: none;margin: 0;padding: 0">
                                            </div>

                                            <div class=" btn col-xs-12 col-sm-12 col-md-12" onclick="ProductAddTwoCart({{ $product->id }})" style="background:#4997A2;color:#fff;font-size: 21px;">
                                               Add to Cart
                                            </div>
                                        </div>
                                        {{--  --}}
                                        {{-- <div class="col-sm-12 col-xs-12" style="padding:0">
                                            @if($product->phone)
                                              @php
                                                $numbers = explode(',',$product->phone);
                                                $total = count($numbers);
                                              @endphp
                                              <h4 style="font-weight:bold;color:#148AD2"><i class="fa fa-address-book"> </i> ফোনে অর্ডারের জন্য ডায়াল করুন</h4>
                                                <div class="col-sm-6 col-xs-12" style="padding:0">
                                                  <h4 style="font-size:25px;margin: 15px 0 15px 0;text-align:center;color:#148AD2;font-weight:900;text-align: left">
                                                     @foreach($numbers as $number)
                                                     <div class="col-sm-12 col-md-12  col-xs-12" style="padding: 0">
                                                     <i class="fa fa-phone-square img-responsive pull-left mobile-icon" style="width: 60px;padding-left:15px;color: #4997A2;"><span style="padding-left:15px;color: black;">{{$number}}</span style=""></i>  <br>
                                                     </div>
                                                     @endforeach
                                                 </h4>
                                                </div>
                                            @endif
                                                <div class="col-sm-12 col-md-12  col-xs-12" style="padding: 0">
                                                        <img style="width: 60px;padding: 10px" class="img-responsive pull-left mobile-icon" src="{{ asset('/') }}image/icon-prodducts/d.png" alt="Call azibto" title="Call azibto"><h3 class="font-size-title-mobile" style="font-weight: bold;font-size: 18px;text-align:left">   ঢাকায় ডেলিভারি খরচ: $ {{$basic->delivery_cost1}}</h3>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-xs-12" style="padding:0">
                                                        <img style="width: 60px;padding: 10px" class="img-responsive pull-left  mobile-icon" src="{{ asset('/') }}image/icon-prodducts/od.png" alt="Call azibto" title="Call azibto"><h3 class="font-size-title-mobile" style="font-weight: bold;font-size: 18px;text-align:left">
                                                            ঢাকার বাইরের ডেলিভারি খরচ: $ {{$basic->delivery_cost2}}
                                                        </h3>
                                                    </div>
                                                    @if($product->bkash)
                                                    <div class="col-sm-12 col-md-12 col-xs-12" style="padding:0">
                                                        <img style="width: 60px;padding: 10px" class="img-responsive pull-left  mobile-icon" src="{{ asset('/') }}image/icon-prodducts/bk.png" alt="Call azibto" title="Azibto  "><h3 class="font-size-title-mobile" style="font-weight: bold;font-size: 18px;text-align:left">
                                                            বিকাশ মার্চেন্ট নাম্বার: {{$product->bkash}}
                                                        </h3>
                                                    </div>
                                                    @endif
                                              </div> --}}

                                        <div class="col-xs-12 col-sm-12 col-md-12 "><br></div>


                                    </div>




                                </div>


                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading"><strong style="font-size: 22px;font-weight: bold;color: #525252"><i class="fa fa-bar-chart" style="color: #000"> </i> Product Description	</strong></div>
                <div class="panel-body" style="padding-left: 30px;padding-right: 30px">
                     <div class="row">
                        <div class=" col-lg-12 col-sm-12 brand text-center" style="background-color: #fff;padding: 0">

                            <div id="my-tab-content" class="tab-content" style="padding-left: 0px;padding-right: 0px;">
                                <!-- top category tab -->
                                <div class="tab-pane active" id="course-detail1186">

                                    <div class="tab-content panel-body" style="padding: 0">



                                         <div class="tab-content panel-body" style="padding: 0">

                                         <div id="ListStyle2" class="col-sm-12 text-left product-dynamic-details" style="padding: 0px;">
                                            <div id="description" class="tab-pane active">
                                            <div class="tabbox-container">
                                                {!! $product->long_description !!}
                                            </div>
                                            </div>
                                        </div>


                                    </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- <div class="panel panel-info ">
                <div class="panel-heading"><strong style="font-size: 22px;font-weight: bold;color: #525252"><i class="fa fa-bus" style="color: #000"> </i> ডেলিভারি এন্ড পেমেন্ট </strong></div>
                <div class="panel-body mobile-padding-zero" style="padding-left: 30px;padding-right: 30px">
                    <div class="col-sm-6">
                        {!! $basic->inside_details !!}
                    </div>
                    <div class="col-sm-6">
                        {!! $basic->outside_details !!}
                    </div>
                </div>
            </div> --}}

            <!--Similar Product-->
            <div class="panel panel-info ">
                <div class="panel-heading">

                    <h4 class="modal-title" id="gridSystemModalLabel" style="font-size: 22px;font-weight: bold;color: #525252">
                        <i class="fa fa-link" style="color: #000"> </i>
                     Related Products
                    </h4>

                </div>
                <div class="panel-body mobile-padding-zero">
                <div class="col-lg-12 col-md-12 col-sm-12 " style="background: #fff;padding: 0px;margin-bottom: 20px; ;border: 3px solid #ECECEC;border-right:0;border-bottom:0">
                    @foreach($related as $product)
                     <div class="col-sm-2 col-xs-6  product-hover-area" style="padding: 0">
                        <div class="col-sm-12 col-xs-12 padding-zero " style="background-color: #fff;padding: 0px;border-bottom: 3px solid #ECECEC;border-right: 3px solid #ECECEC;">
                            <a style="padding: 0px;height: 180px;overflow: hidden;" class="img-hover col-sm-12 padding-zero" href="{{ url('/product') }}/{{ $product->id }}/{{ $product->slug }}" id="1354">
                                <img class="img-responsive zoomEffect" style="margin: 0 auto;padding:5px; width: 100% !important; height:200.167px !important; margin-right: 15px;" src="{{asset('/')}}image/product_image/{{$product->img1}}" alt="{{$product->title}}">
                            </a>
                            <span id="productPrice1354" class="col-sm-12  col-xs-12 text-center" style="background: #fff;padding: 0;display: block;line-height:18px;color: #D2691E;font-size: 14px;font-weight: bold;height: 38px">
                                   @if($product->rprice > $product->sprice)
                                    <del style="color:#b8b8b8;font-size:14px">${{ $product->rprice }}</del>
                                   @endif
                                   <br>
                                   <label style="color:green;font-size: 20px;"> $ {{ $product->sprice }}</label>
                            </span>
                            <span id="productName1354" class="col-sm-12 text-center" style="background: #fff;padding: 2px;overflow: hidden;height: 38px;font-size: 12px;display: block;color:#525252;font-weight: bold;">
                              {{$product->title}}
                            </span>
                          </div>
                      </div>
                      @endforeach
                  </div>
                </div>
            </div>
            <!--Similar Product End-->
        </div>
    </div>
</div>


<script src="{{ asset('/') }}slider-asset/js/jquery.min.js"></script>
<script src="{{ asset('/') }}slider-asset/js/owl.carousel.min2.js"></script>

<script>
    $(document).ready(function () {
        //owl carousel
        if ($('.product-category').hasClass('owl-carousel')) {

            $('.owl-carousel').owlCarousel({
                items: 1,
                nav:true,
                dots: true,
                autoplay: false,
                slideBy: 1,
                loop: true

            })
        }
    });
    function ProductAddTwoCart(product_id){
      var product_id = product_id;
      var quantity = parseInt($("#quantity-value").text());
      var token = '{{ csrf_token() }}';

      $.post( "{{ url('/cart/additem') }}", { _token: token, product_id: product_id, quantity: quantity})
      .done(function( data ) {
        data = JSON.parse(data);
        $("#CartDetailsTotal").text(data.totalAmount+" Tk.");
        $("#totalCartItems2").text(data.totalItem+" Items");
        $("#MtotalCartItems").text(data.totalItem);
      });
    }
    function buyNow(product_id){
      var product_id = product_id;
      var quantity = parseInt($("#quantity-value").text());
      var token = '{{ csrf_token() }}';

      $.post( "{{ url('/cart/additem') }}", { _token: token, product_id: product_id, quantity: quantity})
      .done(function( data ) {
        data = JSON.parse(data);
        $("#CartDetailsTotal").text(data.totalAmount+" Tk.");
        $("#totalCartItems2").text(data.totalItem+" Items");
        window.location.href = '{{ url('/cart') }}';
      });
    }
    function IncrementFunction(){
      var quantity = parseInt($("#quantity-value").text())+1;
      $("#quantity-value,#product_buy_item").text(quantity);
    }
    function DecrementFunction(){
      var quantity = parseInt($("#quantity-value").text())-1;
      if(quantity<=0) quantity = 1;
      $("#quantity-value,#product_buy_item").text(quantity);
    }
</script>
</section>
@endsection
