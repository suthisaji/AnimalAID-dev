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
                                    <th class="table-image"></th>
                                    <th>Product</th>
                                    <th>Quantity</th>

                                    <th>Price</th>
                                    <th class="column-spacer"></th>
                                    <th></th>
                                </tr>
                            </thead>
@php($n=0)
                            <tbody>
                                @foreach (Cart::content() as $item)
                                <tr>

                                    <td><a href="{{ url('webshop', [$item->model->slug]) }}">{{ $item->name }}</a></td>
                                    <td>
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
                                            มีทั้งหมด  {{$p->number_product}} ชิ้น
                                          @else
                                            สินค้าหมดแล้ว มี 0 ชิ้น @php($n=1)
                                          @endif
                                        @endif
                                       @endforeach
                                    </td>

                                    <td>${{ $item->subtotal }}</td>
                                    <td class=""></td>
                                    <td>
                                        <form action="{{ url('webshop/cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                                        </form>
                                    </td>
                                </tr>

                                @endforeach
                                <tr>
                                
                                    <td></td>
                                    <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
                                    <td>${{ Cart::instance('default')->subtotal() }}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="table-image"></td>
                                    <td></td>
                                    <td class="small-caps table-bg" style="text-align: right">Tax</td>
                                    <td>${{ Cart::instance('default')->tax() }}</td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr class="border-bottom">
                                    <td class="table-image"></td>
                                    <td style="padding: 40px;"></td>
                                    <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                                    <td class="table-bg">${{ Cart::total() }}</td>
                                    <td class="column-spacer"></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>

                        <a href="{{ url('/webshop') }}" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;
                        @if($n==1)
                          สินค้ามีไม่เพียงพอตามที่คุณลูกค้าต้องการ กรุณาลดจำนวนลงค่ะ
                        @else
                        <a href="{{ url('/webshop/checkout') }}" class="btn btn-success btn-lg">Proceed to Checkout</a>
                      @endif
                        <div style="float:right">
                            <form action="{{ url('/webshop/emptyCart') }}" method="POST">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">
                            </form>
                        </div>

                    @else

                        <h3>You have no items in your shopping cart</h3>
                        <a href="{{ url('/webshop') }}" class="btn btn-primary btn-lg">Continue Shopping</a>

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
