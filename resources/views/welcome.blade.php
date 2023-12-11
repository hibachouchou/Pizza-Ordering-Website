<div>
@extends('layouts.default')
<!--Content Section-->
@section('content')

<!-- Welcome Section -->

<section class="ftco-about d-md-flex" style="margin-top: 10%">
    <div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    <div class="one-half ">
    <div class="heading-section  ">
      <h2 class="mb-4">Welcome to our Restaurant <span class="flaticon-pizza">Pizza</span> House </h2>
    </div>
    <div>
      <p>Pizza House Restaurant Website is a platform that allows customer to order pizza online and pay for it using online payment methods.</p>
      <p>The website also provides a platform for pizza delivery services to advertise their services to customers. </p>
      <p>It also provides a platform for customers to rate and review the pizza they have ordered from different pizza delivery services.</p>
    </div>
    </div>
</section>
                

<!--Service Section-->

<section class="ftco-section ftco-services" id="service">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section  text-center">
        <h2 class="mb-4">Our Services</h2>
    <p></p>
      </div>
    </div>
        <div class="row">
      <div class="col-md-4 ">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-diet"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Healthy Foods</h3>
    <p></p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-bicycle"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Fastest Delivery</h3>
         <p></p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
          <div class="media-body">
            <h3 class="heading">Original Recipes</h3>
         <p></p>
          </div>
        </div>    
      </div>
    </div>
    </div>
</section>

  <!--Menu Section-->
  <div id="menu">
  @include('pages.menu')  
  </div>


<!--Gallery Section-->

<section class="ftco-gallery" id="blog">
    <div class="container-wrap">
        <div class="row no-gutters">
                <div class="col-md-3 ">
                    <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
                    </a>
                </div>
                <div class="col-md-3 ">
                    <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
                    </a>
                </div>
                <div class="col-md-3 ">
                    <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
                    </a>
                </div>
                <div class="col-md-3 ">
                    <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
                    </a>
                </div>
    </div>
    </div>
</section>

@if(session('msg'))
    <script>
        var alertType = "{{ session('alert', 'info') }}"; // Default to 'info' if not set
        alert("{{ session('msg') }}");
    </script>
@endif

@stop
<!---->



</div>