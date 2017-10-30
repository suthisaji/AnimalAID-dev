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
                        <li class="breadcrumb-item"><a href="#">ยืนยันการสั่งซื้อ ของคุณ {{Auth::user()->name}}</a></li>
                    </ol>

                </div>

                <table class="table">
                    <thead>
                        <tr>

                            <th>รหัสสินค้า</th>
                            <th></th>
                            <th>จำนวน</th>
                            <th>ราคา</th>

                        </tr>
                    </thead>
                      @foreach (Cart::content() as $item)
                    <tbody>


                      <td>{{$item->id}}</td>
                      <td><a href="{{ url('webshop', [$item->model->slug]) }}">{{ $item->name }}</a></td>
                       <td>

                            @if( $item->qty == 1 ? 'selected' : '' )    <input type="text" disabled value="1"/>
                            @elseif( $item->qty == 2 ? 'selected' : '' )    <input type="text" disabled value="2"/>
                            @elseif( $item->qty == 3 ? 'selected' : '' )    <input type="text" disabled value="3"/>
                            @elseif( $item->qty == 4 ? 'selected' : '' )    <input type="text" disabled value="4"/>
                            @elseif( $item->qty == 5 ? 'selected' : '' )    <input type="text" disabled value="5"/>

                             @endif
                           </select>
                       </td>
                       <td>${{ $item->subtotal }}</td>


                @endforeach

                <div class="card-block row shop-item-listing">
                    ราคารวม {{ Cart::total() }}<br>
              กรุณากรอกที่อยู่เพื่อรับของ
                    <input type="text" id="district" placeholder="ตำบล">
                    <input type="text" id="amphoe" placeholder="อำเภอ">
                    <input type="text" id="province" placeholder="จังหวัด">
                   <input type="text" id="zipcode" placeholder="รหัสไปรษณี">

                   <div class="form-group" id="Bank_name">
                     <label for="Bank_name" class="form-label">ธนาคาร</label><br>
                     <label><input type="radio" value="กรุงเทพ สาขาบิ๊กซี อยุธยา มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน บัญชีเลขที่ 790-020373-3" name="Bank_name" id="Bank_name_input" required="required"><span style="color:blue;">
                       ธนาคารกรุงเทพ สาขาบิ๊กซี อยุธยา
                       ชื่อบัญชี มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน
                       บัญชีเลขที่ 790-020373-3</span></label><br><br>

                     <label><input type="radio" value="กรุงไทย สาขามหาวิทยาลัยเกษตรศาสตร์ บางเขน มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน บัญชีเลขที่ 986-4-399968-3" name="Bank_name"><span style="color:#AEB404;">
                       ธนาคารกรุงไทย สาขามหาวิทยาลัยเกษตรศาสตร์ บางเขน
                       ชื่อบัญชี มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน
                       บัญชีเลขที่ 986-4-399968-3</span></label>
                   </div>
                   <input type="hidden" class="form-control" name="pay_status" value="wait"/>
                  รหัสใบเรียกเก็บเงิน  <input type="text" class="form-control" name="order_number" value="{{rand(0,190000)}}"/>
                  รหัสใบสั่งซื้อ <input type="text" class="form-control" name="ordering_id" value="{{rand(200000,380000)}}"/>

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
