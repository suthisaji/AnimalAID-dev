@extends('shop.layouts.main')
@section('content')
    <div class="row">
       {{--  @include('shop.components.categoryMenu', ['categories' => $categories])  --}}
    </div>
    <div class="row">
        @include('shop.components.search')
    </div>


          @foreach($ordering as $o)

            @if($o->customer_id == Auth::user()->id)
                    @if($o->pay_status=='wait' && $o->join_TransferMoney->picture_slip==null)
                          @include('shop.components.tableListDisabled')
                          @include('shop.components.updateSlip')

                    @elseif($o->pay_status=='wait' && $o->join_TransferMoney->picture_slip!=null)

                               @include('shop.components.tableListDisabled')

                  <!--แถบสถานะ-->
                                @include('shop.components.status')

                  <!--แถบสถานะ-->
                                    @if($o->join_Shipping->package_id!=null)
                                      @else
                                       <h4 style="color:blue;">โปรดรอการตรวจสอบการสั่งสินค้าครั้งเก่าก่อน</h4>
                                    @endif
                    @elseif($o->pay_status=='paid' && $o->join_TransferMoney->picture_slip!=null)
                               @if((DB::table('orderings')->where('pay_status','wait')->count()==0 ))
                              @include('shop.components.order')
                              @include('shop.components.status')
                            @endif



                      @else
                        @include('shop.components.status')
                    @endif

            @endif


          @endforeach


     @if(DB::table('orderings')->count()==0)
         @include('shop.components.order')
     @endif










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
