<br>
<div style="background-color:#f9e3e7;color:#c35b6b;font-size:18px;"><br><center><b>การสั่งซื้อล่าสุด<b></center><b><br></div>
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

            @if( $item->qty == 1 ? 'selected' : '' )    <input type="text" disabled  value="{{$item->qty}}"/><input type="hidden" name="product_number"  value="{{$item->qty}}"/>
            @elseif( $item->qty == 2 ? 'selected' : '' )    <input type="text"disabled value="{{$item->qty}}"/><input type="hidden" name="product_number"  value="{{$item->qty}}"/>
            @elseif( $item->qty == 3 ? 'selected' : '' )    <input type="text" disabled value="{{$item->qty}}"/><input type="hidden" name="product_number"  value="{{$item->qty}}"/>
            @elseif( $item->qty == 4 ? 'selected' : '' )    <input type="text"disabled value="{{$item->qty}}"/><input type="hidden" name="product_number"  value="{{$item->qty}}"/>
            @elseif( $item->qty == 5 ? 'selected' : '' )    <input type="text" disabled  value="{{$item->qty}}"/><input type="hidden" name="product_number"  value="{{$item->qty}}"/>

             @endif
           </select>
       </td>
       <td><h5>${{ $item->subtotal }}</h5></td> <!--ราคา item-->

 </tbody>
 @endforeach
</table>
