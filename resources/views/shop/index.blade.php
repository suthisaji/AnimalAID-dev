@extends('shop.layouts.main')
@section('content')
<style>
  .follow{
    position:fixed;
    top:16%;
    right: 1%;
  }
</style>
    <div class="row">
       @include('shop.components.categoryMenu', ['categories' => $categories])
    </div>
    <div class="row">
        @include('shop.components.search')
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card shop-listing">
                <div class="card-header">
                    <ol class="breadcrumb">
                        <b><li class="breadcrumb-item"><a href="#">สินค้า</a></li>
                        <li class="breadcrumb-item active">เครื่องใช้ของสัตว์</li></b>
                    </ol>
                </div>
                <div class="card-block row shop-item-listing">
                    @foreach($products as $product)
                        <div class="col-md-2 col-sm-3 col-6 shop-item">
                            <div class="card border-less text-xs-center">
                                <div class="card-block">
                                    <div class="cart-remaining">
                                        <span class="badge badge-pill badge-success">มีสินค้า</span>
                                    </div>
                                      <img src="{{url('/images/'.$product->product_pic)}}">
                                    <span>{{ $product->product_name }}</span>

                                    <div class="add-to-cart">
                                        <span style="color:orange;"><b>{{ $product->product_price }}</b>฿</span>
                                        <button type="button" class="btn btn-sm btn-primary cd-add-to-cart" data-price="{{ $product->product_price }}" data-img="{{ $product->product_pic }}" data-name="{{ $product->product_name }}"><i class="fa fa-2x fa-cart-plus" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        @if ($products->lastPage() > 1)
                        @include('shop.components.pagination', ['paginator' => $products])
                    @endif
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
                </header>

                <div class="body">
                    <ul>
                        <!-- products added to the cart will be inserted here using JavaScript -->
                    </ul>
                </div>

                <footer>
                    <a href="#0" class="checkout btn"><em>ยอดรวม <span>0</span>฿ </em></a>
                </footer>


            </div>
        </div> <!-- .cd-cart -->
    </div> <!-- cd-cart-container -->

    <div class="follow">
      <a  href="userPurchase">
        <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="\images\purchase.png" alt="purchaseIcon" width="200" height="60">
      </a>
    </div>

@endsection

@section('embled_script')

@endsection
