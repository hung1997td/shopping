<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bestwebcreator.com/shopwise/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2020 15:17:42 GMT -->
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

    <!-- SITE TITLE -->
    <title>Shopwise</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('client/assets')}}/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('client/assets')}}/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('client/assets')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('client/assets')}}/css/linearicons.css">
    <link rel="stylesheet" href="{{asset('client/assets')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('client/assets')}}/css/simple-line-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{asset('client/assets')}}/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('client/assets')}}/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('client/assets')}}/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/css/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('client/assets')}}/css/slick-theme.css">
    <!-- Style CSS -->

    <link rel="stylesheet" href="{{asset('client/assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('client/assets')}}/css/responsive.css">
    <!-- Hotjar Tracking Code for bestwebcreator.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:2073024,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

</head>

<body>

<!-- LOADER -->
{{--<div class="preloader">--}}
{{--    <div class="lds-ellipsis">--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- END LOADER -->





@include('client.layout.navbar')
@yield('content')
@include('client.layout.footer')


<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<!-- Latest jQuery -->
<script src="{{asset('client/assets')}}/js/jquery-1.12.4.min.js"></script>
<!-- popper min js -->
<script src="{{asset('client/assets')}}/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{asset('client/assets')}}/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="{{asset('client/assets')}}/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="{{asset('client/assets')}}/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="{{asset('client/assets')}}/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="{{asset('client/assets')}}/js/parallax.js"></script>
<!-- countdown js  -->
<script src="{{asset('client/assets')}}/js/jquery.countdown.min.js"></script>
<!-- imagesloaded js -->
<script src="{{asset('client/assets')}}/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js -->
<script src="{{asset('client/assets')}}/js/isotope.min.js"></script>
<!-- jquery.dd.min js -->
<script src="{{asset('client/assets')}}/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="{{asset('client/assets')}}/js/slick.min.js"></script>
<!-- elevatezoom js -->
<script src="{{asset('client/assets')}}/js/jquery.elevatezoom.js"></script>
<!-- scripts js -->
<script src="{{asset('client/assets')}}/js/scripts.js"></script>
@yield('footer_script')
</body>

<!-- Mirrored from bestwebcreator.com/shopwise/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2020 15:19:44 GMT -->
</html>
