
@extends('front-end.master')

@section('title')
{{\App\Setting\App::title ?? ''}}
@endsection

@section('content')



    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->



    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="index.html">
                        <img src="assets/img/logo/logo-white.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->
    <main>


        
        <!-- slider-area-start -->
        <div class="slider-area">
            <div class="swiper-container slider__active">
                <div class="slider-wrapper swiper-wrapper">
                    {{-- single slider --}}
                    @foreach($sliders as $key => $slider)
                    <div class="single-slider swiper-slide slider-height d-flex align-items-center"
                        data-background="{{$slider->img}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="slider-content">
                                        <div class="slider-top-btn" data-animation="fadeInLeft" data-delay="1.5s">
                                            <a href="product-details.html" class="st-btn b-radius">HOT DEALS</a>
                                        </div>
                                        <h2 data-animation="fadeInLeft" data-delay="1.7s"
                                            class="pt-15 slider-title pb-5">SALE 30% OFF <br> FUTURE FOOTBALL BOOTS</h2>
                                        <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.9s">
                                            Discount 30% On Products & Free Shipping</p>
                                        <div class="slider-bottom-btn mt-75">
                                            <a data-animation="fadeInUp" data-delay="1.15s" href="shop.html"
                                                class="st-btn-b b-radius">Discover now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
<!-- /single-slider -->


               
             
                    <div class="main-slider-paginations"></div>
                </div>
            </div>
        </div>
        <!-- slider-area-end -->

        <!-- features__area-start -->
        <section class="features__area pt-20">
            <div class="container">
                <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fal fa-truck"></i>
                            </div>
                            <div class="features__content">
                                <h6>FREE DELIVERY</h6>
                                <p>For all orders over $120</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fal fa-money-check"></i>
                            </div>
                            <div class="features__content">
                                <h6>SAFE PAYMENT</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fal fa-comments-alt"></i>
                            </div>
                            <div class="features__content">
                                <h6>24/7 HELP CENTER</h6>
                                <p>Delicated 24/7 support</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item features__item-last d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fad fa-user-headset"></i>
                            </div>
                            <div class="features__content">
                                <h6>FRIENDLY SERVICES</h6>
                                <p>30 day satisfaction guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features__area-end -->

        <!-- banner__area-start -->
        <section class="banner__area pt-20 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item p-relative w-img mb-30">
                            <div class="banner__img">
                                <a href="product-details.html"><img src="{{ asset('/front_asset/images/e-commerce/img-7.jpg') }}" alt=""></a>
                            </div>
                            <div class="banner__content">
                                <h6><a href="product-details.html">Intelligent <br> New Touch Control</a></h6>
                                <p>Discount 20% On Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item p-relative mb-30 w-img">
                            <div class="banner__img">
                                <a href="product-details.html"><img src="{{ asset('/front_asset/images/e-commerce/img-8.jpg') }}" alt=""></a>
                            </div>
                            <div class="banner__content">
                                <h6><a href="product-details.html">On-sale <br> Best Prices</a></h6>
                                <p>Limited Time: Online Only!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item p-relative mb-30 w-img">
                            <div class="banner__img">
                                <a href="product-details.html"><img src="{{ asset('/front_asset/images/e-commerce/img-9.jpg') }}" alt=""></a>
                            </div>
                            <div class="banner__content">
                                <h6><a href="product-details.html">Hot Sale <br> Super Products </a></h6>
                                <p>Free Shipping All Order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner__area-end -->



        <!-- topsell__area-start -->
        <section class="topsell__area-1 pt-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-10">
                            <div class="section__title">
                                <h5 class="st-titile-d">Top Deals Of The Day</h5>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="product-bs-slider">
                        <div class="product-slider swiper-container">
                            <div class="swiper-wrapper">
{{--  --}}
@foreach($hotdeals1 as $hotproduct)
@php
if($hotproduct->rprice){
$off = round((($hotproduct->rprice - $hotproduct->sprice)/$hotproduct->sprice)*100);
}
@endphp
                                 <div class="col-md-3">

                                    <div class="product__item swiper-slide">
                                       
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product/{{ $hotproduct->id }}/{{ $hotproduct->slug }}">
                                                    <img src="{{ asset('/') }}image/product_image/{{ $hotproduct->img1 }}" alt="product">
                                                </a>
                                            </div>
    
    
                                        </div>
                                        <div class="product__content">
                                           
                                            <h6><a href="product-details.html">{{ $hotproduct->title }}</a>
                                            </h6>
    
                                            <div class="price mb-10">
                                                <span>${{ $hotproduct->rprice }} USD</span>
                                            </div>
                                           
    
                                        </div>
                                        <div class="product__add-cart text-center" onclick="ProductAddTwoCart({{ $hotproduct->id }})">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Add to Cart
                                            </button>
                                        </div>
                                        
                                       
                                    </div>

                                 </div>

                                @endforeach
{{--  --}}



                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="bs-button bs-button-prev"><i class="fal fa-chevron-left"></i></div>
                        <div class="bs-button bs-button-next"><i class="fal fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- topsell__area-end -->



        <!-- banner__area-start -->
        <section class="banner__area banner__area-d pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="banner__item p-relative w-img mb-30">
                            <div class="banner__img">
                                <a href="product-details.html"><img src="{{ asset('/front_asset/images/e-commerce/img-10.jpg') }}" alt=""></a>
                            </div>
                            <div class="banner__content">
                                <span>Bestseller Products</span>
                                <h6><a href="product-details.html">PC & Docking Station</a></h6>
                                <p>Discount 20% Off, Top Quality Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="banner__item p-relative mb-30 w-img">
                            <div class="banner__img">
                                <a href="product-details.html"><img src="{{ asset('/front_asset/images/e-commerce/img-11.jpg') }}" alt=""></a>
                            </div>
                            <div class="banner__content">
                                <span>Featured Products</span>
                                <h6><a href="product-details.html">Accessories iPhone</a></h6>
                                <p>Free Shipping All Order Over $99</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner__area-end -->

        <!-- recomand-product-area-start -->
        <section class="recomand-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-10">
                            <div class="section__title">
                                <h5 class="st-titile">Recommended For You</h5>
                            </div>
                            <div class="button-wrap">
                                <a href="shop.html">See All Product <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="product-bs-slider-2">
                        <div class="product-slider-3 swiper-container">
                            
                            <div class="swiper-wrapper">
                                {{-- single product --}}
                               

                                @foreach($products->take(8) as $product)
                                <div class="col-md-3">
                                    <div class="product__item mb-20 swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="product/{{ $product->id }}/{{ $product->slug }}">
                                                    <img src="{{ asset('/') }}image/product_image/{{ $product->img1 }}">
                                                </a>
                                            </div>
    
    
                                        </div>
                                        <div class="product__content">
                                            <h6> {{ $product->title }} </h6>
    
                                            <div class="price">
                                                <span>${{ $hotproduct->rprice }} USD</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100"  onclick="ProductAddTwoCart({{ $hotproduct->id }})">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>

                                </div>

                                @endforeach

                                {{-- end --}}




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- recomand-product-area-end -->










        <!-- topsell__area-start -->
        <section class="topsell__area-2 pt-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-10">
                            <div class="section__title">
                                <h5 class="st-titile">Top Selling Products</h5>
                            </div>
                            <div class="product__nav-tab">
                                <ul class="nav nav-tabs" id="flast-sell-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="computer-tab" data-bs-toggle="tab"
                                            data-bs-target="#computer" type="button" role="tab" aria-controls="computer"
                                            aria-selected="false">computer</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="samsung-tab" data-bs-toggle="tab"
                                            data-bs-target="#samsung" type="button" role="tab"
                                            aria-selected="false">samsung</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="htc-tab" data-bs-toggle="tab" data-bs-target="#htc"
                                            type="button" role="tab" aria-selected="false">HTC</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="nokia-tab" data-bs-toggle="tab"
                                            data-bs-target="#nokia" type="button" role="tab"
                                            aria-selected="false">Nokia</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="cell-tab" data-bs-toggle="tab"
                                            data-bs-target="#cell" type="button" role="tab" aria-selected="true">Cell
                                            Phones</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content" id="flast-sell-tabContent">
                            <div class="tab-pane fade active show" id="computer" role="tabpanel"
                                aria-labelledby="computer-tab">
                                <div class="product-bs-slider-2">
                                    <div class="product-slider-2 swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('/front_asset/images/e-commerce/1.jpg') }}" alt="product">
                                                        </a>
                                                    </div>


                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular
                                                            64G</a></h6>

                                                    <div class="price">
                                                        <span>$105-$110</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('/front_asset/images/e-commerce/4.jpg') }}" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Men Size Yellow Basketball
                                                            Jerseys</a></h6>

                                                    <div class="price">
                                                        <span>$105-$150</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('/front_asset/images/e-commerce/7.jpg') }}" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__offer">
                                                        <span class="discount">-9%</span>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Xbox Wireless Game Controller
                                                            Pink</a></h6>

                                                    <div class="price">
                                                        <span>$200-$280</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('/front_asset/images/e-commerce/2.jpg') }}" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Wireless Bluetooth Over-Ear
                                                            Headphones</a></h6>

                                                    <div class="price">
                                                        <span>$100-$180</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('/front_asset/images/e-commerce/3.jpg') }}" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__offer">
                                                        <span class="discount">-10%</span>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Solo3 Wireless On-Ear
                                                            Headphones</a></h6>

                                                    <div class="price">
                                                        <span><del>$270</del> $200</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('/front_asset/images/e-commerce/8.jpg') }}" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Vifa Bluetooth Portable Wireless
                                                            Speaker</a></h6>

                                                    <div class="price">
                                                        <span>$150-$270</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                                    <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="samsung" role="tabpanel" aria-labelledby="samsung-tab">
                                <div class="product-bs-slider-2">
                                    <div class="product-slider-2 swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-1.jpg" alt="product">
                                                        </a>
                                                    </div>


                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular
                                                            64G</a></h6>

                                                    <div class="price">
                                                        <span>$105-$110</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-4.jpg" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Wireless Bluetooth Over-Ear
                                                            Headphones</a></h6>

                                                    <div class="price">
                                                        <span>$100-$180</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-5.jpg" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__offer">
                                                        <span class="discount">-10%</span>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Solo3 Wireless On-Ear
                                                            Headphones</a></h6>

                                                    <div class="price">
                                                        <span><del>$270</del> $200</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-6.jpg" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Vifa Bluetooth Portable Wireless
                                                            Speaker</a></h6>

                                                    <div class="price">
                                                        <span>$150-$270</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-2.jpg" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Men Size Yellow Basketball
                                                            Jerseys</a></h6>

                                                    <div class="price">
                                                        <span>$105-$150</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-3.jpg" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__offer">
                                                        <span class="discount">-9%</span>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Xbox Wireless Game Controller
                                                            Pink</a></h6>

                                                    <div class="price">
                                                        <span>$200-$280</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- If we need navigation buttons -->
                                    </div>
                                    <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                                    <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="htc" role="tabpanel" aria-labelledby="htc-tab">
                                <div class="product-bs-slider-2">
                                    <div class="product-slider-2 swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-4.jpg" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Wireless Bluetooth Over-Ear
                                                            Headphones</a></h6>

                                                    <div class="price">
                                                        <span>$100-$180</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-5.jpg" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__offer">
                                                        <span class="discount">-10%</span>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Solo3 Wireless On-Ear
                                                            Headphones</a></h6>

                                                    <div class="price">
                                                        <span><del>$270</del> $200</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-6.jpg" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Vifa Bluetooth Portable Wireless
                                                            Speaker</a></h6>

                                                    <div class="price">
                                                        <span>$150-$270</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-1.jpg" alt="product">
                                                        </a>
                                                    </div>


                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular
                                                            64G</a></h6>

                                                    <div class="price">
                                                        <span>$105-$110</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-2.jpg" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Men Size Yellow Basketball
                                                            Jerseys</a></h6>

                                                    <div class="price">
                                                        <span>$105-$150</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-3.jpg" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__offer">
                                                        <span class="discount">-9%</span>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Xbox Wireless Game Controller
                                                            Pink</a></h6>

                                                    <div class="price">
                                                        <span>$200-$280</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                                    <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nokia" role="tabpanel" aria-labelledby="nokia-tab">
                                <div class="product-bs-slider-2">
                                    <div class="product-slider-2 swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-1.jpg" alt="product">
                                                        </a>
                                                    </div>


                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular
                                                            64G</a></h6>

                                                    <div class="price">
                                                        <span>$105-$110</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-2.jpg" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Men Size Yellow Basketball
                                                            Jerseys</a></h6>

                                                    <div class="price">
                                                        <span>$105-$150</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-3.jpg" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__offer">
                                                        <span class="discount">-9%</span>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Xbox Wireless Game Controller
                                                            Pink</a></h6>

                                                    <div class="price">
                                                        <span>$200-$280</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-4.jpg" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Wireless Bluetooth Over-Ear
                                                            Headphones</a></h6>

                                                    <div class="price">
                                                        <span>$100-$180</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-5.jpg" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__offer">
                                                        <span class="discount">-10%</span>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Solo3 Wireless On-Ear
                                                            Headphones</a></h6>

                                                    <div class="price">
                                                        <span><del>$270</del> $200</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-6.jpg" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Vifa Bluetooth Portable Wireless
                                                            Speaker</a></h6>

                                                    <div class="price">
                                                        <span>$150-$270</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                                    <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cell" role="tabpanel" aria-labelledby="cell-tab">
                                <div class="product-bs-slider-2">
                                    <div class="product-slider-2 swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-1.jpg" alt="product">
                                                        </a>
                                                    </div>


                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular
                                                            64G</a></h6>

                                                    <div class="price">
                                                        <span>$105-$110</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-2.jpg" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Men Size Yellow Basketball
                                                            Jerseys</a></h6>

                                                    <div class="price">
                                                        <span>$105-$150</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-3.jpg" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__offer">
                                                        <span class="discount">-9%</span>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Xbox Wireless Game Controller
                                                            Pink</a></h6>

                                                    <div class="price">
                                                        <span>$200-$280</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-4.jpg" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Wireless Bluetooth Over-Ear
                                                            Headphones</a></h6>

                                                    <div class="price">
                                                        <span>$100-$180</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-5.jpg" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__offer">
                                                        <span class="discount">-10%</span>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Solo3 Wireless On-Ear
                                                            Headphones</a></h6>

                                                    <div class="price">
                                                        <span><del>$270</del> $200</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product__item swiper-slide">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/product/tp-6.jpg" alt="product">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="product__content">
                                                    <h6><a href="product-details.html">Vifa Bluetooth Portable Wireless
                                                            Speaker</a></h6>

                                                    <div class="price">
                                                        <span>$150-$270</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart text-center">
                                                    <button type="button"
                                                        class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                                    <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- topsell__area-end -->

        <!-- banner__area-start -->
        <section class="banner__area pt-60 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="banner__item p-relative w-img mb-30">
                            <div class="banner__img">
                                <a href="product-details.html"><img src="{{ asset('/front_asset/images/e-commerce/img-12.jpg') }}" alt=""></a>
                            </div>
                            <div class="banner__content banner__content-sd text-center">
                                <div class="banner-button mb-20">
                                    <a href="product-details.html" class="st-btn">HOT DEALS</a>
                                </div>
                                <h6><a href="product-details.html">Sale 30% Off <br> Top Computer Case Gaming</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner__item p-relative mb-30 w-img">
                                    <div class="banner__img">
                                        <a href="product-details.html"><img src="{{ asset('/front_asset/images/e-commerce/img-13.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="banner__content banner__content-sd text-center">
                                        <h6><a href="product-details.html">Electronic Deals</a></h6>
                                        <p>Laptop, Computer, Smartphone, Gampad</p>
                                        <div class="banner-button mt-20 d-none d-sm-block">
                                            <a href="product-details.html" class="st-btn-3 b-radius">Shop Deals</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="banner__item p-relative w-img mb-30">
                                    <div class="banner__img">
                                        <a href="product-details.html"><img src="{{ asset('/front_asset/images/e-commerce/img-14.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="banner__content">
                                        <h6><a href="product-details.html">Hot Products <br> Laptop Ultra 4K 16”</a>
                                        </h6>
                                        <p>Discount 20% On Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="banner__item p-relative mb-30 w-img">
                            <div class="banner__img">
                                <a href="product-details.html"><img src="{{ asset('/front_asset/images/e-commerce/img-15.jpg') }}" alt=""></a>
                            </div>
                            <div class="banner__content banner__content-sd text-center">
                                <div class="banner-button mb-20">
                                    <a href="product-details.html" class="st-btn">HOT DEALS</a>
                                </div>
                                <h6><a href="product-details.html">Sport Edition <br> Best Choice of The Year</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner__area-end -->



        <!-- cta-area-start -->
        <section class="cta-area d-ldark-bg pt-55 pb-10">
            <div class="container" style="padding: 10px;">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6">
                        <div class="cta-item cta-item-d mb-30">
                            <h5 class="cta-title">Follow Us</h5>
                            <p>We make consolidating, marketing and tracking your social media website easy.</p>
                            <div class="cta-social">
                                <div class="social-icon">
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                                    <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="rss"><i class="fas fa-rss"></i></a>
                                    <a href="#" class="dribbble"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cta-item mb-30">
                            <h5 class="cta-title">Sign Up To Newsletter</h5>
                            <p>Join 60.000+ subscribers and get a new discount coupon on every Saturday.</p>
                            <div class="subscribe__form">
                                <form action="#">
                                    <input type="email" placeholder="Enter your email here...">
                                    <button>subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- cta-area-end -->

        <!-- shop modal start -->
        <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                <div class="modal-content">
                    <div class="product__modal-wrapper p-relative">
                        <div class="product__modal-close p-absolute">
                            <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                        </div>
                        <div class="product__modal-inner">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="nav1" role="tabpanel"
                                                aria-labelledby="nav1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/quick-view/quick-view-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav2" role="tabpanel"
                                                aria-labelledby="nav2-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/quick-view/quick-view-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav3" role="tabpanel"
                                                aria-labelledby="nav3-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/quick-view/quick-view-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav4" role="tabpanel"
                                                aria-labelledby="nav4-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/quick-view/quick-view-4.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1"
                                                    aria-selected="true">
                                                    <img src="assets/img/quick-view/quick-nav-1.jpg" alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2"
                                                    aria-selected="false">
                                                    <img src="assets/img/quick-view/quick-nav-2.jpg" alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3"
                                                    aria-selected="false">
                                                    <img src="assets/img/quick-view/quick-nav-3.jpg" alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav4-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4"
                                                    aria-selected="false">
                                                    <img src="assets/img/quick-view/quick-nav-4.jpg" alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                        <div class="product__review d-sm-flex">
                                            <div class="rating rating__shop mb-10 mr-30">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__add-review mb-15">
                                                <span>01 review</span>
                                            </div>
                                        </div>
                                        <div class="product__price">
                                            <span>$109.00 – $307.00</span>
                                        </div>
                                        <div class="product__modal-des mt-20 mb-15">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a>
                                                </li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Display with 3088 x 1440
                                                        pixels resolution.</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Memory, Storage & SIM:
                                                        12GB RAM, 256GB.</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Androi v10.0 Operating
                                                        system.</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__stock mb-20">
                                            <span class="mr-10">Availability :</span>
                                            <span>1795 in stock</span>
                                        </div>
                                        <div class="product__modal-form">
                                            <form action="#">
                                                <div class="pro-quan-area d-lg-flex align-items-center">
                                                    <div class="product-quantity mr-20 mb-25">
                                                        <div class="cart-plus-minus p-relative"><input type="text"
                                                                value="1" /></div>
                                                    </div>
                                                    <div class="pro-cart-btn mb-25">
                                                        <button class="cart-btn" type="submit">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product__stock mb-30">
                                            <ul>
                                                <li><a href="#">
                                                        <span class="sku mr-10">SKU:</span>
                                                        <span>Samsung C49J89: £875, Debenhams Plus</span></a>
                                                </li>
                                                <li><a href="#">
                                                        <span class="cat mr-10">Categories:</span>
                                                        <span>iPhone, Tablets</span></a>
                                                </li>
                                                <li><a href="#">
                                                        <span class="tag mr-10">Tags:</span>
                                                        <span>Smartphone, Tablets</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop modal end -->

    </main>


<script src="{{ asset('/') }}front_asset/new/js/vendor/jquery.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/vendor/waypoints.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/owl-carousel.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/bootstrap-bundle.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/meanmenu.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/swiper-bundle.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/tweenmax.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/magnific-popup.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/parallax.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/backtotop.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/nice-select.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/nice-select.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/countdown.min.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/counterup.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/wow.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/wow.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/isotope-pkgd.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/imagesloaded-pkgd.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/ajax-form.js"></script>
<script src="{{ asset('/') }}front_asset/new/js/main.js"></script>



    <!-- JS here -->















{{--  --}}
    <!-- Main Section -->
    {{-- <main class="main-section">
        <!-- Main Hero Section -->
        <section class="main-hero">
            <div class="container">

                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach($sliders as $key => $slider)
                            <li class="glide__slide">
                                <div class="heroCategoryRow">

                                    <div class="heroCategoryCol">
                                        <div class="heroCategoryColItemWrap">
                                            <div class="heroCatColItemImage">
                                                <img src="{{$slider->img}}" alt="">
                                            </div>
                                            <div class="heroCatColItemContent">
                                                <div class="heroCatColItemContentWrap">
                                                    <div class="bannerTitleWrap">
                                                        <div class="bannerSubTitle">
                                                            <strong>NEW TECHNOLOGIES</strong>
                                                        </div>
                                                        <h4 class="bannerTitle">Health care <br> monitor</h4>
                                                    </div>
                                                    <div class="bannerInner">
                                                        <p></p>
                                                        <div class="hidden-xs">A ornare aliquam laoreet adipiscing
                                                            vestibul <br> integer malesuada ullamcorper suspeid
                                                        </div>
                                                        <p></p>
                                                    </div>
                                                    <div class="bannerBtn">
                                                        <a href="" class="bannerBtn">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            @endforeach
                        
                           
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- New Arrivals -->
        <section class="productCatTiles">
            <div class="container">
                <div class="productCatTitlesWrap">
                    <h3 class="ProductCatTitle">New Arrival</h3>
                    <h4 class="ProductCatSubTitle">Get through all trending products and get your best deal</h4>
                </div>
            </div>
        </section>

        <!-- New Arrivals Product Section -->
        <section class="mainProducts">
            <div class="container">
                <div class="mainProductsWrap">
                    <div class="mainProduct">
                        <!-- 1 -->
                        @foreach($products->take(8) as $product)
                        <div class="mainProductInner">

                            <div class="mainProductInnerImage">
                                <a href="product/{{ $product->id }}/{{ $product->slug }}" class="productImageLink">
                                    <img src="{{ asset('/') }}image/product_image/{{ $product->img1 }}"
                                        alt="">
                                </a>
                                <div class="productImageWlBtn">
                                    <a href="" class="productImageWlLink">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <div class="productImageHoverBtn">

                                    <!-- <a href="" class="ProductImageHoverBtnLink">
                                        <span>Quick view</span>
                                        <i class="fa-solid fa-eye"></i>
                                    </a> -->

                                    <a href="" class="ProductImageHoverBtnLink">
                                        <span>Add to cart</span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="mainProductInfo">
                                <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                                <span class="productInfoPrice">
                                    <span class="productInfoMoney">$46.00</span>
                                </span>
                            </div>

                        </div>
                        @endforeach

                        <!-- 2 -->


                    </div>
                </div>
            </div>
        </section>

        <!-- CATAGORY -->
        <section class="category-block">
            <div class="container">
                <div class="heroCategoryRow">

                    <div class="heroCategoryCol">
                        <div class="heroCategoryColItemWrap">
                            <div class="heroCatColItemImage">
                                <img src="assets/img/electro-banner10.jpg.webp" alt="">
                            </div>
                            <div class="heroCatColItemContent">
                                <div class="heroCatColItemContentWrap">
                                    <div class="bannerTitleWrap">
                                        <div class="bannerSubTitle">
                                            <strong>NEW TECHNOLOGIES</strong>
                                        </div>
                                        <h4 class="bannerTitle">WEBCAMS 2022</h4>
                                    </div>
                                    <div class="bannerInner">
                                        <p></p>
                                        <div class="hidden-xs">Auctor litora ultrices suscipit<br>
                                            malesuada nunc a netus
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="bannerBtn">
                                        <a href="" class="bannerBtn">Shop More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="heroCategoryCol">
                        <div class="heroCategoryColItemWrap">
                            <div class="heroCatColItemImage">
                                <img src="assets/img/electro-banner10.jpg.webp" alt="">
                            </div>
                            <div class="heroCatColItemContent">
                                <div class="heroCatColItemContentWrap">
                                    <div class="bannerTitleWrap">
                                        <div class="bannerSubTitle">
                                            <strong>NEW TECHNOLOGIES</strong>
                                        </div>
                                        <h4 class="bannerTitle">WEBCAMS 2022</h4>
                                    </div>
                                    <div class="bannerInner">
                                        <p></p>
                                        <div class="hidden-xs">Auctor litora ultrices suscipit<br>
                                            malesuada nunc a netus
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="bannerBtn">
                                        <a href="" class="bannerBtn">Shop More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Best Selling Products Title -->
        <section class="productCatTiles">
            <div class="container">
                <div class="productCatTitlesWrap">
                    <h3 class="ProductCatTitle">Best Selling</h3>
                    <h4 class="ProductCatSubTitle">Get through all trending products and get your best deal</h4>
                </div>
            </div>
        </section>

        <!-- Best Selling Product Section -->
        <section class="mainProducts">
            <div class="container">
                <div class="mainProductsWrap">
                    <div class="mainProduct">
                        <!-- 1 -->
                        <div class="mainProductInner">

                            <div class="mainProductInnerImage">
                                <a href="" class="productImageLink">
                                    <img src="assets/img/products/30_cf1cb897-75f5-457e-a1fb-8335ab5ca4d7_360x.jpg"
                                        alt="">
                                </a>
                                <div class="productImageWlBtn">
                                    <a href="" class="productImageWlLink">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <div class="productImageHoverBtn">

                                    <a href="" class="ProductImageHoverBtnLink">
                                        <span>Add to cart</span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="mainProductInfo">
                                <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                                <span class="productInfoPrice">
                                    <span class="productInfoMoney">$46.00</span>
                                </span>
                            </div>

                        </div>

                        <!-- 2 -->
                        <div class="mainProductInner">

                            <div class="mainProductInnerImage">
                                <a href="" class="productImageLink">
                                    <img src="assets/img/products/30_cf1cb897-75f5-457e-a1fb-8335ab5ca4d7_360x.jpg"
                                        alt="">
                                </a>
                                <div class="productImageWlBtn">
                                    <a href="" class="productImageWlLink">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <div class="productImageHoverBtn">

                                    <a href="" class="ProductImageHoverBtnLink">
                                        <span>Add to cart</span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="mainProductInfo">
                                <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                                <span class="productInfoPrice">
                                    <span class="productInfoMoney">$46.00</span>
                                </span>
                            </div>

                        </div>

                        <!-- 3 -->
                        <div class="mainProductInner">

                            <div class="mainProductInnerImage">
                                <a href="" class="productImageLink">
                                    <img src="assets/img/products/30_cf1cb897-75f5-457e-a1fb-8335ab5ca4d7_360x.jpg"
                                        alt="">
                                </a>
                                <div class="productImageWlBtn">
                                    <a href="" class="productImageWlLink">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <div class="productImageHoverBtn">

                                    <a href="" class="ProductImageHoverBtnLink">
                                        <span>Add to cart</span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="mainProductInfo">
                                <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                                <span class="productInfoPrice">
                                    <span class="productInfoMoney">$46.00</span>
                                </span>
                            </div>

                        </div>

                        <!--4 -->
                        <div class="mainProductInner">

                            <div class="mainProductInnerImage">
                                <a href="" class="productImageLink">
                                    <img src="assets/img/products/30_cf1cb897-75f5-457e-a1fb-8335ab5ca4d7_360x.jpg"
                                        alt="">
                                </a>
                                <div class="productImageWlBtn">
                                    <a href="" class="productImageWlLink">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <div class="productImageHoverBtn">

                                    <a href="" class="ProductImageHoverBtnLink">
                                        <span>Add to cart</span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="mainProductInfo">
                                <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                                <span class="productInfoPrice">
                                    <span class="productInfoMoney">$46.00</span>
                                </span>
                            </div>

                        </div>

                        <!-- 5 -->
                        <div class="mainProductInner">

                            <div class="mainProductInnerImage">
                                <a href="" class="productImageLink">
                                    <img src="assets/img/products/30_cf1cb897-75f5-457e-a1fb-8335ab5ca4d7_360x.jpg"
                                        alt="">
                                </a>
                                <div class="productImageWlBtn">
                                    <a href="" class="productImageWlLink">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <div class="productImageHoverBtn">

                                    <a href="" class="ProductImageHoverBtnLink">
                                        <span>Add to cart</span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="mainProductInfo">
                                <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                                <span class="productInfoPrice">
                                    <span class="productInfoMoney">$46.00</span>
                                </span>
                            </div>

                        </div>

                        <!-- 6 -->
                        <div class="mainProductInner">

                            <div class="mainProductInnerImage">
                                <a href="" class="productImageLink">
                                    <img src="assets/img/products/30_cf1cb897-75f5-457e-a1fb-8335ab5ca4d7_360x.jpg"
                                        alt="">
                                </a>
                                <div class="productImageWlBtn">
                                    <a href="" class="productImageWlLink">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <div class="productImageHoverBtn">

                                    <a href="" class="ProductImageHoverBtnLink">
                                        <span>Add to cart</span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="mainProductInfo">
                                <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                                <span class="productInfoPrice">
                                    <span class="productInfoMoney">$46.00</span>
                                </span>
                            </div>

                        </div>

                        <!-- 7 -->
                        <div class="mainProductInner">

                            <div class="mainProductInnerImage">
                                <a href="" class="productImageLink">
                                    <img src="assets/img/products/30_cf1cb897-75f5-457e-a1fb-8335ab5ca4d7_360x.jpg"
                                        alt="">
                                </a>
                                <div class="productImageWlBtn">
                                    <a href="" class="productImageWlLink">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <div class="productImageHoverBtn">

                                    <a href="" class="ProductImageHoverBtnLink">
                                        <span>Add to cart</span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="mainProductInfo">
                                <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                                <span class="productInfoPrice">
                                    <span class="productInfoMoney">$46.00</span>
                                </span>
                            </div>

                        </div>

                        <!-- 8 -->
                        <div class="mainProductInner">

                            <div class="mainProductInnerImage">
                                <a href="" class="productImageLink">
                                    <img src="assets/img/products/30_cf1cb897-75f5-457e-a1fb-8335ab5ca4d7_360x.jpg"
                                        alt="">
                                </a>
                                <div class="productImageWlBtn">
                                    <a href="" class="productImageWlLink">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <div class="productImageHoverBtn">

                                    <a href="" class="ProductImageHoverBtnLink">
                                        <span>Add to cart</span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="mainProductInfo">
                                <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                                <span class="productInfoPrice">
                                    <span class="productInfoMoney">$46.00</span>
                                </span>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="block-newsletter">

            <div class="container">
                <div class="shippingRow">
                    <div class="shippingCol block-newsletter-icon">
                        <img src="{{ asset('/') }}{{$basic->logo ?? ''}}" alt="product">
                    </div>
                    <div class="shippingCol block-newsletter-title">
                        <h2>NEWSLETTER <span>SIGN UP</span></h2>
                    </div>
                    <div class="shippingCol block-newsletter-email-signup">
                        <form id="newsletter_form" class="newsletter_form" method="post" action="">
                            <input name="form_key" type="hidden" value="3HaSL730y0FNtBFT">
                            <input type="hidden" value="11" name="list">
                            <input type="text" class="txt required-entry validate-email newsletterEmail" name="email"
                                id="email" placeholder="Enter E-mail Address">
                            <div id="g-recaptcha-element-newsLetter">
                                <div class="grecaptcha-badge" data-style="bottomright"
                                    style="width: 256px; height: 60px; position: fixed; visibility: hidden; display: block; transition: right 0.3s ease 0s; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                    <div class="grecaptcha-logo">
                                        <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response"
                                            name="g-recaptcha-response" class="g-recaptcha-response"
                                            style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="btn" value="SEND">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Free Shipping -->
        <section class="freeShipping">
            <div class="container">
                <div class="shippingRow">

                    <div class="shippingCol">
                        <div class="shippingColItems">

                            <div class="shippingColItem shippingColIcon">
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <div class="shippingColItem shippingColItemContent">
                                <h3 class="shippingTitle">Free Shipping</h3>
                                <p class="shippingDesc">Wheter it's a sofa delivery's on the house</p>
                            </div>

                        </div>
                    </div>

                    <div class="shippingCol">
                        <div class="shippingColItems">

                            <div class="shippingColItem shippingColIcon">
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <div class="shippingColItem shippingColItemContent">
                                <h3 class="shippingTitle">Free Shipping</h3>
                                <p class="shippingDesc">Wheter it's a sofa delivery's on the house</p>
                            </div>

                        </div>
                    </div>

                    <div class="shippingCol">
                        <div class="shippingColItems">

                            <div class="shippingColItem shippingColIcon">
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <div class="shippingColItem shippingColItemContent">
                                <h3 class="shippingTitle">Free Shipping</h3>
                                <p class="shippingDesc">Wheter it's a sofa delivery's on the house</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>




    </main> --}}




































{{-- <section class="slider_area" id="slider_area" style="background-color: white !important;padding-bottom: 10px;">
    <div class="container-fluid mobile-padding-top-0" style="padding-top: 10px;">
        <div class="row"> --}}
            {{-- <div class="col-md-3">
                <div class="card">
                  <div class="card-title text-center" style="background-color: #007BC4;padding:2px;">
                      
                      <div class="dropdown">
                        <button style="background-color: transparent;color:white;" class="btn dropdown-toggle" type="button" data-toggle="dropdown">Product Categories
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu" style="width:100%">
                            @foreach($categories as $category)
                            <li><a href="{{ url('category') }}/{{ $category->name }}/{{ $category->id }}">{{ $category->name }}</a></li>

                            @endforeach

                        </ul>
                      </div>
                  </div>

                </div>

            </div> --}}

            {{-- eitar uporer ta comment e thakbe --}}
            {{-- <div class="col-lg-12 col-md-12 col-sm-12 " style="padding: 0px;">

                <div id="wrapper">
                    <div class="slider-wrapper theme-default">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                @foreach($sliders as $key => $slider)
                                <li data-target="#carousel-example-generic" style="background-color:#007A6D !important;border:none !important;" data-slide-to="{{$key}}"
                                    class="@if($key==0) active @endif"></li>
                                @endforeach
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @foreach($sliders as $key => $slider)
                                <div class="item @if($key==0) active @endif">
                                    <a href="#">
                                        <img style="width: 100%;max-height:500px;" src="{{$slider->img}}"
                                            alt="{{$slider->title}}">
                                    </a>
                                </div>
                                @endforeach
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" style="color:#007A6D !important" href="#carousel-example-generic" role="button"
                                data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" style="color:#007A6D !important" href="#carousel-example-generic" role="button"
                                data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}


        </div>
    </div>

</section>
{{--  --}}

        <!-- New Arrivals -->
        {{-- <section class="productCatTiles">
            <div class="container">
                <div class="productCatTitlesWrap">
                    <h3 class="ProductCatTitle">New Arrival</h3>
                    <h4 class="ProductCatSubTitle">Get through all trending products and get your best deal</h4>
                </div>
            </div>
        </section> --}}

        <!-- New Arrivals Product Section -->
        {{-- <section class="mainProducts">
            <div class="container">
                <div class="mainProductsWrap">
                    <div class="mainProduct">
                        <!-- 1 -->
                        @foreach($products->take(8) as $product) --}}
{{--  --}}
{{-- <div class="mainProductInner">

    <div class="mainProductInnerImage">
        <a href="product/{{ $product->id }}/{{ $product->slug }}" class="productImageLink">
            <img src="{{ asset('/') }}image/product_image/{{ $product->img1 }}"
                alt="{{ $product->title }}">
        </a>
        <div class="productImageWlBtn">
            <a href="" class="productImageWlLink">
                <i class="fa-solid fa-heart"></i>
            </a>
        </div>
        <div class="productImageHoverBtn">
            <a href="product/{{ $product->id }}/{{ $product->slug }}" class="ProductImageHoverBtnLink">
                <span>Quick view</span>
                <i class="fa fa-eye"> </i>
            </a>
            <a href="product/{{ $product->id }}/{{ $product->slug }}" class="ProductImageHoverBtnLink">
                <span>Add to cart</span>
                <i class="fa fa-cart-plus"> </i>
            </a>
        </div>
    </div>

    <div class="mainProductInfo">
        <h3 class="mainProductInfoTitle">{{ $product->title }}</h3>
        <span class="productInfoPrice">
            <span class="productInfoMoney">$ {{ $product->sprice }}</span>
        </span>
    </div>

</div> --}}
{{--  --}}
                        {{-- @endforeach --}}




                        



{{-- main product inner end --}}
                    {{-- </div>
                </div>
            </div>
        </section> --}}














{{--  --}}

<!--content area start-->

{{-- <section class="best_seller_product" style="background-color: #fff;padding-bottom: 10px" id="main_content_area"> --}}
{{-- box div category with icon --}}
{{-- <section>
    <div style="display: flex">

        <div class="child" style="background-color:red; height:300px; width:50%;">

        </div>
        <div class="child2" style="background-color:green; height:300px; width:50%;">

        </div>

    </div>
</section> --}}

{{-- <style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    .productWrapper {
        display: grid;
        grid-column-gap: 15px;
        grid-row-gap: 40px;
        grid-template-columns: 1fr;
    }

    @media only screen and (min-width: 700px) {
        .productWrapper {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media only screen and (min-width: 900px) {
        .productWrapper {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }
    }

    .ProductImage {
        max-width: 100%;
    }

    .ProductImage img {
        width: 100%;
    }

    .productDesc {
        background-color: #eee;
        color: #000;
        padding: 1.4rem;
        text-align: center;
    }
</style> --}}







{{--  --}}
    {{-- <div class="container"> --}}

        {{-- <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12 mobile-border-of"
                style="background: #fff;padding: 5px;">
                <h4 class="cat-title" style="margin-bottom: 5px !important;">Product Categories</h4>
                @foreach($categories as $category)
                <a href="{{ url('category') }}/{{ $category->name }}/{{ $category->id }}" class="btn btn-success"
                    style="margin: 0px;background: #007A6D; font-size: 12px; border-color:#D4D4D8;color:white">{{ $category->name }}</a>
                @endforeach
            </div>
        </div> --}}

        {{-- <div class="row" style="margin-top:20px">
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
        </div> --}}


         {{-- <div class="col-md-12">
                    {{ $products->links() }}
                </div> --}}


    {{-- </div>
</section> --}}

      <!-- Free Shipping -->
      {{-- <section class="freeShipping">
        <div class="container">
            <div class="shippingRow">

                <div class="shippingCol">
                    <div class="shippingColItems">

                        <div class="shippingColItem shippingColIcon">
                            <i class="fa-solid fa-car"></i>
                        </div>
                        <div class="shippingColItem shippingColItemContent">
                            <h3 class="shippingTitle">Free Shipping</h3>
                            <p class="shippingDesc">Wheter it's a sofa delivery's on the house</p>
                        </div>

                    </div>
                </div>

                <div class="shippingCol">
                    <div class="shippingColItems">

                        <div class="shippingColItem shippingColIcon">
                            <i class="fa-solid fa-car"></i>
                        </div>
                        <div class="shippingColItem shippingColItemContent">
                            <h3 class="shippingTitle">Free Shipping</h3>
                            <p class="shippingDesc">Wheter it's a sofa delivery's on the house</p>
                        </div>

                    </div>
                </div>

                <div class="shippingCol">
                    <div class="shippingColItems">

                        <div class="shippingColItem shippingColIcon">
                            <i class="fa-solid fa-car"></i>
                        </div>
                        <div class="shippingColItem shippingColItemContent">
                            <h3 class="shippingTitle">Free Shipping</h3>
                            <p class="shippingDesc">Wheter it's a sofa delivery's on the house</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <!-- Best Selling Products Title -->
    {{-- <section class="productCatTiles">
        <div class="container">
            <div class="productCatTitlesWrap">
                <h3 class="ProductCatTitle">Best Selling</h3>
                <h4 class="ProductCatSubTitle">Get through all trending products and get your best deal</h4>
            </div>
        </div>
    </section> --}}

    <!-- Best Selling Product Section -->
    {{-- <section class="mainProducts">
        <div class="container">
            <div class="mainProductsWrap">
                <div class="mainProduct">
                    <!-- 1 -->
                    <div class="mainProductInner">

                        <div class="mainProductInnerImage">
                            <a href="" class="productImageLink">
                                <img src="{{asset('front_asset/images/product.jpg')}}"
                                    alt="">
                            </a>
                            <div class="productImageWlBtn">
                                <a href="" class="productImageWlLink">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                            <div class="productImageHoverBtn">
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Quick view</span>
                                    <i class="fa-light fa-eye"></i>
                                </a>
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Add to cart</span>
                                    <i class="fa-light fa-cart-shopping"></i>
                                </a>
                            </div>
                        </div>

                        <div class="mainProductInfo">
                            <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                            <span class="productInfoPrice">
                                <span class="productInfoMoney">$46.00</span>
                            </span>
                        </div>

                    </div>

                    <!-- 2 -->
                    <div class="mainProductInner">

                        <div class="mainProductInnerImage">
                            <a href="" class="productImageLink">
                                <img src="{{asset('front_asset/images/product.jpg')}}"
                                    alt="">
                            </a>
                            <div class="productImageWlBtn">
                                <a href="" class="productImageWlLink">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                            <div class="productImageHoverBtn">
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Quick view</span>
                                    <i class="fa-light fa-eye"></i>
                                </a>
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Add to cart</span>
                                    <i class="fa-light fa-cart-shopping"></i>
                                </a>
                            </div>
                        </div>

                        <div class="mainProductInfo">
                            <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                            <span class="productInfoPrice">
                                <span class="productInfoMoney">$46.00</span>
                            </span>
                        </div>

                    </div>

                    <!-- 3 -->
                    <div class="mainProductInner">

                        <div class="mainProductInnerImage">
                            <a href="" class="productImageLink">
                                <img src="{{asset('front_asset/images/product.jpg')}}"
                                    alt="">
                            </a>
                            <div class="productImageWlBtn">
                                <a href="" class="productImageWlLink">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                            <div class="productImageHoverBtn">
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Quick view</span>
                                    <i class="fa-light fa-eye"></i>
                                </a>
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Add to cart</span>
                                    <i class="fa-light fa-cart-shopping"></i>
                                </a>
                            </div>
                        </div>

                        <div class="mainProductInfo">
                            <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                            <span class="productInfoPrice">
                                <span class="productInfoMoney">$46.00</span>
                            </span>
                        </div>

                    </div>

                    <!--4 -->
                    <div class="mainProductInner">

                        <div class="mainProductInnerImage">
                            <a href="" class="productImageLink">
                                <img src="{{asset('front_asset/images/product.jpg')}}"
                                    alt="">
                            </a>
                            <div class="productImageWlBtn">
                                <a href="" class="productImageWlLink">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                            <div class="productImageHoverBtn">
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Quick view</span>
                                    <i class="fa-light fa-eye"></i>
                                </a>
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Add to cart</span>
                                    <i class="fa-light fa-cart-shopping"></i>
                                </a>
                            </div>
                        </div>

                        <div class="mainProductInfo">
                            <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                            <span class="productInfoPrice">
                                <span class="productInfoMoney">$46.00</span>
                            </span>
                        </div>

                    </div>

                    <!-- 5 -->
                    <div class="mainProductInner">

                        <div class="mainProductInnerImage">
                            <a href="" class="productImageLink">
                                <img src="{{asset('front_asset/images/product.jpg')}}"
                                    alt="">
                            </a>
                            <div class="productImageWlBtn">
                                <a href="" class="productImageWlLink">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                            <div class="productImageHoverBtn">
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Quick view</span>
                                    <i class="fa-light fa-eye"></i>
                                </a>
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Add to cart</span>
                                    <i class="fa-light fa-cart-shopping"></i>
                                </a>
                            </div>
                        </div>

                        <div class="mainProductInfo">
                            <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                            <span class="productInfoPrice">
                                <span class="productInfoMoney">$46.00</span>
                            </span>
                        </div>

                    </div>

                    <!-- 6 -->
                    <div class="mainProductInner">

                        <div class="mainProductInnerImage">
                            <a href="" class="productImageLink">
                                <img src="{{asset('front_asset/images/product.jpg')}}"
                                    alt="">
                            </a>
                            <div class="productImageWlBtn">
                                <a href="" class="productImageWlLink">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                            <div class="productImageHoverBtn">
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Quick view</span>
                                    <i class="fa-light fa-eye"></i>
                                </a>
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Add to cart</span>
                                    <i class="fa-light fa-cart-shopping"></i>
                                </a>
                            </div>
                        </div>

                        <div class="mainProductInfo">
                            <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                            <span class="productInfoPrice">
                                <span class="productInfoMoney">$46.00</span>
                            </span>
                        </div>

                    </div>

                    <!-- 7 -->
                    <div class="mainProductInner">

                        <div class="mainProductInnerImage">
                            <a href="" class="productImageLink">
                                <img src="{{asset('front_asset/images/product.jpg')}}"
                                    alt="">
                            </a>
                            <div class="productImageWlBtn">
                                <a href="" class="productImageWlLink">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                            <div class="productImageHoverBtn">
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Quick view</span>
                                    <i class="fa-light fa-eye"></i>
                                </a>
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Add to cart</span>
                                    <i class="fa-light fa-cart-shopping"></i>
                                </a>
                            </div>
                        </div>

                        <div class="mainProductInfo">
                            <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                            <span class="productInfoPrice">
                                <span class="productInfoMoney">$46.00</span>
                            </span>
                        </div>

                    </div>

                    <!-- 8 -->
                    <div class="mainProductInner">

                        <div class="mainProductInnerImage">
                            <a href="" class="productImageLink">
                                <img src="{{asset('front_asset/images/product.jpg')}}"
                                    alt="">
                            </a>
                            <div class="productImageWlBtn">
                                <a href="" class="productImageWlLink">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                            <div class="productImageHoverBtn">
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Quick view</span>
                                    <i class="fa-light fa-eye"></i>
                                </a>
                                <a href="" class="ProductImageHoverBtnLink">
                                    <span>Add to cart</span>
                                    <i class="fa-light fa-cart-shopping"></i>
                                </a>
                            </div>
                        </div>

                        <div class="mainProductInfo">
                            <h3 class="mainProductInfoTitle">Normann Copenhagen Junto Carefe</h3>
                            <span class="productInfoPrice">
                                <span class="productInfoMoney">$46.00</span>
                            </span>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section> --}}

    <!-- Newsletter Section -->
    {{-- <div class="block-newsletter">

        <div class="container">
            <div class="shippingRow">
                <div class="shippingCol block-newsletter-icon">
                    <img src="{{ asset('/') }}{{$basic->logo ?? ''}}" alt="" style="height: 80%; width: 80%;">
                </div>
                <div class="shippingCol block-newsletter-title">
                    <h2>NEWSLETTER <span>SIGN UP</span></h2>
                </div>
                <div class="shippingCol block-newsletter-email-signup">
                    <form id="newsletter_form" class="newsletter_form" method="post"
                        action="https://formspree.io/f/xzbojqnb">
                        <input name="form_key" type="hidden" value="3HaSL730y0FNtBFT">
                        <input type="hidden" value="11" name="list">
                        <input type="text" class="txt required-entry validate-email newsletterEmail" name="email"
                            id="email" value="Enter E-mail Address">
                        <div id="g-recaptcha-element-newsLetter">
                            <div class="grecaptcha-badge" data-style="bottomright"
                                style="width: 256px; height: 60px; position: fixed; visibility: hidden; display: block; transition: right 0.3s ease 0s; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                <div class="grecaptcha-logo"><iframe title="reCAPTCHA"
                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeINYQUAAAAAGm_oHD96cB9WnGrxZz_ZJQb2VzK&amp;co=aHR0cHM6Ly93d3cubW9iaWxlc2VudHJpeC5jb206NDQz&amp;hl=en&amp;v=Y-cOIEkAqcfDdup_qnnmkxIC&amp;size=invisible&amp;cb=43xicu5uk3lc"
                                        width="256" height="60" role="presentation" name="a-a07ouwh050io"
                                        frameborder="0" scrolling="no"
                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                </div>
                                <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response"
                                    name="g-recaptcha-response" class="g-recaptcha-response"
                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                            </div><iframe style="display: none;"></iframe>
                        </div>
                        <input type="submit" class="btn" value="SEND">
                    </form>
                </div>
            </div>
        </div>
    </div> --}}


<script>
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
</script> 

    <!-- Main JavaScript File -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script>
        new Glide('.glide', {
            autoplay: 5000
        }).mount()

    </script>
    <script src="assets/js/index.js"></script> --}}




@endsection
