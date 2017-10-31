<div class="bgc panel-heading">
  <br>
<center ><h2 id="div3"style="color:orange;background-color:lightyellow">คุณได้ส่งหลักฐานยืนยันแล้ว <small>รอการตรวจสอบ</small> </h2></center>
<br>
</div>

<!--แถบสถานะ-->   <div class="container">
<br>
<div class="panel-heading">
<center><h3><b>สถานะการจัดส่งสินค้า<b></h3></center>
</div>
<div class="panel-heading">
<table class="table table-striped">
 <thead>
   <tr>
     <th><center>รหัสใบสั่งซื้อ</center></th>
     <th><center>เลขพัสดุ</center></th>
     <th id="div4"><center>สถานะ</center></th>
   </tr>
 </thead>
@foreach($shipping as $s)
 <tbody>
   @if($s->buyer_id==Auth::user()->id)
       <td><center>{{$s->ordering_id}}</center></td>
   <td><center>{{$s->package_id}}</center></td>
   <td><center>@if($s->shipping_status=='กำลังตรวจสอบ') กำลังเตรียมการจัดส่ง
   @else {{$s->shipping_status}}
   @endif</center></td>
<!-- ดึงข้อมูลจากดาต้าเบส -->
@endif
 </tbody>
@endforeach
</table>
</div>
</div>
<!--แถบสถานะ-->
