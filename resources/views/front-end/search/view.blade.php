@extends('front-end.master')

@section('title')
Order Confirmation
@endsection

@section('content')

<div class="container" style="padding-right:0px">
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mobile-padding-left-15px">
          <!--Similar Product-->
            <div class="panel panel-info ">
                <div class="panel-heading">

                    <h4 class="modal-title" id="gridSystemModalLabel" style="font-size: 22px;font-weight: bold;color: #525252">
                        <i style="color:#3B5998;font-size: 24px" class="fa fa-cart-arrow-down"></i>
                        PRODUCT LIST
                    </h4>

                </div>
                <div class="panel-body mobile-padding-zero">
                <div class="col-lg-12 col-md-12 col-sm-12 " style="background: #fff;padding: 0px;margin-bottom: 20px; ;border: 3px solid #ECECEC;border-right:0;border-bottom:0">
                  @if(count($products)>0)
                    @foreach($products as $product)
                     <div class="col-sm-2 col-xs-6  product-hover-area" style="padding: 0">
                        <div class="col-sm-12 col-xs-12 padding-zero " style="background-color: #fff;padding: 0px;border-bottom: 3px solid #ECECEC;border-right: 3px solid #ECECEC;">
                            <a style="padding: 0px;height: 180px;overflow: hidden;" class="img-hover col-sm-12 padding-zero" href="{{ url('/product') }}/{{ $product->id }}/{{ $product->slug }}" id="1354">
                                <img class="img-responsive zoomEffect" style="margin: 0 auto;padding:5px" src="{{asset('/')}}image/product_image/{{$product->img1}}" alt="{{$product->title}}">
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
                    @else
                      <h3 style="padding:20px;text-align:center;">No items found!!</h3>
                    @endif
                  </div>
                </div>
            </div>
            <!--Similar Product End-->
        </div>
    </div>
</div>














@endsection