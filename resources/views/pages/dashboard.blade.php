<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <title>Orders List</title>
    </head>

    <body >

<!--Dashboard Section-->


    <div class="container">
        <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
      <div class="col-md-7 heading-section text-center ">
        <h2 class="mb-4">Welcome Back Admin</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
        <p class="mt-5">Check the list of orders</p>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            @foreach ($orders as $order)
            <div class="pricing-entry d-flex ">
                <div class="img" style="background-image: url(images/{{$order['img']}});"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                        <h3>Order is :<span>{{$order['type']}}</span></h3>
                    </div>
                    <div class="d-block">
                        <span>Number : {{$order['number']}}</span><br/>
                       <span > Size : {{$order['pizza_siza']}}</span>
                    </div>
                    <p class=""><span></span> <a href="/order_details/{{$order['id']}}" class="ml-2 btn btn-white btn-outline-white">Show Details</a></p>
                </div>

            </div>
            @endforeach
           
        </div>

    </div>
    </div>
    
   



<!---->

    </body>
</html>
