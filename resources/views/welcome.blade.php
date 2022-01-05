
        <link rel="stylesheet" href="{{ url('/css/index.css') }}">

       
    
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Saira:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ url('/css/index.css') }}">

<title>Restaurant page</title>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<header>
<nav id="navbar">
<div id="logo">

<h2 id="title">FOOd Rabbit</h2>
  <!-- <img id="logoimg"src="https://image.flaticon.com/icons/svg/52/52239.svg" alt="logo"> -->
  </div>
<button id="bars" class="btn"><i class="fa fa-bars"></i></button>
<ul>
@if (Route::has('login'))
@auth
  <li><a href="{{ url('/home') }}">Home</a></li>
  @else
  <li><a href="{{ route('login') }}">Log In</a></li> 
  @if (Route::has('register'))
  <li><a href="{{ route('register') }}">Register</li> 
  @endif
@endauth
<li><a href="{{ url('/menu') }}">Menu</a></li>
<li><a class="btn btn-outline-warning" href="{{ url('/cart') }}">Cart</li>
@endif
  
  <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
  
                                    <!-- <li><a href="{{url('/add_menu')}}"> Add Menu</a></li> -->
                                    <!-- <li><a href="{{ url('/order-details') }}">Order List</li>  -->
</ul>
</nav>
</header>
<section>
<div id="zephsplace">
<h1> Order  Food</h1>
</div>