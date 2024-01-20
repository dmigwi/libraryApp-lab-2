<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"/>

  </head>
  <body>

    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

	    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link " href="{{ URL::to('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ URL::to('books') }}">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ URL::to('loans') }}">Loans</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ URL::to('authors') }}">Authors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ URL::to('products') }}">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ URL::to('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ URL::to('movies') }}">-Movies-</a>
      </li>
      </ul>
   </div>
</nav>

<div class="container">
    @yield('content')
    @section('footerScripts') 
    @show
</div>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('./js/app.js') }} "></script>

  </body>
</html>
