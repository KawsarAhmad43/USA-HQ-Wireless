<section class=" area-mobile-off" style="box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);">
    <br>

    <nav class="navbar navbar-default lightHeader " role="navigation"
        style="height: auto;top: 0;box-shadow: none;background: #fff">
        <div class="container" style="justify-content: center;display: flex;padding-right: 0;">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="padding:0">
                <nav id="menu">
                    <label for="tm" id="toggle-menu"><i class="fa fa-list"></i> <span class="drop-icon">▾</span></label>
                    <input type="checkbox" id="tm">
                    <ul class="main-menu clearfix">
                        <li><a href="{{ url('/') }}">হোম</a></li>
                        @php
                        $menus = App\Category::where('sts','=',1)->whereNull('mctg')->orderBy('position','ASC')->get();
                        $totalmenu = count($menus);
                        $i=1;
                        @endphp
                        @foreach($menus as $menu )
                        <li><a href="{{ url('category') }}/{{ $menu->name }}/{{ $menu->id }}" @if($i==$totalmenu)
                                style="border-right:1px solid #fff;" @endif>{{ $menu->name }}
                                <?php
                                        $subctg = App\Category::where('sts','=',1)->where('mctg',$menu->id)->orderBy('id','ASC')->get();
                                        $frow2 = $subctg->count();
                                        if($frow2>0){
                                            //Sub-manu error fixed 15/3/2020 
                                    ?>
                                <span class="drop-icon">▾</span>
                                <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
                            </a>
                            <input type="checkbox" id="sm1">
                            <ul class="sub-menu">
                                @foreach($subctg as $submenu )
                                <li><a
                                        href="{{ url('category') }}/{{ $submenu->name }}/{{ $submenu->id }}">{{ $submenu->name }}</a>
                                </li>
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
                    </ul>
                </nav>
            </div>


        </div>
    </nav>


    <section style="background-color:#4997A1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                    <ul class="navbar-nav pull-right">
                        <li class="top-menu-padding"><a href="javascript:void(0)" style="color:white;"
                                title="Mobile: {{$basic->contact_no}}" class="font-color1 ">Mobile:
                                {{$basic->contact_no}}</a></li>

                        <li class="top-menu-padding"><a href="javascript:void(0)" style="color:white;"
                                title="Marchant Bkash Number : {{$basic->bkas}}" class="font-color1">Marchant Bkash
                                Number : {{$basic->bkas}} </a></li>


                    </ul>
                </div>


            </div>
        </div>
    </section>

    <section style="background-color:#fff">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 padding-zero">
                    <div style="float: left">
                        <a href="{{ route('/') }}"><img src="{{ asset('/') }}{{$basic->logo}}" style="float: right"
                                alt="Logo" title="{{$basic->name}}"></a>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12" style="">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                        style="border-radius: 20px 20px 0 0;padding-top: 8px;">
                        <form action="/search" method="post" class="form" role="search">
                            @csrf
                            <div class="form-group">
                                <div class="input-group"
                                    style="border: 2px solid #E7297F!important; border-radius: 4px;">
                                    <input type="search" name="searchBox" id="searchpro" class="form-control"
                                        placeholder="পন্য সার্চ করুন"
                                        style="border:0  !important;box-shadow: none !important;padding: 2px 10px;">

                                    <span
                                        style="background: #E7297F;
                                                  color: #fff;border: 0;border-radius: 0;font-size: 20px; cursor: pointer;"
                                        class="input-group-addon"> <button type="submit"
                                            style="background: #E7297F;
                                                  color: #fff;border: 0;border-radius: 0;font-size: 20px; cursor: pointer;"> &nbsp;<i class="fa fa-search"
                                                onclick="location.href='pageurl.html';">Search</i></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div style="padding-right:0" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-group">
                    <ul class="navbar-nav  ">

                        <li data-toggle="modal" data-target="#mySms" class="top-menu-padding"
                            style="padding-top: 20px;padding-left: 0"><a
                                style="background:#E7297F;color: #fff;font-weight: bold;padding-left: 10px;padding-right: 10px;border-radius: 6px;"
                                href="#" title="Track Your Order" class="font-color1">
                                অর্ডার ট্র্যাকিং
                            </a></li>

                        <li class="top-menu-padding" style="padding-top: 20px;">
                            <a style="background:#E7297F;color: #fff;font-weight: bold;padding-left: 10px;padding-right: 10px;border-radius: 6px;"
                                href="tel:01714695105" title="Call" class="font-color1">
                                <i class="fa fa-phone-square"> </i> {{$basic->phone}}
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>



</section>
<div class="modal fade" id="mySms" role="dialog">
    <div class="modal-dialog">
        <form action="{{ url('order/track') }}" method="post">
            @csrf
            <!-- Modal content-->
            <div class="modal-content" style="border: 3px solid green;">
                <div class="modal-header" style="border-bottom: 1px solid #35A3D3;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> <strong>Track Order Record</strong></h4>
                </div>
                <div class="modal-body">


                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 form-group">
                        <input style="width:100% !important;padding: 20px;" required type="number" class="form-control"
                            name="phone" placeholder="Please Type Your Mobile Number">
                    </div>

                </div>
                <div class="modal-footer" style="border:0;padding: 50px 30px 30px 30px;">
                    <input style="color:#fff;font-weight:bold;padding: 5px;width:100% !important;background:limegreen"
                        type="submit" class="btn  pull-right" value="Search">
                </div>
            </div>
        </form>

    </div>
</div>

<nav id="menuBar" class="navbar navbar-default lightHeader  " role="navigation"
    style="height: auto;top:0;background: #081621;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"
                style="padding-right: 0;float: left;margin-left: 20px;margin-top: 5px;background-color: transparent; border: 0;box-shadow: none;">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="{{ url('/') }}" style="float: left;padding-left: 5px;padding-top: 3px;">
                @php
                $name = explode(' ',$basic->name);
                @endphp

                <strong style="
                            font-size: 30px;
                            color: #f48120;
                            font-weight: 800;
                            ">{{$name[0]}} </strong>
                @if(count($name)>1)
                <strong style="
                            font-size: 30px;
                            font-weight: 800;
                            color: #0089d0;
                        ">{{$name[1]}}</strong>
                @endif


            </a>
            <a href="{{ url('/cart') }}" style="float: right;padding-right: 30px;">
                <span class="badge" style="position: absolute;background: red;color: #fff;top: 10px;right: 13px;"
                    id="MtotalCartItems">{{ Cart::content()->count() }}</span>
                <img class="img-responsive" src="{{ asset('/') }}image/manufacturer_logo/cart-icon.png"
                    alt="{{$basic->name}}" style=" padding-top: 8px;width: 38px;;">
                <!--<i class="fa fa-shopping-cart" style="color: #fff; font-size: 22px; font-weight: bold; padding-top: 11px;"></i>-->
            </a>
            <div class="col-xs-12" style="padding-right: 0;padding-left: 28px !important;padding-right: 15px;">
                <form action="#" method="post" class="form" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="search" id="msearchpro" class="form-control" placeholder="Search Product"
                                style="border-radius: 4px 0 0 4px !important;border-color: limegreen;margin-left: 8px;padding-left: 10px">

                            <span style="color: #fff; background:green; border: 1px;" class="input-group-addon">
                                &nbsp;<i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </form>
            </div>


        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-left">
                @foreach($menus as $menu )
                <li style="padding-left: 10px;" class=" dropdown megaDropMenu color-2">
                    <a href="{{ url('category') }}/{{ $menu->name }}/{{ $menu->id }}">
                        <span style="font-weight: normal;color: #000">{{ $menu->name }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

    </div>
</nav>