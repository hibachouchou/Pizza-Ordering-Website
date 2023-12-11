<div>
@extends('layouts.default')
<!--Content Section-->
@section('content')
        <section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div class="one-half img" style="background-image: url('{{ asset("images/$pizza->img") }}');"></div>
    			</div>
	    		<div class="col-md-6 appointment ">
					<h3 class="mb-3">Create  Order For {{$pizza->type}}</h3>
	    			<form action="/" class="appointment-form" method="POST">
	    				@csrf
						<div class="d-md-flex">
		    				<div class="form-group">
								<label>Your Full Name</label>
		    					<input type="text" class="form-control" placeholder="Your Full Name" name="name">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
								<label>Your Full Address</label>
		    					<input type="text" class="form-control" placeholder="Your Full Address" name="address">
		    				</div>
	    				</div>
						<div class="d-me-flex">
	    					<div class="form-group">
								<label>Your Phone Number</label>
		    					<input type="tel" class="form-control" placeholder="Your Phone Number" name="phone">
		    				</div>
	    				</div>
						<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="text" value="{{$pizza->id}}" class="form-control" hidden name="id">
		    				</div>
	    				</div>
						<div class="d-me-flex">
	    					<div class="form-group">
								<label>Pizza Size</label>
		    					<select class="form-select" name="size">
									<option  name="size" value="Small">Small</option>
									<option name="size" value="Medium">Medium</option>
									<option name="size" value="Large">Large</option>
								</select>
		    				</div>
	    				</div>
						<div class="d-me-flex">
	    					<div class="form-group">
								<label>How many pizzas would you like to order?</label>
		    					<input type="number" class="form-control" placeholder="Number" name="number">
		    				</div>
	    				</div>
						<div class="d-me-flex ">
							<div class="form-group ">
								<label>Extra Pizza Toppings</label>
								@foreach ($toppings as $category => $toppingList)
									<div class="form-check">
										<span>{{ $category }} :</span><br/>
										@foreach ($toppingList as $topping)
										<input type="checkbox"  value="{{ $topping }}" class="form-check-input" name="toppings[]">
										<label class="form-check-label" >
											{{ $topping }}
										  </label> <br/>
										@endforeach
									</div>
								@endforeach
							</div>
	    				</div>
	            <div class="form-group">
	              <input type="submit" value="Confirm Order" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>
	
@stop
<!---->
</div>