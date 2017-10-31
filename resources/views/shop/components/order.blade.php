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
                   <form name="createOrdering" action="/createOrdering/{{ Auth::user()->id}}" class="form" method="post" enctype="multipart/form-data" onsubmit="return validation()">{{ Form::token() }}
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
                   <td>${{ $item->subtotal }}</td> <!--ราคา item-->
             <!--product_id--><input type="hidden" class="form-control" name="product_id" value="{{$item->id}}"/>
             <input type="hidden" class="form-control" name="amount" value="{{ $item->subtotal}}"/>
</table>
            @endforeach

            <div class="card-block row shop-item-listing">
                ราคารวม {{ Cart::total() }}<br>
              </div>
                กรุณากรอกที่อยู่เพื่อรับของ
                <div class="card-block row shop-item-listing">

                 <input type="text" id="home" name="home" placeholder="บ้านเลขที่ และ หมู่บ้าน">
                <input type="text" id="district" name="district" placeholder="ตำบล">
                <input type="text" id="amphoe" name="amphoe" placeholder="อำเภอ">
                <input type="text" id="province" name="province" placeholder="จังหวัด">
               <input type="text" id="zipcode" name="zipcode" placeholder="รหัสไปรษณี">

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
            <!--  รหัสใบเรียกเก็บเงิน -->  <input type="hidden" class="form-control" name="order_number" value="{{rand(0,190000)}}"/>
            <!--  รหัสใบสั่งซื้อ-->       <input type="hidden" class="form-control" name="ordering_id" value="{{rand(200000,380000)}}"/>
                 <!--  customer_id--> <input type="hidden" class="form-control" name="id" value="{{ Auth::user()->id }}"/>
                 <!--amountOfTransfer-->        <input type="hidden" class="form-control" name="amountOfTransfer" value="{{ Cart::total() }}"/>



                <button type="submit" class="btn btn-success btn-lg" onclick="return confirm('ยืนยันการสั่งซื้อสินค้า')">ยืนยันการสั่งซื้อ</button>

          </form>
            </div>
        </div>
    </div>
</div>
