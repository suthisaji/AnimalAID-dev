<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Webshop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('shop/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('shop/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('shop/css/shop.css') }}"/>
  </head>
  <body>
    @include('shop.layouts.navbar')
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