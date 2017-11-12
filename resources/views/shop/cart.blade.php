@extends('shop.layouts.main')
@section('content')
    <div class="row">
       {{--  @include('shop.components.categoryMenu', ['categories' => $categories])  --}}
    </div>

    <div class="row mt-3 ft">
        <div class="col-md-12">
            <div class="card shop-listing">
                <div class="card-header">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">ตะกร้า สินค้า</a></li>
                    </ol>
                </div>
                <div class="card-block row shop-item-listing">
                    @if (session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif

                    @if (session()->has('error_message'))
                        <div class="alert alert-danger">
                            {{ session()->get('error_message') }}
                        </div>
                    @endif
                    @if (sizeof(Cart::content()) > 0)

                        <table class="table">
                            <thead>
                                <tr>

                                    <th><center>สินค้า</center></th>
                                    <th><center>จำนวน</center></th>

                                    <th><center>ราคา</center></th>
                                    <th class="column-spacer"></th>

                                </tr>
                            </thead>
@php($n=0)
                            <tbody>
                                @foreach (Cart::content() as $item)
                                <tr>

                                    <td><center><a href="{{ url('productDetail',array($item->id))}}">{{ $item->name }}</a></center></td>
                                    <td><center>
                                        <select class="quantity" data-id="{{ $item->rowId }}">
                                            <option {{ $item->qty == 1 ? 'selected' : '' }}>1 @php($i=1)</option>
                                            <option {{ $item->qty == 2 ? 'selected' : '' }}>2 @php($i=2)</option>
                                            <option {{ $item->qty == 3 ? 'selected' : '' }}>3 @php($i=3)</option>
                                            <option {{ $item->qty == 4 ? 'selected' : '' }}>4 @php($i=4)</option>
                                            <option {{ $item->qty == 5 ? 'selected' : '' }}>5 @php($i=5)</option>
                                        </select>

                                        @foreach($products as $p)
                                          @if($item->id==$p->product_id)
                                            @if(($p->number_product-$item->qty)>=0)
                                          &nbsp;   &nbsp;   &nbsp;  &nbsp; มีทั้งหมด  {{$p->number_product}} ชิ้น</center>
                                          @else
                                          &nbsp;   &nbsp;  &nbsp;    &nbsp; สินค้าหมดแล้ว มี 0 ชิ้น @php($n=1)</center>
                                          @endif
                                        @endif
                                       @endforeach
                                    </td>

                                    <td><center>฿{{ $item->subtotal }}</center></td>

                                    <td>
                                        <form action="{{ url('webshop/cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="submit" class="btn btn-danger bu "  value="ลบ">
                                        </form>
                                    </td>
                                </tr>

                                @endforeach
                                <tr>

                                    <td></td>
                                    <td class="small-caps table-bg" style="text-align: right">รวม</td>
                                    <td> <span style="color:green;">฿ {{ Cart::instance('default')->subtotal() }}</span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="table-image"></td>
                                    <td></td>
                                    <td class="small-caps table-bg" style="text-align: right">ค่าจัดส่งฟรี</td>
                                    <td>฿{{ Cart::instance('default')->tax() }}</td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr class="border-bottom">
                                    <td class="table-image"></td>
                                    <td style="padding: 40px;"></td>
                                    <td class="small-caps table-bg" style="text-align: right">ยอดรวมทั้งหมด</td>
                                    <td class="table-bg"><span style="color:green;">฿{{ Cart::total() }}</span></td>
                                    <td class="column-spacer"></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
 &nbsp;
                        <a href="{{ url('/webshop') }}" class="btn btn-primary btn-lg">กลับไปดูรายการสินค้า</a> &nbsp; &nbsp;
                        @if($n==1)
                          สินค้ามีไม่เพียงพอตามที่คุณลูกค้าต้องการ กรุณาลดจำนวนลงค่ะ
                        @else
                        <a href="{{ url('/webshop/checkout') }}" class="btn btn-success btn-lg">ทำการสั่งซื้อ</a>
                         &nbsp; &nbsp;
                      @endif
                        <div style="float:right">
                            <form action="{{ url('/webshop/emptyCart') }}" method="POST">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger btn-lg" value="ล้างตะกร้า">
                            </form>
                        </div>

                    @else

                        <h3>ตะกร้าว่างเปล่า</h3>
                        <a href="{{ url('/webshop') }}" class="btn btn-primary btn-lg">กลับไปดูรายการสินค้า</a>

                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

@section('embled_script')
<script>
    (function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.quantity').on('change', function() {
            const id = $(this).attr('data-id')
            $.ajax({
                type: "PATCH",
                url: '{{ url("webshop/cart") }}' + '/' + id,
                data: {
                    'quantity': this.value,
                },
                success: function(data) {
                    window.location.href = "{{ url('webshop/cart') }}";
                }
            });
        });
    })();
</script>
@endsection
