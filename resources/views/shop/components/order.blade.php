<style>
/*pop up*/
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400);

.b, .bb {
position: absolute;
width: 100%;
height: 100%;
background-attachment: fixed;
background-size: cover;
background-position: center;
}

.bb {
background:#e6fff2;
opacity: .4;
background-attachment: fixed;
background-size: cover;
background-position: center;
display: none;
top: 5px;
right: 0px;
background: darkgray;
}


#send:hover {
background: #8ecf68;
}
#send:active {
background: #5a9f32;
}

.message {
position: absolute;
top: -200px;
left: 50%;
transform: translate(-50%, 0%);
width: 300px;
background: white;
border-radius: 8px;
padding: 30px;
text-align: center;
font-weight: 300;
color: #2c2928;
opacity: 0;
transition: top 0.3s cubic-bezier(0.31, 0.25, 0.5, 1.5), opacity 0.2s ease-in-out;
}
.message .check {
position: absolute;
top: 0;
left: 50%;
transform: translate(-50%, -50%) scale(4);
width: 120px;
height: 110px;
background: #71c341;
color: white;
font-size: 3.8rem;
padding-top: 10px;
border-radius: 50%;
opacity: 0;
transition: transform 0.2s 0.25s cubic-bezier(0.31, 0.25, 0.5, 1.5), opacity 0.1s 0.25s ease-in-out;
}
.message .scaledown {
transform: translate(-50%, -50%) scale(1);
opacity: 1;
}
.message p {
font-size: 1.8rem;
margin: 25px 0px;
padding: 0;
}
.message p:nth-child(2) {
font-size: 2.3rem;
margin: 40px 0px 0px 0px;
}
.message #ok {
position: relative;
color: white;
border: 0;
background: #71c341;
width: 100%;
height: 50px;
border-radius: 6px;
font-size: 2rem;
transition: background 0.2s ease;
outline: none;
}
.message #ok:hover {
background: #8ecf68;
}
.message #ok:active {
background: #5a9f32;
}

.comein {
top: 150px;
opacity: 1;
}

label > span, #error_summernote{
color: red;
font-weight: bold;
}

/*end popup*/
</style>
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
{{--       ไม่เอาแล้ว เพราะส่งไปกับ json แล้ว  <form name="createOrdering" action="/createOrdering/{{ Auth::user()->id}}" class="form" method="post" enctype="multipart/form-data" onsubmit="return validation()">{{ Form::token() }} --}}
                  @foreach (Cart::content() as $item)
                <tbody>
<input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

                  <td>{{$item->id}}</td>
                  <td><a href="{{ url('webshop', [$item->model->slug]) }}">{{ $item->name }}</a></td>
                   <td>

                        @if( $item->qty == 1 ? 'selected' : '' )    <input type="text" disabled  value="{{$item->qty}}"/><input class="form-control" type="hidden" name="product_number" id="product_number"  value="{{$item->qty}}"/>
                           @foreach($product as $p)
                             @if($item->id==$p->product_id)
                            <input type="hidden" name="number_product" id="number_product"value="{{$p->number_product}}"> <input type="hidden" name="minus_product"  id="minus_product"value="{{($p->number_product)-($item->qty)}}"  >
                            @endif
                           @endforeach
                        @elseif( $item->qty == 2 ? 'selected' : '' )    <input type="text"disabled value="{{$item->qty}}"/><input class="form-control" type="hidden" name="product_number" id="product_number"  value="{{$item->qty}}"/>
                          @foreach($product as $p)
                            @if($item->id==$p->product_id)
                           <input type="hidden" name="number_product"  id="number_product"value="{{$p->number_product}}"><input type="hidden" name="minus_product"  id="minus_product"value="{{($p->number_product)-($item->qty)}}"  >
                           @endif
                          @endforeach
                        @elseif( $item->qty == 3 ? 'selected' : '' )    <input type="text" disabled value="{{$item->qty}}"/><input class="form-control" type="hidden" name="product_number" id="product_number"  value="{{$item->qty}}"/>
                          @foreach($product as $p)
                            @if($item->id==$p->product_id)
                           <input type="hidden" name="number_product"  id="number_product"value="{{$p->number_product}}"><input type="hidden" name="minus_product"  id="minus_product"value="{{($p->number_product)-($item->qty)}}"  >
                           @endif
                          @endforeach
                        @elseif( $item->qty == 4 ? 'selected' : '' )    <input type="text"disabled value="{{$item->qty}}"/><input class="form-control" type="hidden" name="product_number"  id="product_number" value="{{$item->qty}}"/>
                          @foreach($product as $p)
                            @if($item->id==$p->product_id)
                           <input type="hidden" name="number_product"  id="number_product"value="{{$p->number_product}}"><input type="hidden" name="minus_product"  id="minus_product"value="{{($p->number_product)-($item->qty)}}"  >
                           @endif
                          @endforeach
                        @elseif( $item->qty == 5 ? 'selected' : '' )    <input type="text" disabled  value="{{$item->qty}}"/><input class="form-control" type="hidden" name="product_number" id="product_number"  value="{{$item->qty}}"/>
                          @foreach($product as $p)
                            @if($item->id==$p->product_id)
                           <input type="hidden" name="number_product"  id="number_product"value="{{$p->number_product}}"  ><input type="hidden" name="minus_product"  id="minus_product"value="{{($p->number_product)-($item->qty)}}"  >
                           @endif
                          @endforeach

                           @endif
                         </select>
                             </td>
                           <td>{{ $item->subtotal }} บาท</td> <!--ราคา item-->
               <!--product_id--><input type="hidden" class="form-control" name="product_id" value="{{$item->id}}" id="product_id"/>
                       <input type="hidden" class="form-control" name="amount" id="amount" value="{{ $item->subtotal}}"/>
                     </tbody>
                         @endforeach
                  </table>


            <div class="card-block row shop-item-listing">
                ราคารวม &nbsp; <h3>{{ Cart::total() }}</h3> บาท<br>
              </div>
                กรุณากรอกที่อยู่เพื่อรับของ
                <div class="card-block row shop-item-listing">

                 <input type="text" id="home" name="home" placeholder="บ้านเลขที่ และ หมู่บ้าน"/>
                <input type="text" id="district" name="district" placeholder="ตำบล"/>
                <input type="text" id="amphoe" name="amphoe" placeholder="อำเภอ"/>
                <input type="text" id="province" name="province" placeholder="จังหวัด"/>
               <input type="text" id="zipcode" name="zipcode" placeholder="รหัสไปรษณี"/>

               <div class="form-group">
                 <label for="Bank_name" class="form-label">ธนาคาร</label><br>
                 <label><input type="radio" value="กรุงเทพ สาขาบิ๊กซี อยุธยา มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน บัญชีเลขที่ 790-020373-3" name="Bank_name" id="Bank_name"required="required"><span style="color:blue;">
                   ธนาคารกรุงเทพ สาขาบิ๊กซี อยุธยา
                   ชื่อบัญชี มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน
                   บัญชีเลขที่ 790-020373-3</span></label><br><br>

                 <label><input type="radio" value="กรุงไทย สาขามหาวิทยาลัยเกษตรศาสตร์ บางเขน มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน บัญชีเลขที่ 986-4-399968-3" name="Bank_name" id="Bank_name"><span style="color:#AEB404;">
                   ธนาคารกรุงไทย สาขามหาวิทยาลัยเกษตรศาสตร์ บางเขน
                   ชื่อบัญชี มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน
                   บัญชีเลขที่ 986-4-399968-3</span></label>
               </div>
               <input type="hidden" class="form-control" name="pay_status" id="pay_status"value="wait"/>
            <!--  รหัสใบเรียกเก็บเงิน -->  <input type="hidden" class="form-control" name="order_number" id="order_number" value="{{rand(0,190000)}}"/>
            <!--  รหัสใบสั่งซื้อ-->       <input type="hidden" class="form-control" name="ordering_id" id="ordering_id" value="{{rand(200000,380000)}}"/>
                 <!--  customer_id--> <input type="hidden" class="form-control" name="id" id="userId" value="{{ Auth::user()->id }}"/>
                 <!--amountOfTransfer--><input type="hidden" class="form-control" name="amountOfTransfer" id="amountOfTransfer" value="{{ Cart::total() }}"/>
                                   <input type="hidden" class="form-control" name="id" id="id" value="{{ Auth::user()->id }}"/>



                                   <div class='bb'></div>
                                   <div class="form-group">

                <button type="submit" id="send" class="btn btn-success btn-lg" onclick="return confirm('ยืนยันการสั่งซื้อสินค้า')">ยืนยันการสั่งซื้อ</button>
              </div>
              <div class='message'>
              <div class='check'>
                &#10004;
              </div>
              <p>
                ตั้งกระทู้คำถาม
              </p>
              <p>
                เรียบร้อย
              </p>
              <button id='ok'>
                ตกลง
              </button>
            </div>
            <!--end popup-->

              </div>
          {{-- </form> --}}
            </div>
        </div>
    </div>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script>
$('#send').click(function(){
$.ajax({
  type: 'POST',
  url: "/createOrdering/"+$('#userId')[0].value,
  datatype: 'json',
  data: {
    district: $('#district')[0].value,
    amphoe: $('#amphoe')[0].value,
    province: $('#province')[0].value,
    zipcode: $('#zipcode')[0].value,

    id: $('#id')[0].value,
    ordering_id: $('#ordering_id')[0].value,
    pay_status: $('#pay_status')[0].value,
    home: $('#home')[0].value,

    number_product: $('#number_product').value,

    product_id: $('#product_id')[0].value,
    product_number: $('#product_number')[0].value,
    amount: $('#amount')[0].value,

    Bank_name: $('#Bank_name')[0].value,
    order_number: $('#order_number')[0].value,
    amountOfTransfer: $('#amountOfTransfer')[0].value,


   minus_product: $('#minus_product')[0].value,

    _token:$('#token')[0].value


  },success: function(data){
    alert('สั่งซื้อสำเร็จ แจ้งหลักฐานการโอนต่อไป');
    window.location.reload();

   }
   })

   });



</script>
