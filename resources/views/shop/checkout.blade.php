@extends('shop.layouts.main')
@section('content')
    <div class="row">
       {{--  @include('shop.components.categoryMenu', ['categories' => $categories])  --}}
    </div>
    <div class="row">
        @include('shop.components.search')
    </div>
    @foreach($ordering as $or)
    @if(((Auth::user()->id)==($or->customer_id))&&($or->pay_status!='paid'))
      @if($or->pay_status=='wait')
        @include('shop.components.tableList')
           กรุณาแจ้งหลักฐานการโอนของ การสั่งสินค้าเก่า ก่อนสั่งใหม่ค่ะ
        @include('shop.components.updateSlip')
      @else
        @include('shop.components.tableList')
        กรุณารอการตรวจสอบการสั่งสินค้าก่อนหน้า ก่อนสั่งใหม่ ค่ะ ถ้าหลักฐานถูกต้อง จะทำการจัดส่งสินค้าค่ะ และจะสามารถสั่งใหม่ได้
      @endif
    @elseif(((Auth::user()->id)!=($or->customer_id))||(Auth::user()->id==$or->customer_id)&&($or->pay_status=='paid'))
      @include('shop.components.order')

    @endif
@endforeach






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
