<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    {{--  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  --}}
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('shop/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('shop/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('shop/css/shop.css') }}"/>
    
  </head>
  <body>
    @include('shop.layouts.navbar')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 mb-3 list-categories">
                @foreach($categories as $category)
                    <button type="button" class="btn btn-secondary">
                        {{ $category->category_name }}
                    </button>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input id="item_name" type="text" placeholder="ค้นหาสินค้า" class="form-control">
                        <input id="user_id" type="hidden" value="10">
                            <span class="input-group-btn">
                                <button id="search-btn" type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info">
                                    <i class="fa fa-2x fa-search"></i>
                                </button>
                            </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card shop-listing">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">สินค้า</a></li>
                            <li class="breadcrumb-item active">เครื่องใช้ของสัตว์</li>
                        </ol>
                    </div>
                    <div class="card-block row shop-item-listing">
                        @foreach($products as $product)
                            <div class="col shop-item">
                                <div class="card border-less text-xs-center">
                                    <div class="card-block">
                                        <div class="cart-remaining">
                                            <span class="badge badge-pill badge-success">มีสินค้า</span>
                                        </div>
                                        <img src="{{ $product->product_pic }}"/>
                                        <span>{{ $product->product_name }}</span>
                                        <div class="add-to-cart">
                                            <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-2x fa-cart-plus" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('shop/js/jquery.min.js') }}"></script>
    <script src="{{ url('shop/js/tether.min.js') }}"></script>
    <script src="{{ url('shop/js/bootstrap.min.js') }}"></script>
  </body>
</html>