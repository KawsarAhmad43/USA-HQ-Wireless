<footer class="navbar-fixed-bottom area-mobile-off" style="width: 100%;background: none;">
    <a href="{{ url('/cart') }}">
        <!--Apps button start-->
        <div style="height: auto;width: 80px;background: #fff ;position: absolute;z-index: 9999;bottom: 450px;right: 0;border-radius: 5px 0 0 5px;border: 1px solid #1D70BA;"
            class="cart_anchor">
            <span id="CartDetailsTotal"
                style="padding: 8px 0;width:100%;display: inline-block;color:#000;font-size:14px;font-weight:bold;text-align:center">{{ Cart::total() }}
                Tk.</span>
            <span
                style="width:100%;display: inline-block; background: #4997A2; color: #fff;font-weight:bold;padding:2px;text-align:center;border-radius: 0 0 0 5px;">
                <i class="fa fa-shopping-cart " title="My Cart" style="    font-size: 30px;"> </i>
                <span id="totalCartItems2">{{ Cart::content()->count() }} Items</span>
            </span>
        </div>
    </a>
    <!--Apps button end-->
</footer>


<footer class="navbar-default" style="background: #F9FAFB">
    <div class="container-fluid ">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            {{-- <p class="text-center" style="padding-top:5px"></p>
            <center>
                @foreach(App\Page::all() as $page)
                <a href="{{ url('page/'.$page->slug) }}" target="_blank" style="color: white !important;margin:0 15px">
                    {{ $page->title }} </a>
                @endforeach
            </center>




            <div class="row bg-black">

                <div class="col-md-2">

                </div>

                <div class="col-md-8">
                    <ul class="  social-network social-circle">
                        <li><a href="{{\App\Setting\App::fb ?? ''}}" class="app icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>

                <div class="col-md-2">

                </div>

            </div>

            <p class="text-center" style="color:#313131;font-weight:bold;padding-top:8px;padding-bottom: 8px;">Copyright
                ©
                {{ date('Y') }} By <a href="{{url('/')}}" style="color:blue;">{{\App\Setting\App::name ?? ''}}</a></p> --}}
                
            {{--This is used for only for demo,and gosquad api will add later--}}
            {{-- <p>Current User {{rand(10,30)}} </p> --}}

            {{--  --}}


            <div class="footer-clean mt-2">
                <footer>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-4 col-md-3 item">
                                
                                
                                <div class="footer-logo" style="height: 80%; width: 90%; background: transparent; margin: 0 auto;">
                                    <img src="images/lips.png" alt="" style="height: 80%; width: 80%;">
            
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 item">
                                 <h3>Quick links</h3>
                                 <p class="quicklink"><a href="">Privacy & Policy</a></p>
                                 <p class="quicklink"><a href="">Returns Policy</a></p>
                                 <p class="quicklink"><a href="">Terms & Conditions</a></p>
                                 <p class="quicklink"><a href="">Coverage Areas</a></p>
                                 <p class="quicklink"><a href="">Contact Us</a></p>
                               
                                
                            </div>
                            <div class="col-sm-4 col-md-3 item">
                                <h3>Find Us</h3>
                                <p><i class="fas fa-map-marked-alt"> </i>Contact Address: <br>Email: correspond.usahqwireless.com <br></p>
            
                                    <p><i class="fas fa-phone-square-alt"></i> Phone: 7344449593</p>
                                    <p><i class="fas fa-fax"></i> Fax: 7348587483</p>
                                    {{-- <p><i class="fas fa-business-time"></i> Business Hour: 8:00am-4:00pm</p> --}}
            
            
                            </div>
                            <div class="col-lg-3 item social">
                                <a href="{{\App\Setting\App::fb ?? ''}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google"></i></a>
                                <a href="#"><i class="fab fa-skype"></i></a>
                                <p class="copyright">Developed By <span class="ncoder" style="font-weight: bolder;"><a href="#">N-Coder</a></span> © 2021</p>
                            </div>
                        </div>
            
                    </div>
            
                </footer>
                
                
            </div>

            <p class="text-center" style="color:#313131;font-weight:bold;padding-top:8px;padding-bottom: 8px;">Copyright
                ©
                {{ date('Y') }} By <a href="{{url('/')}}" style="color:blue;">{{\App\Setting\App::name ?? ''}}</a></p>






            {{--  --}}



        </div>

    </div>
</footer>
