<style>

</style>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card shop-listing">
            <div class="card-header">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">ยืนยันการสั่งซื้อ ของคุณ {{Auth::user()->name}}</a></li>
                </ol>

            </div>
            <form id="send_form">
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

                        @if( $item->qty == 1 ? 'selected' : '' )    <input type="text" disabled  value="{{$item->qty}}"/>
                        @elseif( $item->qty == 2 ? 'selected' : '' )    <input type="text"disabled value="{{$item->qty}}"/>
                        @elseif( $item->qty == 3 ? 'selected' : '' )    <input type="text" disabled value="{{$item->qty}}"/>
                        @elseif( $item->qty == 4 ? 'selected' : '' )    <input type="text"disabled value="{{$item->qty}}"/>
                        @elseif( $item->qty == 5 ? 'selected' : '' )    <input type="text" disabled  value="{{$item->qty}}"/>
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

                 <input type="text" id="home" name="home" placeholder="บ้านเลขที่ และ หมู่บ้าน" required/>
                <input type="text" id="district" name="district" placeholder="ตำบล" required/>
                <input type="text" id="amphoe" name="amphoe" placeholder="อำเภอ" required/>
                <input type="text" id="province" name="province" placeholder="จังหวัด" required/>
               <input type="text" id="zipcode" name="zipcode" placeholder="รหัสไปรษณี" required/>

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






                <button type="submit" class="btn btn-success btn-lg">ยืนยันการสั่งซื้อ</button>
              </form>

            <!--end popup-->

          {{-- </form> --}}
            </div>
        </div>
    </div>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script>
$('#send_form').submit(function(){
  swal({
 title: "แน่ใจว่าจะสั่งซื้อ?",
 text: "าา!",
 type: "warning",
 showCancelButton: true,
 confirmButtonClass: "btn-danger",
 confirmButtonText: "ใช่ สั่งซื้อ",
 closeOnConfirm: true
},
function(){
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
    //  number_product: $('#number_product').value,
    //  product_id: $('#product_id')[0].value,
  //    product_number: $('#product_number')[0].value,
  //    amount: $('#amount')[0].value,
      Bank_name: $('#Bank_name')[0].value,
      order_number: $('#order_number')[0].value,
      amountOfTransfer: $('#amountOfTransfer')[0].value,
     //minus_product: $('#minus_product')[0].value,
      _token:$('#token')[0].value
    },success: function(data){
      // alert('สั่งซื้อสำเร็จ แจ้งหลักฐานการโอนต่อไป');
      swal("Good job!", "You clicked the button!", "success")
      window.location.reload();
     }
   });
});
   return false;
   });
</script>
