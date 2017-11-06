<div class="container">
  <div class="row">
    @foreach ($transferMoney as $t)
   @if(Auth::user()->id==$t->join_Ordering->customer_id&&$t->join_Ordering->pay_status!='paid')
       <div class="container">
         <div class="row" style="border:solid 1px;border-color:gray;">
           <div class="col-md-3"></div>
           <div class="col-md-6">
               <h1 class="display-4" style="text-align:center; color:#424242; ">แจ้งชำระเงิน ใบสั่งซื้อหมายเลข {{$t->join_Ordering->ordering_id}}</h1>
               <form name="updateSlip2" action="/updateSlip2/{{$t->order_number}}" class="form" method="post" enctype="multipart/form-data">
                   {{ Form::token() }}

                   <div class="form-group" id="div3">
                       <label for="dateTimeOfTransfer" class="form-label h3">ชำระวันที่และเวลา</label>
                       <input type="datetime-local" class="form-control" name="dateTimeOfTransfer" required/>

                   </div>

                   <div class="form-group" id="slip">
                       <label for="picture_slip" class="form-label h3">รูปภาพหลักฐานการโอน</label><br>
                       <input type="file"  name="picture_slip"  required/ >
                   </div>

                   <input type="hidden" class="form-control" name=" order_number"  value="{{$t->order_number}}"/>
                  <input type="hidden" class="form-control" name="checking_status"  value="กำลังตรวจสอบหลักฐาน"/>
                 </tr>

                 <div class="text-center">
                     <button class="btn btn-success" onclick="return confirm('แน่ใจว่าข้อมูลถูกต้อง  หากมีข้อผิดพลาดทางเราจะติดต่อกลับไปค่ะ')">ส่งหลักฐานการโอน</button>
                 </div>
                 <br><br>
               </form>
<br>
           </div>
       </div>
       </div>
@else
@endif
  @endforeach
  </div>
  </div>
