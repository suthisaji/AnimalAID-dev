<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>รายการสินค้า</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://animals-aid.com/shop/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://animals-aid.com/shop/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://animals-aid.com/shop/css/shop.css"/>
  </head>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="https://animals-aid.com/images/S__1261612.jpg" width="60px"/>
    </a>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">หน้าแรก <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">สินค้า</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">สมัครสมาชิก</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">เข้าสู่ระบบ</a>
            </li>
        </ul>
    </div>
</nav>
   <div class="container mt-3">
               <div class="row">
          <div class="col-md-12 mb-3 list-categories">
               <button type="button" class="btn btn-secondary">
               เครื่องใช้ของสัตว์
           </button>
               <button type="button" class="btn btn-secondary">
               อาหารสัตว์
           </button>
               <button type="button" class="btn btn-secondary">
               เครื่องแต่งกาย
           </button>
       </div>    </div>
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
   </div>    </div>
       <div class="row mt-3">
           <div class="col-md-12">
               <div class="card shop-listing">
                   <div class="card-header">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="#">สินค้า</a></li>
                           <li class="breadcrumb-item active">เครื่องใช้ของสัตว์</li>
                       </ol>
                   </div>

                     @foreach($product as $product)
                   <div class="card-block row shop-item-listing">
                                               <div class="col-md-2 col-sm-3 col-6 shop-item">
                               <div class="card border-less text-xs-center">
                                   <div class="card-block">
                                       <div class="cart-remaining">
                                           <span class="badge badge-pill badge-success">รหัส{{$product->product_id}}</span>
                                       </div>
                                       <img src="{{url('/images/'.$product->product_pic)}}"/>
                                       <span>{{$product->product_name}}</span>
                                       <div class="add-to-cart">
                                           <a href="/edit_Product/{{ $product->product_id }}" class="btn btn-sm btn-primary " >แก้ไข</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                                      @endforeach





                                       </div>
                   <div class="row">
                       <div class="col-md-12 text-center">
                                               </div>
                   </div>
               </div>
           </div>
       </div>

       <div class="cd-cart-container empty">
           <a href="#0" class="cd-cart-trigger">
               Cart
               <ul class="count"> <!-- cart items count -->
                   <li>0</li>
                   <li>0</li>
               </ul> <!-- .count -->
           </a>

           <div class="cd-cart">
               <div class="wrapper">
                   <header>
                       <h2>Cart</h2>
                       <span class="undo">Item removed. <a href="#0">Undo</a></span>
                   </header>

                   <div class="body">
                       <ul>
                           <!-- products added to the cart will be inserted here using JavaScript -->
                       </ul>
                   </div>

                   <footer>
                       <a href="#0" class="checkout btn"><em>Checkout - $<span>0</span></em></a>
                   </footer>
               </div>
           </div> <!-- .cd-cart -->
       </div> <!-- cd-cart-container -->
       </div>
       <script src="https://animals-aid.com/shop/js/jquery.min.js"></script>
  <script src="https://animals-aid.com/shop/js/tether.min.js"></script>
  <script src="https://animals-aid.com/shop/js/bootstrap.min.js"></script>
  <script src="https://animals-aid.com/shop/js/shop.js"></script>

</body>
</html>
