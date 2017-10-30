@extends('shop.layouts.main')
@section('content')
    <div class="row">
       {{--  @include('shop.components.categoryMenu', ['categories' => $categories])  --}}
    </div>
    <div class="row">
        @include('shop.components.search')
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card shop-listing">
                <div class="card-header">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">ยืนยันการสั่งซื้อ</a></li>
                    </ol>
                </div>
                <div class="card-block row shop-item-listing">
                    ราคารวม {{ Cart::total() }}
                    <input type="text" id="district">
                    <input type="text" id="amphoe">
                    <input type="text" id="province">
                    <input type="text" id="zipcode">
                    ธนาคาร<br/>
                    <a href="{{ url('/webshop/submit') }}" class="btn btn-success btn-lg">ยืนยันการสั่งซื้อ</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('embled_script')
<script>
    $.Thailand({
        database: "{{ url('shop/jquery.Thailand.js/database/db.json') }}",
        $district: $('#district'),
        $amphoe: $('#amphoe'),
        $province: $('#province'),
        $zipcode: $('#zipcode'),
    });
</script>
@endsection