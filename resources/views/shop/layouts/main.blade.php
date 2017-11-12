<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Webshop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ url('shop/css/bootstrap.min.css') }}"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">
    <link rel="stylesheet" href="{{ url('shop/css/shop.css') }}"/>
    <link rel="stylesheet" href="{{ url('shop/jquery.Thailand.js/dist/jquery.Thailand.min.css') }}">
   <link rel="stylesheet" href="{{ url('css/sweetalert.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
    btn-lg, .btn-group-lg1>.btn {
       padding: 1rem 1rem;
      }
    .lyl{
    max-width: 18%;
}
.btn-sm, .btn-group-sm>.btn {
    padding: 0rem 0rem;
  }
  .btn-primary {
    color: #fff;
    background-color: #504e4e;
    border-color: #504e4e;
}
.page-item.active .page-link {
    z-index: 2;
    color: #fff;
    background-color: rgba(255, 104, 0, 0.73);
    border-color: #f99d57;
}
.bu{
   padding: 0.3rem 0.6rem;
}
.ft {
    font-size: 18px;
  }
    </style>
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
    <script type="text/javascript" src="{{ url('shop/jquery.Thailand.js/dependencies/JQL.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('shop/jquery.Thailand.js/dependencies/typeahead.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ url('shop/jquery.Thailand.js/dist/jquery.Thailand.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/sweetalert.js') }}"></script>
    @yield('embled_script')
  </body>
</html>
