    <!-- header-start -->
    <header class="header d-blue-bg">
        <div class="header-mid">
            <div class="container">
                <div class="heade-mid-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div class="header__info">
                                <div class="logo">
                                    <a href="{{ route('/') }}" class="logo-image"><img src="{{ asset('/') }}{{$basic->logo ?? ''}}"
                                            alt="logo" style="width: 100%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="header__search">
                                <form action="#">
                                    <div class="header__search-box">
                                        <input class="search-input" type="text" placeholder="I'm shopping for...">
                                        <button class="button" type="submit"><i class="fal fa-search"></i></button>
                                    </div>
                                    <div class="header__search-cat" style="border: none;">
                                        <select>
                                            <option>All Categories</option>
                                            <option>Best Seller Products</option>
                                            <option>Top 10 Offers</option>
                                            <option>New Arrivals</option>
                                            <option>Phones &amp; Tablets</option>
                                            <option>Electronics &amp; Digital</option>
                                            <option>Fashion &amp; Clothings</option>
                                            <option>Jewelry &amp; Watches</option>
                                            <option>Health &amp; Beauty</option>
                                            <option>Sound &amp; Speakers</option>
                                            <option>TV &amp; Audio</option>
                                            <option>Computers</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-8 col-sm-8">
                            <div class="header-action">
                                <div class="block-userlink">
                                    <a class="icon-link" href="my-account.html">
                                        <i class="fal fa-user"></i>
                                        <span class="text">
                                            <span class="sub">Login </span>
                                            My Account </span>
                                    </a>
                                </div>
                                <div class="block-wishlist action">
                                    <a class="icon-link" href="wishlist.html">
                                        <i class="fal fa-heart"></i>
                                        <span class="count">0</span>
                                        <span class="text">
                                            <span class="sub">Favorite</span>
                                            My Wishlist </span>
                                    </a>
                                </div>
                                <div class="block-cart action">
                                    <a class="icon-link" href="{{ url('/cart') }}">
                                        <i class="fal fa-shopping-bag"></i>
                                        <span id="MtotalCartItems" class="count">{{ Cart::content()->count() }}</span>
                                        <span class="text">
                                            <span class="sub">Your Cart:</span>
                                            $00.00 </span>
                                    </a>












                                    <div class="cart">
                                        <div class="cart__mini">
                                            <ul>
                                                <li>
                                                    <div class="cart__title">
                                                        <h4>Your Cart</h4>
                                                        <span>({{ Cart::content()->count() }} Item in Cart)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div
                                                        class="cart__item d-flex justify-content-between align-items-center">
                                                        <div class="cart__inner d-flex">
                                                            <div class="cart__thumb">
                                                                <a href="product-details.html">
                                                                    <img src="{{ asset('/') }}image/manufacturer_logo/cart-icon.png" alt="{{$basic->name}}">
                                                                </a>
                                                            </div>
                                                            <div class="cart__details">
                                                                <h6><a href="product-details.html"> Samsung C49J89:
                                                                        £875, Debenhams Plus </a></h6>
                                                                <div class="cart__price">
                                                                    <span>$255.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart__del">
                                                            <a href="#"><i class="fal fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div
                                                        class="cart__sub d-flex justify-content-between align-items-center">
                                                        <h6>Subtotal</h6>
                                                        <span class="cart__sub-total">$255.00</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="cart.html" class="wc-cart mb-10">View cart</a>
                                                    <a href="checkout.html" class="wc-checkout">Checkout</a>
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
        <div class="header__bottom">
            <div class="container">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-3">
                        <div class="cat__menu-wrapper side-border d-none d-lg-block">
                            <div class="cat-toggle">
                                <button type="button" class="cat-toggle-btn cat-toggle-btn-1"><i
                                        class="fal fa-bars"></i> Shop by department</button>
                                <div class="cat__menu">
                                    <nav id="mobile-menu" style="display: block;">
                                        <ul>
                                            <li>
                                                <a href="shop.html">All Categories <i class="far fa-angle-down"></i></a>
                                                <ul class="mega-menu">
                                                    <li><a href="shop.html">Shop Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Standard SHop Page</a>
                                                            </li>
                                                            <li><a href="product-details.html">Shop Right Sidebar</a>
                                                            </li>
                                                            <li><a href="product-details.html">Shop Left Sidebar</a>
                                                            </li>
                                                            <li><a href="product-details.html">Shop 3 Column</a></li>
                                                            <li><a href="product-details.html">Shop 4 Column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Product Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Product Details</a></li>
                                                            <li><a href="product-details.html">Product V2</a></li>
                                                            <li><a href="product-details.html">Product V3</a></li>
                                                            <li><a href="product-details.html">Varriable Product</a>
                                                            </li>
                                                            <li><a href="product-details.html">External Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Other Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">wishlist</a></li>
                                                            <li><a href="product-details.html">Shopping Cart</a></li>
                                                            <li><a href="product-details.html">Checkout</a></li>
                                                            <li><a href="product-details.html">Login</a></li>
                                                            <li><a href="product-details.html">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Catagory 1</a></li>
                                                            <li><a href="product-details.html">Catagory 2</a></li>
                                                            <li><a href="product-details.html">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Catagory 1</a></li>
                                                            <li><a href="product-details.html">Catagory 2</a></li>
                                                            <li><a href="product-details.html">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop.html">Phone and Electronics <i
                                                        class="far fa-angle-down"></i></a>
                                                <ul class="mega-menu mega-menu-2">
                                                    <li><a href="shop.html">Shop Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Standard SHop Page</a>
                                                            </li>
                                                            <li><a href="product-details.html">Shop Right Sidebar</a>
                                                            </li>
                                                            <li><a href="product-details.html">Shop Left Sidebar</a>
                                                            </li>
                                                            <li><a href="product-details.html">Shop 3 Column</a></li>
                                                            <li><a href="product-details.html">Shop 4 Column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Product Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Product Details</a></li>
                                                            <li><a href="product-details.html">Product V2</a></li>
                                                            <li><a href="product-details.html">Product V3</a></li>
                                                            <li><a href="product-details.html">Varriable Product</a>
                                                            </li>
                                                            <li><a href="product-details.html">External Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Other Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">wishlist</a></li>
                                                            <li><a href="product-details.html">Shopping Cart</a></li>
                                                            <li><a href="product-details.html">Checkout</a></li>
                                                            <li><a href="product-details.html">Login</a></li>
                                                            <li><a href="product-details.html">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Catagory 1</a></li>
                                                            <li><a href="product-details.html">Catagory 2</a></li>
                                                            <li><a href="product-details.html">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Catagory 1</a></li>
                                                            <li><a href="product-details.html">Catagory 2</a></li>
                                                            <li><a href="product-details.html">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop.html">Best Seller Products
                                                    <span class="cat-label">hot!</span>
                                                    <i class="far fa-angle-down"></i>
                                                </a>
                                                <ul class="mega-menu">
                                                    <li><a href="shop.html">Shop Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Standard SHop Page</a>
                                                            </li>
                                                            <li><a href="product-details.html">Shop Right Sidebar</a>
                                                            </li>
                                                            <li><a href="product-details.html">Shop Left Sidebar</a>
                                                            </li>
                                                            <li><a href="product-details.html">Shop 3 Column</a></li>
                                                            <li><a href="product-details.html">Shop 4 Column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Product Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Product Details</a></li>
                                                            <li><a href="product-details.html">Product V2</a></li>
                                                            <li><a href="product-details.html">Product V3</a></li>
                                                            <li><a href="product-details.html">Varriable Product</a>
                                                            </li>
                                                            <li><a href="product-details.html">External Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Other Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">wishlist</a></li>
                                                            <li><a href="product-details.html">Shopping Cart</a></li>
                                                            <li><a href="product-details.html">Checkout</a></li>
                                                            <li><a href="product-details.html">Login</a></li>
                                                            <li><a href="product-details.html">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Catagory 1</a></li>
                                                            <li><a href="product-details.html">Catagory 2</a></li>
                                                            <li><a href="product-details.html">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Catagory 1</a></li>
                                                            <li><a href="product-details.html">Catagory 2</a></li>
                                                            <li><a href="product-details.html">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop.html">Top 10 Offers
                                                    <span class="cat-label green">new!</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop.html">New Arrivals <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="shop.html">Home Appliances</a></li>
                                                    <li><a href="shop.html">Technology</a>
                                                        <ul class="submenu">
                                                            <li><a href="shop.html">Storage Devices</a></li>
                                                            <li><a href="shop.html">Monitors</a></li>
                                                            <li><a href="shop.html">Laptops</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Office Equipments</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.html">TV &amp; Audio</a></li>
                                            <li><a href="shop.html">Electronics &amp; Digital</a></li>
                                            <li class="d-laptop-none"><a href="shop.html">Fashion &amp; Clothings</a>
                                            </li>
                                            <li class="d-laptop-none"><a href="shop.html">Jewelry &amp; Watches</a></li>
                                            <li><a href="shop.html">Health &amp; Beauty</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-3">
                        <div class="header__bottom-left d-flex d-xl-block align-items-center">
                            <div class="side-menu d-lg-none mr-20">
                                <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i
                                        class="fas fa-bars"></i></button>
                            </div>
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.html" class="active">Home </a>

                                        </li>

                                        <li><a href="about.html">About Us</a></li>
                                        <li class="has-mega"><a href="shop.html">Shop </a>
                                        </li>

                                        @php
                                        $menus = App\Category::where('sts','=',1)->whereNull('mctg')->orderBy('position','ASC')->get();
                                        $totalmenu = count($menus);
                                        $i=1;
                                        @endphp


                                        @foreach($menus as $menu )
                                        <li><a href="{{ url('category') }}/{{ $menu->name }}/{{ $menu->id }}">@if($i==$totalmenu)
                                            @endif {{ $menu->name }}<i class="far fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <?php
                                                $subctg = App\Category::where('sts','=',1)->where('mctg',$menu->id)->orderBy('id','ASC')->get();
                                                $frow2 = $subctg->count();
                                                if($frow2>0){
                                                    //Sub-manu error fixed 15/3/2020 
                                            ?>
                                            @foreach($subctg as $submenu )
                                                <li><a href="{{ url('category') }}/{{ $submenu->name }}/{{ $submenu->id }}">{{ $submenu->name }}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                        </li>
                                        <?php
                                    } else {
                                        echo "</a></li>";
                                    }
                                $i++;
                                ?>

                                        @endforeach

                                        
                                        <li>
                                            <a href="about.html">Pages <i class="far fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="product-details.html">Product Details</a></li>
                                                <li><a href="faq.html">FAQs pages</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-9">
                        <div class="shopeing-text text-sm-end">
                            <p>Spend $120 more and get free shipping!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    
    
    
    
    
    
    {{-- <!-- Header Section -->
    <header class="header-section" id="main-section">
        <div class="container">
            <div class="headerWrapper">

                <div class="headerItem headerLeft headerHiddenSM">
                    <div class="headerLogo">
                        <a href="{{ route('/') }}" class="logoLink" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('/') }}{{$basic->logo ?? ''}}" alt="" style="max-width: 246px;">
                        </a>
                    </div>
                </div>

                <div class="headerItem headerCenter headerHiddenSM">
                    <div class="searchForm">
                        <form action="/search" method="post" class="seachform" role="search">
                            @csrf
                            <input type="text" id="searchpro" class="searchFormInput" placeholder="Search for products">
                            <button type="submit" class="seachSubmit">
                                <i class="fa-solid fa-magnifying-glass" onclick="location.href='pageurl.html';"></i>
                            </button>
                        </form>
                    </div>
                </div>





                <div class="headerItem headerRight headerHiddenSM">
                    <div class="headerRightElement headerRightAcccount">
                        <a href="#">
                            <span class="accountIcon"></span>
                            <span class="accountText"> Login / Register</span>
                        </a>
                    </div>
                    <div class="headerRightElement headerRightWishlist">
                        <a href="#">
                            <span class="accountIcon wishlistIcon">
                                <i class="fa-solid fa-heart"></i>
                            </span>
                            <span class="accountText wishlistText"> Wishlist</span>
                        </a>
                    </div>
                    <div class="headerRightElement headerRightCompare">
                        <a href="#">
                            <span class="accountIcon compareIcon">
                                <i class="fa-solid fa-shuffle"></i>
                            </span>
                            <span class="accountText compareText"> Compare</span>
                        </a>
                    </div>
                    <div class="headerRightElement headerRightCart">
                        <a href="#">
                            <span class="accountIcon cartIcon">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                            <span class="accountText cartTotal"> </span>
                        </a>
                    </div>
                </div>

                <!-- Header Mobile -->
                <div class="headerItem headerMobileLeft headerHiddenLG">
                    <div class="headerRightElement headerRightCart">
                        <a href="#">
                            <span class="accountIcon menuIcon">
                                <i class="fa-solid fa-bars"></i>
                            </span>
                            <span class="accountText menuText">Menu </span>
                        </a>
                    </div>
                </div>
                <div class="headerItem headerMobileCenter headerHiddenLG">
                    <div class="headerLogo">
                        <a href="" class="logoLink" target="_blank" rel="noopener noreferrer">
                            <img src="assets/img/wood-logo-dark.svg" alt="" style="max-width: 179px;">
                        </a>
                    </div>
                </div>
                <div class="headerItem headerMobileRight headerHiddenLG">
                    <div class="headerRightElement headerRightCart">
                        <a href="#">
                            <span class="accountIcon cartIcon">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                            <span class="accountText cartTotal"> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}









