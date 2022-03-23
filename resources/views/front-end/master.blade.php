<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description"
        content="">
       <meta name="google-site-verification" content="bSOwst5a2693MOZUgJvEciZregaEQ6KorlQ1nl7JpJo" />
    <meta property="og:url" content="http://{{url('/')}}.com/" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{\App\Setting\App::title ?? ''}}" />
    <meta property="og:description"
        content="{{\App\Setting\App::description}}" />
    <link rel="shortcut icon" href="{{ asset('/image/manufacturer_logo/') }}/{{\App\Setting\App::favicon}}" type="image/x-icon">  
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/responsive.css">
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/normalize.css">
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/footer.css">
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/8ceebf3f77.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('/') }}slider-asset/css/owl.carousel.min.css">


    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/etalage.css">
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/socialbtn.css">


    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/mega_menu.css">
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/customshop_style.css">

    <link rel="stylesheet" href="{{ asset('/') }}front_asset/etalage.css" type="text/css" media="all" />
    <script src="{{ asset('/') }}front_asset/jquery.min.js"></script>
    <script src="{{ asset('/') }}front_asset/jquery.etalage.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7593MSGFTF"></script>
    <!-- <link rel="shortcut icon"  href="front_asset/icon.png"/> -->

    <script>
        jQuery(document).ready(function ($) {

            $('.etalage').etalage({
                thumb_image_width: 400,
                thumb_image_height: 400,
                source_image_width: 500,
                source_image_height: 500,
                show_hint: true,
                click_callback: function (image_anchor, instance_id) {
                    // alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                }
            });
        });


    </script>
    
    <meta name="facebook-domain-verification" content="oqp4nff8slyfizn3h2nnoam7xi4c2u" />
    
    
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '855816741770758');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=855816741770758&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    


</head>



<body style="background-color:#fff">

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script async="async">
    window.fbAsyncInit = function () {
      FB.init({
        xfbml: true,
        version: 'v9.0'
      });
    };
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Your Chat Plugin code -->
  <div class="fb-customerchat" attribution="setup_tool" page_id="103916037887695" theme_color="#148AD2">
  </div>



    <!--<body style="background-color:#fff" ondragstart="return false;" ondrop="return false;" oncontextmenu="return false;" >-->

    <!--	=======================header top section=========================-->
    @include('front-end.includes.header')
    <!--=========================header bottom section==================-->


    <div class="wrapper">
        @yield('content')
    </div>



    <!--<footer class="navbar-fixed-bottom " style="width: 100%;background: none;" id="SidebarCardMenu">-->
    @include('front-end.includes.footer')


    <script src="{{ asset('/') }}slider-asset/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}slider-asset/js/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function () {
            
            
            
            
            //owl carousel

            if ($('.product-category').hasClass('owl-carousel')) {

                $('.owl-carousel').owlCarousel({
                    items: 6,
                    margin: 15,
                    nav: true,
                    dots: false,
                    autoplay: true,
                    slideBy: 6,
                    autoplayHoverPause: true,
                    rewind: true,
                    responsive: {
                        0: {
                            items: 3
                        },
                        760: {
                            items: 3
                        },
                        960: {
                            items: 4
                        },
                        1170: {
                            items: 6
                        }
                    }
                })
            }
            $("#searchpro,#msearchpro").keyup(function () {
                var text = $(this).val();
                if (text == "") {
                    text = "null";
                }
                var url = "{{ url('/') }}/search/" + text;

                $(document).prop('title', 'Search Result');
                //console.log(url);
                $.ajax({
                    type: 'GET',
                    url: url,
                    success: function (data) {
                        $(".wrapper").html(data);
                    }
                });
            });
        });
    </script>
    <script src="{{ asset('/') }}front_asset/js/bootstrap.min.js"></script>
    <script>
        $('.megaDropMenu').hover(function () {
            $(this).addClass('open');
        }, function () {
            $(this).removeClass('open');
        });
    </script>

    <script>
        $(window).scroll(function () {
            var wScroll = $(this).scrollTop();
            if (wScroll > 88) {
                $('#SidebarCardMenu').css({
                    'display': 'block'
                });
            }
            if (wScroll < 88) {
                $('#SidebarCardMenu').css({
                    'display': 'none'
                });
            }
        });


    </script>
    
    <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7593MSGFTF');
</script>


    <script>
        @yield('script')
    </script>

</body>



</html>
