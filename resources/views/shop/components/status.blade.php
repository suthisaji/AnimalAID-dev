
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
       <td><center><!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg1" data-toggle="modal" data-target="#myModal">{{$s->ordering_id}}</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">รายละเอียดพัสดุ</h4>
              </div>
              <div class="modal-body">
                <div class="panel-heading">
                  <table class="table table-striped">

                    <thead><th><center>รหัสสินค้า</center></th> <th><center>  ชื่อสินค้า</center> </th><th> <center> จำนวน </center></th><thead>
               @foreach($ordering_product as $op)

               <tbody> <td><center> {{$op->product_id}}</center></td><br>
                       <td><center>{{$op->join_Product->product_name}}</center</td><br>
                       <td> <center>{{$op->product_number}}</center ></td></tbody>

              @endforeach
              </table>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div></center></td>
   <td><center>{{$s->package_id}}</center></td>
   <td><center>@if($s->shipping_status=='กำลังตรวจสอบ') กำลังเตรียมการจัดส่ง
   @else @if($s->shipping_status=='cancel')ถูกยกเลิก
   @else
     {{$s->shipping_status}}
@endif
   @endif</center></td>
<!-- ดึงข้อมูลจากดาต้าเบส -->
@endif
 </tbody>
@endforeach
</table>
</div>
</div>
<!--แถบสถานะ-->

</div>
