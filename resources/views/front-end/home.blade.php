@extends('front-end.master')

@section('title')
{{\App\Setting\App::title ?? ''}}
@endsection

@section('content')

<section class="slider_area" id="slider_area" style="background-color: white !important;padding-bottom: 10px;">
    <div class="container mobile-padding-top-0" style="padding-top: 10px;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 " style="padding: 0px">
                <div id="wrapper">
                    <div class="slider-wrapper theme-default">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                @foreach($sliders as $key => $slider)
                                <li data-target="#carousel-example-generic" style="background-color:#148AD2 !important;border:none !important;" data-slide-to="{{$key}}"
                                    class="@if($key==0) active @endif"></li>
                                @endforeach
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @foreach($sliders as $key => $slider)
                                <div class="item @if($key==0) active @endif">
                                    <a href="#">
                                        <img style="width: 100%;max-height: 300px;" src="{{$slider->img}}"
                                            alt="{{$slider->title}}">
                                    </a>
                                </div>
                                @endforeach
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" style="color:#148AD2 !important" href="#carousel-example-generic" role="button"
                                data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" style="color:#148AD2 !important" href="#carousel-example-generic" role="button"
                                data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</section>

<!--content area start-->

<section class="best_seller_product" style="background-color: #fff;padding-bottom: 10px" id="main_content_area">


    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12 mobile-border-of"
                style="background: #fff;padding: 5px;">
                <h4 class="cat-title" style="margin-bottom: 5px !important;">Product Categories</h4>
                @foreach($categories as $category)
                <a href="{{ url('category') }}/{{ $category->name }}/{{ $category->id }}" class="btn btn-success"
                    style="margin: 0px;background: #148AD2; font-size: 12px; border-color:#D4D4D8;color:white">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>

        <div class="row" style="margin-top:20px">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mobile-border-of"
                style="background: #fff;padding: 10px;">
                
                <a href="{{ url('hotdeals') }}" class="pull-left cat-title" style="margin-bottom: 5px !important;">Hot Deals</a>

                <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12"
                    style="background: #fff;padding: 0px;margin-bottom: 20px;padding-top: 15px  ">
                    <div class="slider">
                        <ul class="product-category owl-carousel nav">
                            @foreach($hotdeals1 as $hotproduct)
                            @php
                            if($hotproduct->rprice){
                            $off = round((($hotproduct->rprice - $hotproduct->sprice)/$hotproduct->sprice)*100);
                            }
                            @endphp
                            <li class="product">
                                <a href="product/{{ $hotproduct->id }}/{{ $hotproduct->slug }}">
                                    @if($off != 0)
                                    <span class="percentage-span-new"
                                        style="background-image: url({{ asset('image/flash-deal-percentage.png') }}) !important;">
                                        <font class="percentage-amount-new">{{ $off }}</font>
                                        <font class="percentage-sign-new">%</font>
                                        <font class="percentage-discount-amount-new">off</font>
                                    </span>
                                    @endif
                                    <span class="price-text">$&nbsp; {{ $hotproduct->sprice }}</span>
                                    <img src="{{ asset('/') }}image/product_image/{{ $hotproduct->img1 }}"
                                        alt="@php echo url('/'); @endphp" title="{{ $hotproduct->title }}" style="width: 179.167px !important; height:179.167px !important; margin-right: 15px;" />
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @if(count($hotdeals2))
                <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12"
                    style="padding: 0px;margin-bottom: 20px;padding-top: 15px">
                    <div class="slider">
                        <ul class="product-category owl-carousel nav">
                            @foreach($hotdeals2 as $hotproduct)
                            @php
                            if($hotproduct->rprice){
                            $off = round((($hotproduct->rprice - $hotproduct->sprice)/$hotproduct->sprice)*100);
                            }
                            @endphp
                            <li class="product">
                                <a href="product/{{ $hotproduct->id }}/{{ $hotproduct->slug }}">
                                    @if($off != 0)
                                    <span class="percentage-span-new"
                                        style="background-image: url({{ asset('image/flash-deal-percentage.png') }}) !important;">
                                        <font class="percentage-amount-new">{{ $off }}</font>
                                        <font class="percentage-sign-new">%</font>
                                        <font class="percentage-discount-amount-new">off</font>
                                    </span>
                                    @endif
                                    <span class="price-text">$&nbsp; {{ $hotproduct->sprice }}</span>
                                    <img src="{{ asset('/') }}image/product_image/{{ $hotproduct->img1 }}"
                                        alt="@php echo url('/'); @endphp" title="{{ $hotproduct->title }}" style="width: 179.167px !important; height:179.167px !important; margin-right: 15px;"/>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <div class="row" style="margin-top:20px">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mobile-border-of"
                style="background: #fff;padding: 5px;">
                <h4 class="cat-title" style="margin-bottom: 7px !important;">New Arrivals</h4>


                <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12"
                    style="background: #fff;padding: 0px;margin-bottom: 20px; ;border: 3px solid #ECECEC;border-right:0;border-bottom:0"
                    id="Product_Ajax">



                    @foreach($products as $product)
                    <div class="col-sm-2 col-xs-6  product-hover-area" style="padding: 0"  onclick="window.location='product/{{ $product->id }}/{{ $product->slug }}'">
                        <div class="col-sm-12 col-xs-12 padding-zero "
                            style="background-color: #fff;padding: 0px;border-bottom: 3px solid #ECECEC;border-right: 3px solid #ECECEC;">

                            <a style="padding: 0px;height: 180px;overflow: hidden;"
                                class="img-hover col-sm-12 padding-zero"
                                href="product/{{ $product->id }}/{{ $product->slug }}" id="1186">
                                <img class="img-responsive zoomEffect" style="margin: 0 auto;padding:5px; width: 100% !important; height:200.167px !important; margin-right: 15px;"
                                    src="{{ asset('/') }}image/product_image/{{ $product->img1 }}"
                                    alt="{{ $product->title }}">
                            </a>


                            <span id="productPrice1186" class="col-sm-12  col-xs-12 text-center"
                                style="background: #fff;padding: 0;display: block;line-height:18px;color: #D2691E;font-size: 14px;font-weight: bold;height: 38px">

                                @if($product->rprice > $product->sprice)<del
                                    style="color:#b8b8b8;font-size:14px">${{ $product->rprice }}</del> @endif <br><label
                                    style="color:#313131;font-size: 20px;"> $ {{ $product->sprice }}</label>

                            </span>

                            <span id="productName1186" class="col-sm-12 text-center" style="background: #fff;padding: 2px;overflow: hidden;height: 38px;font-size: 12px;display: block;color:#525252;font-weight: bold;
                                          ">{{ $product->title }}</span>


                        </div>

                    </div>
                    @endforeach
                </div>

               

            </div>

        </div>
         <div class="col-md-12">
                    {{ $products->links() }}
                </div>


    </div>
</section>

@endsection
