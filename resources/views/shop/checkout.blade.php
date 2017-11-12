@extends('shop.layouts.main')
@section('content')

    <div class="row">
       {{--  @include('shop.components.categoryMenu', ['categories' => $categories])  --}}
    </div>

<div class="container">

       @foreach($ordering as $o)

                 @if(Auth::user()->id==$o->customer_id){{-- ถ้า  Auth เท่ากับ ผู้ซื้อ--}}

                        @if(DB::table('orderings')->where('pay_status','wait')->count()>0)
                               @if($o->join_TransferMoney->picture_slip==null)

                                     @include('shop.components.updateSlip') <br>
                                       <center>    <a href="/deleteOrder/{{ $o->ordering_id }}/{{$o->order_number}}" class="btn btn-danger bu btn-delete " onclick="return confirm('ยกเลิกการสั่งสินค้า !!!')">ยกเลิกการสั่งซื้อนี้</a></center>
                                     @include('shop.components.status')
                                     <br>

                              <br>
                               @elseif($o->join_TransferMoney->picture_slip!=null&&$o->pay_status!='paid'&&$o->join_TransferMoney->checking_status=='กำลังตรวจสอบหลักฐาน')
                                 <br><br>
                                    <h2 style="color:red;">รอการตรวจสอบหลักฐานการโอน การสั่งซื้อล่าสุด</h2>
                                    @include('shop.components.tableListDisabled')
                                      @include('shop.components.khun')
                                    @include('shop.components.status')
                               @elseif($o->join_TransferMoney->picture_slip!=null&&$o->pay_status!='paid'&&$o->join_TransferMoney->checking_status=='noConfirm')
                                <h2 style="color:red;"> หลักฐานที่แจ้งไม่ถูกต้อง</h2>
                                <h3> แจ้งใหม่ หรือ ยกเลิกการสั่งซื้อ </h3>   <a href="/deleteOrder/{{ $o->ordering_id }}/{{$o->order_number}}" class="btn btn-danger btn-sm btn-delete " onclick="return confirm('ยกเลิกการสั่งสินค้า !!!')">ยกเลิกการสั่ง</a>
                                  @include('shop.components.updateSlip')
                               @endif
                        @else

                        @endif
                  @endif












        @endforeach

        @if((DB::table('orderings')->where('customer_id','=',Auth::user()->id)->count()==0)&& Cart::total()!=0 )
            @include('shop.components.order')

        @elseif((DB::table('orderings')->where('customer_id','=',Auth::user()->id)->count()==0)&& Cart::total()==0 )
        <br>  <h2 style="color:orange;">ยังไม่มีการสั่งซื้อ</h2>
        @endif



       @if((DB::table('orderings')->where('customer_id','=',Auth::user()->id)->count())==(DB::table('orderings')->where('pay_status','paid')->count())&&(DB::table('orderings')->where('pay_status','paid')->count()>0)&& Cart::total()!=0 )
        @include('shop.components.status')
        @include('shop.components.order')
      @endif
      @if((DB::table('orderings')->where('customer_id','=',Auth::user()->id)->count())==(DB::table('orderings')->where('pay_status','paid')->count())&& Cart::total()==0 )
       @include('shop.components.status')

     @endif
@endsection


























</div>


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
