<!DOCTYPE html>

<html>

<head>

	<title>Shopping Cart</title>

	  <link rel="stylesheet" href="{{ url('/css/cart.css') }}">>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>



<div class="container">

	<h1> The Following food You Order !</h1>
    
	<div class="cart">
   
		<div class="products">
        @foreach($carts as $cart)
			<div class="product">


				<div class="product-info">

					<h3 class="product-name">{{$cart->name}}</h3>

					<h4 class="product-price">{{$cart->price}}</h4>

					<p class="product-quantity">Qnt: {{$cart->qty}}
                    <p class="product-quantity">{{$cart->options['total']}}

					<p class="product-remove">

						<i class="fa fa-trash" aria-hidden="true"></i>

						<span class="remove"> <a href="{{url('/remove-item/'. $cart->rowId)}}">Remove</a></span>

					</p>

				</div>

			</div>
            @endforeach
		</div>

		<div class="cart-total">

			<p>

				<span>Total Price</span>

				<span>{{$subTotal}}</span>

			</p>

			<a href="{{url('/checkout')}}"">Proceed to Checkout</a>

		</div>

	</div>

</div>



</body>


</html>

 

