<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/css/addmenu.css') }}">
    <body>
      @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    
      <div class="row">
    <div class="col-md-12">
   
        <h1> Add Menu </h1>
        
        <fieldset>
          
         
        <form action="/menu" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="name">Menu name:</label>
          <input type="text" id="name" name="name">
        
          <label for="email">Details:</label>
          <input type="text" id="mail" name="details">
       
          <label for="password">Price:</label>
          <input type="number" id="password"   name="price">
        
          <label>Image:</label>
          <input type="file" name="image[]" multiple>
          
       
       
        <button type="submit">Save</button>
        </form>
        </fieldset>
       
        </div>
      </div>
      </form>
      <!-- @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <form action="/menu" method="POST" enctype="multipart/form-data">
    @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="details" placeholder="details" id="">
        <input type="number" name="price" placeholder="price" id="">
        <input type="file" name="image[]" multiple>
        <button type="submit" name="submit">Save</button>
    </form>  -->

    </body>
</html>

 
