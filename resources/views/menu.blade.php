<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{ url('/css/menu.css') }}">
    <title>Document</title>
</head>
<body>

                    @if(session()->has('error'))
                    <div class="alert alert-warning">
                        {{ session()->get('error') }}
                    </div>
                    @endif
@if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
     
    <div class="menu">
        <div class="heading">
            <h1>Food Rabbit</h1>
            <h3>&mdash;MENU &mdash;</h3>
        </div>
        <div class="food-items">
        @foreach($menus as $menu)
            <img src="{{asset(explode('|', $menu->image)[0])}}" alt="">
            <div class="details">
                <div class="details-sub">
                    <h5>{{$menu->name}}</h5>
                    <h5 class="price">{{$menu->price}}</h5>
                </div>
                <p>{{$menu->details}}</p>
                <form method="POST" action="/add-to-cart">
                    @csrf
                    <input type="hidden" name="id" value="{{$menu->id}}">
                    <input type="hidden" name="price" value="{{$menu->price}}">
                    <input type="hidden" name="name" value="{{$menu->name}}">
                    <h5>Amount</h5><input name="quantity" type="number" value="1">
                <button>Add To Cart</button>
</form>
            </div>
            @endforeach
        </div>
    </div>
 <!-- @foreach($menus as $menu)
                <div class="col-xs-4" style="padding: 10px;">
                    <img src="{{asset(explode('|', $menu->image)[0])}}" height="200" width="150">
                    <h4> {{$menu->name}}</h4>
                    <h3> {{$menu->details}}</h3>
                    <h3> {{$menu->price}}</h3>
                    <form method="POST" action="/add-to-cart">
                    @csrf
                    <input type="hidden" name="id" value="{{$menu->id}}">
                    <input type="hidden" name="price" value="{{$menu->price}}">
                    <input type="hidden" name="name" value="{{$menu->name}}">
                    <label>Amount</label><input name="quantity" type="number" value="1">
                    <button type="submit" class="btn">Add To Cart</button>
                </form>
                    
                    </div>
                    
            @endforeach -->

</body>
</html> 