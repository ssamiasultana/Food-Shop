<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
@if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
 <div class="checkout-panel">
  <div class="panel-body">
    <h2 class="title">Checkout</h2>
 
    <div class="progress-bar">
      <div class="step active"></div>
      <div class="step active"></div>
      <div class="step"></div>
      <div class="step"></div>
    </div>
 
    <div class="payment-method">
      <label for="card" class="method card">
        < <div class="card-logos">
         
        </div> 
 
        <div class="radio-input">
          <input id="card" type="radio" name="payment">
          Delivery Charge 60 Taka
        </div>
      </label>
 
      <label for="paypal" class="method paypal">
             <div class="radio-input">
          <input id="paypal" type="radio" name="payment">
           Bkash Pay with charge
        </div>
      </label>
    </div>
    <form action="/checkout" method="POST">
        @csrf
    <div class="input-fields">
      <div class="column-1">
        <label for="cardholder">Customer Name</label>
        <input type="text" name="name" placeholder="Enter your name">
 
        <div class="small-inputs">
          <div>
            <label for="date">Address</label>
            <input type="text" name="adress" placeholder="Enter your address">
          </div>
 
          <div>
            <label for="verification">Phone*</label>
            <input type="number" name="phone" placeholder="Enter your phone">
          </div>
        </div>
 
      </div>
      <div class="column-2">
        <label for="cardnumber">Email</label>
        <input type="text" name="email" placeholder="email">
 
       
      </div>
    </div>
  </div>
 
  <div class="panel-footer">
    
    <button class="btn next-btn">Confirm</button>
  </div>
</div>
</form> 
<!-- @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <form action="/checkout" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="adress" placeholder="Enter your address">
        <input type="number" name="phone" placeholder="Enter your phone">
        <input type="email" name="email" placeholder="email">
        <select name="pay" >
       <option value="Cash on delivery">cash On deliver</option>
        <option value="Bkash">Bkash</option>
      
</select>
<button type="submit" name="submit">Confirm</button>
    </form> -->
</body>
</html>