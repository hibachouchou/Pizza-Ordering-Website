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
    <title>Pizza Ordering Website</title>
    </head>

    <body >

<!--Navbar Section-->

@include('includes.navbar')
<!---->
<!-- Content Section -->

@yield('content')
<!---->

<!--Footer Section-->
@include('includes.footer')
<!---->

    </body>
</html>
