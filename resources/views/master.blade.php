<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{asset('')}}">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('admin/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/vendors/colorbox/example3/colorbox.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/rs-plugin/css/responsive.css') }}">
    <link rel="stylesheet" title="style" href="{{ asset('source/assets/dest/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/css/animate.css') }}">
    <link rel="stylesheet" title="style" href="{{ asset('source/assets/dest/css/huong-style.css') }}">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('theme/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('theme/css/animate.css ') }}">
    
    <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('theme/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{asset('theme/css/aos.css') }}">

    <link rel="stylesheet" href="{{asset('theme/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{asset('theme/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{asset('theme/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{asset('theme/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{asset('theme/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css') }}">
</head>
<body class="goto-here">
    
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/4.3.1/bootstrap.min.js"></script>
<script src="{{asset('theme/js/jquery.min.js') }}"></script>
<script src="{{asset('theme/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{asset('theme/js/popper.min.js') }}"></script>
<script src="{{asset('theme/js/bootstrap.min.js') }}"></script>
<script src="{{asset('theme/js/jquery.easing.1.3.js') }}"></script>
<script src="{{asset('theme/js/jquery.waypoints.min.js') }}"></script>
<script src="{{asset('theme/js/jquery.stellar.min.js') }}"></script>
<script src="{{asset('theme/js/owl.carousel.min.js') }}"></script>
<script src="{{asset('theme/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{asset('theme/js/aos.js') }}"></script>
<script src="{{asset('theme/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{asset('theme/js/bootstrap-datepicker.js') }}"></script>
<script src="{{asset('theme/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('theme/js/google-map.js') }}"></script>
<script src="{{asset('theme/js/main.js') }}"></script>
<script src="{{ asset('source/assets/dest/js/jquery.js') }}"></script>
<script src="{{ asset('source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js') }}"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="{{ asset('source/assets/dest/js/scripts.min.js') }}"></script>
<script src="{{ asset('source/assets/dest/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('source/assets/dest/vendors/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ asset('source/assets/dest/vendors/animo/Animo.js') }}"></script>
<script src="{{ asset('source/assets/dest/vendors/dug/dug.js') }}"></script>

<script src="{{ asset('source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('source/assets/dest/js/waypoints.min.js') }}"></script>
<script src="{{ asset('source/assets/dest/js/wow.min.js') }}"></script>
<!--customjs-->
<script src="{{ asset('source/assets/dest/js/custom2.js') }}"></script>
<script>
    $(document).ready(function($) {    
        $(window).scroll(function(){
          if($(this).scrollTop()>150){
              $(".header-bottom").addClass('fixNav')
          }else{
            $(".header-bottom").removeClass('fixNav')
        }}
        )
    })
</script>

<script type="text/javascript">
    function loginForm() {
        document.getElementById('getLogin').click();
    }

    function registerForm() {
        document.getElementById('getRegister').click();
    }
</script>

<script>
    $(document).ready(function() {    
        $(document).on('click', '#newProductPagination > .pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) 
        {
            $.ajax({
                url:"/fetch_data?page=" + page,
                success:function(data) 
                {
                    $('#table_data_new_product').html(data);
                },
            })
        }

        $(document).on('click', '#saleProductPagination > .pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data_sale_product(page);
        });

        function fetch_data_sale_product(page) 
        {
            $.ajax({
                url:"/fetch_data_sale_product?page=" + page,
                success:function(data) 
                {
                    $('#data_sale_product').html(data);
                },
            })
        }

        $(document).on('click', '#newProduct, #saleProduct', function(event){
            event.preventDefault();
            var page = $(this).attr('href');
            make_request(page);
            count_cart();
        });

        function make_request(page) 
        {
            $.ajax({
                url:page,
                success:function(data) 
                {
                    $('#ajax_cart').html(data);
                },
            })
        } 

        function count_cart() 
        {
            $.ajax({
                url:"/count_cart",
                success:function(data) 
                {
                    $('#count_cart').html(data);
                },
            })
        }  

        $(document).on('click', '#delete_cart', function(event){
            event.preventDefault();
            var page = $(this).attr('href');
            delete_cart(page);
            count_cart();
        });

        function delete_cart(page) 
        {
            $.ajax({
                url:page,
                success:function(data) 
                {
                    $('#ajax_cart').html(data);
                },
            })
        }  
    })
</script>

<script>
    var message = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(message);
    }
  </script>
@yield('script')

</body>
</html>