<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('shop/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('shop/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('shop/css/shop.css') }}"/>
    
  </head>
  <body>
    @include('shop.layouts.navbar')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="ค้นหาสินค้า">
                </div>
            </div>
        </div>

        <div class="row mt-3">
            {{--  <div class="col-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                    <li class="breadcrumb-item"><a href="#">สินค้า</a></li>
                    <li class="breadcrumb-item active">ของใช้</li>
                </ol>
            </div>  --}}
            <div class="col-3">
                <div class="list-group list-categories">
                    <a href="#" class="list-group-item list-group-item-action active header disabled">
                        <i class="fa fa-tags" aria-hidden="true"></i>&nbspหมวดหมู่
                    </a>
                    @foreach($categories as $category)
                        <a href="#" class="list-group-item list-group-item-action active">
                            {{ $category->category_name }}
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-9">
                <div class="card shop-listing">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">สินค้า</a></li>
                            <li class="breadcrumb-item active">เครื่องใช้ของสัตว์</li>
                        </ol>
                    </div>
                    <div class="card-block row shop-item-listing">
                        <div class="col-3 shop-item">
                            <div class="card card-outline-primary text-xs-center">
                                <div class="card-block">
                                    <img src="//cdn3.tops.co.th/productimages/tpimage/8853301200899.jpg"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 shop-item">
                            <div class="card card-outline-primary text-xs-center">
                                <div class="card-block">
                                    <img src="//cdn0.tops.co.th/productimages/tpimage/8853301200318.jpg"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 shop-item">
                            <div class="card card-outline-primary text-xs-center">
                                <div class="card-block">
                                    <img src="//cdn0.tops.co.th/productimages/tpimage/8853301200318.jpg"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 shop-item">
                            <div class="card card-outline-primary text-xs-center">
                                <div class="card-block">
                                    <img src="//cdn0.tops.co.th/productimages/tpimage/8853301200318.jpg"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 shop-item">
                            <div class="card card-outline-primary text-xs-center">
                                <div class="card-block">
                                    <img src="//cdn0.tops.co.th/productimages/tpimage/8853301200318.jpg"/>
                                </div>
                            </div>
                        </div>
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