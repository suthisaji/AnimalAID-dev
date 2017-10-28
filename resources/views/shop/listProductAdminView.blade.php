@extends('shop.layouts.main')
@section('content')
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
                        <li class="breadcrumb-item"><a href="#">สินค้า</a></li>
                        <li class="breadcrumb-item active">เครื่องใช้ของสัตว์</li>
                    </ol>
                </div>
                <div class="card-block row shop-item-listing">
                    @foreach($products as $product)
                        <div class="col-md-2 col-sm-3 col-6 shop-item">
                            <div class="card border-less text-xs-center">
                                <div class="card-block">
                                    <div class="cart-remaining">
                                        <span class="badge badge-pill badge-success">รหัส{{$product->product_id}}</span>
                                    </div>
                                    <img src="{{ $product->product_pic }}"/>
                                    <span>{{ $product->product_name }}</span>
                                      <span>{{ $product->product_price }}</span>
                                    <div class="add-to-cart">
                                      <a href="/edit_Product/{{ $product->product_id }}" class="btn btn-sm btn-warning " >แก้ไข</a>
                                      ||
                                     <a href="/deleteProduct/{{ $product->product_id }}" class="btn btn-danger btn-sm btn-delete " onclick="return confirm('ยืนยันการลบสินค้า !!!')">ลบ</a>
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
                    <a href="#0" class="checkout btn"><em>ยอดรวม <span>0</span>฿</em></a>
                </footer>
            </div>
        </div> <!-- .cd-cart -->
    </div> <!-- cd-cart-container -->
@endsection

@section('embled_script')

@endsection
