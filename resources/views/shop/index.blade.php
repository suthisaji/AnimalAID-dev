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
                                        <span class="badge badge-pill badge-success">มีสินค้า</span>

                                    </div>
                                    <img class="product-image" src="{{ 'https://animals-aid.com/images/'.$product->product_pic }}"/>
                                    <span class="product-name">{{ $product->product_name }} <span style="color:#FF4000;">{{$product->product_price}}</span>฿</span>






                                    <div class="add-to-cart">
                                        <form action="{{ url('webshop/cart') }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{$product->product_id}}"/>
                                            <input type="hidden" name="name" value="{{$product->product_name}}"/>
                                            <input type="hidden" name="price" value="{{$product->product_price}}"/>
                                            <button type="submit" class="btn btn-sm btn-primary cd-add-to-cart-removeit" data-price="{{ $product->product_price }}" data-img="{{ $product->product_pic }}" data-name="{{ $product->product_name }}"><i class="fa fa-2x fa-cart-plus" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <span class="text-muted"><a href="{{url('productDetail',array($product->product_id))}}">รายละเอียดสินค้า </a<span>



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
<script>
var cartCheckout = $(".cd-cart-container").find(".checkout")

cartCheckout.on("click", function(event){
    event.preventDefault();
    console.log('go checkout', _cartList)
    fetch("{{url('webshop/checkout')}}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        credentials: "same-origin",
        body: JSON.stringify({
            _token: "{{ csrf_token() }}",
            cart: _cartList
        })
    })
    .then(res => {
        console.log(res)
        //window.location.href = "{{url('webshop/checkout')}}"
    })
})
</script>
@endsection
