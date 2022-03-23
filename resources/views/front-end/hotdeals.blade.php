@extends('front-end.master')

@section('title')
Hot Deals
@endsection

@section('content')

<section class="best_seller_product"  style="background-color: #fff;padding-bottom: 10px" id="main_content_area">


    <div class="container" >

            <div class="row" style="margin-top:20px">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mobile-border-of" style="background: #fff;padding: 5px;">
                    <h4 class="cat-title" style="margin-bottom: 7px !important;"> <a href="#"><img src="{{ asset('/') }}image/hot-eg-logo.gif"></a></h4>

                    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" style="background: #fff;padding: 0px;margin-bottom: 20px; ;border: 3px solid #ECECEC;border-right:0;border-bottom:0"  id="Product_Ajax">

                          @foreach($products as $product)
                            <div class="col-sm-2 col-xs-6  product-hover-area" style="padding: 0">
                                <div class="col-sm-12 col-xs-12 padding-zero " style="background-color: #fff;padding: 0px;border-bottom: 3px solid #ECECEC;border-right: 3px solid #ECECEC;">

                                    <a  style="padding: 0px;height: 180px;overflow: hidden;" class="img-hover col-sm-12 padding-zero" href="{{ url('product') }}/{{ $product->id }}/{{ $product->slug }}"  id="1186" >
                                        <img class="img-responsive zoomEffect" style="margin: 0 auto;padding:5px" src="{{ asset('/') }}image/product_image/{{ $product->img1 }}" alt="{{ $product->title }}">
                                    </a>


                                    <span id="productPrice1186" class="col-sm-12  col-xs-12 text-center" style="background: #fff;padding: 0;display: block;line-height:18px;color: #D2691E;font-size: 14px;font-weight: bold;height: 38px">

                                         @if($product->rprice > $product->sprice)<del style="color:#b8b8b8;font-size:14px">${{ $product->rprice }}</del> @endif <br><label style="color:green;font-size: 20px;"> $ {{ $product->sprice }}</label>

                                    </span>

                                    <span id="productName1186" class="col-sm-12 text-center" style="background: #fff;padding: 2px;overflow: hidden;height: 38px;font-size: 12px;display: block;color:#525252;font-weight: bold;
                                          ">{{ $product->title }}</span>


                                </div>

                            </div>
                          @endforeach
                    </div>

                    <div class="col-md-12">
                      {{ $products->links() }}
                    </div>


                </div>


            </div>

    </div>
</section>

@endsection
