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
                                        <form name="addReserveProduct" action="/addReserveProduct" class="form" method="post" enctype="multipart/form-data" onsubmit="return validation()">{{ Form::token() }}
                                          <input type="hidden" name="customer_id" value="{{ Auth::user()->id}}"/>
                                          <input type="hidden" name="reserve_status" value="reserve"/>

                                          <input type="hidden" name="product_id" value="{{$product->product_id}}"/>
                                            <input type="hidden" name="product_number" value=1>

                                        <button type="submit" class="btn btn-sm btn-primary " >หยิบใส่ตะกร้า</button>
                                        </form>

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

    <div class="container">
    @foreach( $product_reserves as $pr)
      {{$pr->join_Product->product_name}}
         ราคา {{$pr->join_Product->product_price}} ฿
        จำนวน  <input type="number" value="{{$pr->product_number}}"/>
          รวม   <input type="text" value="<?php echo $pr->product_number*$pr->join_Product->product_price;?> "/>
    @endforeach
    </div>




    <div class="follow">
      <a  href="userPurchase">
        <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="\images\purchase.png" alt="purchaseIcon" width="200" height="60">
      </a>
    </div>

@endsection

@section('embled_script')

@endsection
