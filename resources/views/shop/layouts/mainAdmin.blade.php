<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Webshop</title>

    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('shop/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('shop/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('shop/css/shop.css') }}"/>
  </head>
  <body>
         @include('shop.layouts.navbarJam')
    <div class="container mt-3">
        @yield('content')
    </div>
    <script src="{{ url('shop/js/jquery.min.js') }}"></script>
    <script src="{{ url('shop/js/tether.min.js') }}"></script>
    <script src="{{ url('shop/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('shop/js/shop.js') }}"></script>
    @yield('embled_script')
  </body>
</html>
