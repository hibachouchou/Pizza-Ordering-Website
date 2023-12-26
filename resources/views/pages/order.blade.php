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
    <title>Order Details</title>
</head>

<body >
<div>
  
    <!--Order Details Section-->
  
            <section class="ftco-appointment">
                <div class="overlay"></div>
            <div class="container-wrap">
                <div class="row no-gutters d-md-flex align-items-center">
                    <div class="col-md-6 d-flex align-self-stretch">
                        <div class="one-half img" style="background-image: url('{{ asset('images/bg_2.png') }}');"></div>
                    </div>
                    <div class="col-md-6 appointment ">
                        <h3 class="mb-3">Order Details </h3>
                        <form action="/order/{{$order->id}}" class="appointment-form" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <label>Client Name :</label> {{$order->client_name}}
                                </div>
                            </div>
                            <div class="d-me-flex">
                                <div class="form-group">
                                    <label>Client Address :</label> {{$order->client_address}}
                                </div>
                            </div>
                            <div class="d-me-flex">
                                <div class="form-group">
                                    <label>Client Phone Number :</label> {{$order->client_phone}}
                                </div>
                            </div>
                            <div class="d-me-flex">
                                <div class="form-group">
                                    <label>Order :</label> {{$order->type}}
                                </div>
                            </div>
                            <div class="d-me-flex">
                                <div class="form-group">
                                    <label>Pizza Size :</label> {{$order->pizza_siza}}
                                </div>
                            </div>
                            <div class="d-me-flex">
                                <div class="form-group">
                                    <label>Number :</label>  {{$order->number}}
                                </div>
                            </div>
                            <div class="d-me-flex">
                                <div class="form-group">
                                    <label>Total Price :</label> {{$order->price * $order->number}} $
                                </div>
                            </div>
                            <div class="d-me-flex">
                                <div class="form-group">
                                    <label>Extra Toppings :</label> <br/>
                                    <ul> @foreach ($order->toppings as $topping )
                                        <li>
                                            {{$topping}}
                                        </li>
                                    @endforeach </ul>
                                   
                                       
                                   
                                </div>
                            </div>
                    <div class="form-group">
                      <input type="submit" value="Clear Order" class="btn btn-danger py-3 px-4">
                    </div>
                        </form>
                    </div>    			
                </div>
            </div>
        </section>
        
  
    <!---->
    </div>

    
</body>
</html>
