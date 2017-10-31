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
                 @if($o->pay_status='wait' && $o->join_TransferMoney->picture_slip==null)
                     @include('shop.components.tableListDisabled')
                     @include('shop.components.updateSlip')

                   @elseif($o->pay_status='wait' && $o->join_TransferMoney->picture_slip!=null)


                  <!--แถบสถานะ-->
                 @include('shop.components.status')
                  <!--แถบสถานะ-->


                   @else
                        @include('shop.components.order')
                   @endif
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
