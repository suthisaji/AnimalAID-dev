<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <script src="https://cdn.omise.co/card.js" charset="utf-9"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Transfer checking</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" link href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" link href="{{url('css/bootstrap.min.css')}}">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('/css/shop-homepage.css')}}"/>


    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="https://blackrockdigital.github.io/startbootstrap-shop-homepage/js/bootstrap.min.js"></script> -->

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    {{Html::style('css/shop-homepage.css')}}

    <style type="text/css">
      li{
        font-size: 15px;
      }
      body{
        font-size: 16px;
      }
      .fl{
        font-size: 16px;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"  style="font-size:20px;" href="all">Animals A-I-D </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="../animal">รายชื่อสัตว์</a></li>
            <li><a href="../addNews">เพิ่มข่าว&กิจกรรม</a></li>
            <li><a href="../checkAdoption">ตรวจสอบการขอรับเลี้ยง: <span style="color:#FFFF00">{{DB::table('adoptions')->join('animals', 'adoptions.animal_id', '=', 'animals.animal_id')
            ->where('animals.admin_id','=', Auth::user()->id)
            ->where('adoptions.status', '=','Recipient')
          ->count()}} </span></a></li>
            <li><a href="../admin">ตอบปัญหา: <span style="color:#FFFF00">{{DB::table('blogs')->where('status','answered')->count()}}</span>/{{DB::table('blogs')->count()}}</a></li>
            <li><a href="../addProductPage">เพิ่มสินค้า</a></li>
            <li><a href="../shippings">ใบจัดส่งสินค้า:<span style="color:#FFFF00">{{DB::table('shippings')->where('shipping_status', '=','กำลังตรวจสอบ')->count()}}</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ตรวจสอบสลิป<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="transferDocument">สลิปสั่งสินค้า: <span style="color:red">{{DB::table('transferMoneys')->where('checking_status', '=','wait')->orWhere('checking_status', '=','กำลังตรวจสอบหลักฐาน')->count()}}</span></a></li>
                <li><a href="adminCheckSlip">สลิปการบริจาคเงิน: <span style="color:red">{{DB::table('userUpdateSlips')->where('status_check_yet', '=','NotCheck')->count()}}</a>
                  <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">{{csrf_field()}}</form></li>
              </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <!-- Left Side Of Navbar -->

          <!-- Right Side Of Navbar -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="../adminProfile">ข้อมูลส่วนตัว</a></li>
              <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ออกจากระบบ</a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">{{csrf_field()}}</form></li>
            </ul>
        </ul>
    </div>
   </div>
  </nav>
   <div class="container">

<div class="panel-heading">
   <center><h3><b>แอดมินตรวจสอบหลักฐานการโอนเงิน</b></h3></center>
</div>
      <div class="panel-body">
          <table class="table table-striped">
               <thead>
                 <tr>
                   <th><center>Order No.</center></th>
                   <th><center>ผู้สั่งซื้อ</center></th>
                    <th><center>E-mail</center></th>
                   <th><center>วันเวลาที่โอน</center></th>
                   <th><center>ชื่อธนาคาร</center></th>
                   <th><center>สาขา</center></th>
                   <th><center>จำนวนเงินที่ต้องโอน฿</center></th>
                   <th><center>ภาพสลิป</center></th>
                   <th><center>อัพหลักฐานเมื่อ</center></th>
                   <th><center>สถานะ</center></th>
                    <th></th>

                 </tr>
               </thead>
                @foreach ($transferMoney as $t)
               <tbody>


                   <tr>
                     <td>{{$t->order_number}}</td>
                     <td>{{$t->join_Ordering->join_User->name}}</td>
                      <td>{{$t->join_Ordering->join_User->email}}</td>
                     <td>{{$t->dateTimeOfTransfer}}</td>
                     <td>{{$t->Bank_name}}</td>
                     <td>{{$t->Bank_Branch}}</td>
                      <td>{{$t->amountOfTransfer}}</td>
                      <!-- ให้คุณดูตรง ปลายๆบรรทัดด้านล่างนี้ครับ ตรง zoomToggle น่ะ ตรงตัวเลข 2ตัวแรก คือขนาดของภาพก่อนที่จะ zoom (เลข 200px กับ 210px อ่ะ)  ส่วน 2 ตัวหลังเป็นขนาดของภาพขณะที่ zoom ครับ (เลข 300px กับ 320px อ่ะ)  -->


                     <td><img src="{{url('/images/'.$t->picture_slip)}}"  style="cursor:pointer;" alt="" width="130" height="130" onclick="zoomToggle('130px','100px','200%','140%',this); "></td>
                     <td>{{$t->created_at}}</td>
                 <td>
                   <form action="/confirm/{{$t->order_number}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
                     <input type="hidden"class="form-control" name="order_number"  value="{{$t->order_number}}" />
                     <input type="hidden" class="form-control" name="ordering_id" value="{{ $t->join_Ordering->ordering_id}}" readonly/>
                     <input type="hidden"class="form-control" name="buyer_id" value="{{$t->join_Ordering->customer_id}}" />
                     <input type="hidden"class="form-control" name="address"  value="{{$t->join_Ordering->home}}" />
                     <input type="hidden"class="form-control" name="tel"  value="{{$t->join_Ordering->join_User->tel}}"  />
                     <input type="hidden"class="form-control" name="email"  value="{{$t->join_Ordering->join_User->email}}" />



                                 <input type="hidden" class="form-control" name="checking_status" value="confirm"/>

                       <input type="hidden" class="form-control" name="pay_status" value="paid"/>


                  @if($t->checking_status=='wait'||$t->checking_status=='กำลังตรวจสอบหลักฐาน')
                                 <button class=" btn btn-sm btn-primary" onclick="return confirm('หลักฐานถูกต้อง ยืนยันการจัดส่งสินค้า')">ถูกต้องจัดส่งได้</button>
                 </form>
                <!--ยังไม่ทำ ถ้าไม่ถูกต้อง-->
                <form action="/noConfirm/{{$t->order_number}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
                <input type="hidden"class="form-control" name="order_number"  value="{{$t->order_number}}" />
                <input type="hidden" class="form-control" name="checking_status" value="noConfirm"/>
                  &nbsp;<button class="btn btn-sm btn-danger" onclick="return confirm('หลักฐานไม่ถูกต้อง')">หลักฐานไม่ถูกต้อง</button>
                </form>
              @elseif($t->checking_status=='noConfirm')
                  <b><span style="color:red">หลักฐานไม่ถูกต้อง กรุณาสอบถามผู้สั่ง รหัส:</span>{{$t->join_Ordering->customer_id}} :{{$t->join_Ordering->join_User->tel}} {{$t->join_Ordering->join_User->email}}</b>
                  <form action="/confirm/{{$t->order_number}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
                    <input type="hidden"class="form-control" name="order_number"  value="{{$t->order_number}}" />
                    <input type="hidden" class="form-control" name="ordering_id" value="{{ $t->join_Ordering->ordering_id}}" readonly/>
                    <input type="hidden"class="form-control" name="buyer_id" value="{{$t->join_Ordering->customer_id}}" />
                    <input type="hidden"class="form-control" name="address"  value="{{$t->join_Ordering->join_User->address}}" />
                    <input type="hidden"class="form-control" name="tel"  value="{{$t->join_Ordering->join_User->tel}}"  />
                    <input type="hidden"class="form-control" name="email"  value="{{$t->join_Ordering->join_User->email}}" />


                                <input type="hidden" class="form-control" name="checking_status" value="confirm"/>

                              <br><button class=" btn btn-sm btn-primary" onclick="return confirm('หลักฐานถูกต้อง ยืนยันการจัดส่งสินค้า')">ถูกต้องจัดส่งได้</button>
                </form>
                  <form action="/cancel/{{$t->order_number}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
                  <input type="hidden"class="form-control" name="order_number"  value="{{$t->order_number}}" />
                  <input type="hidden" class="form-control" name="checking_status" value="cancel"/>
                <br>  <button class="btn btn-sm btn-danger" onclick="return confirm('ต้องการยกเลิกการสั่งสินค้า')">ยกเลิกการสั่งสินค้า</button>
                  </form>

                @elseif($t->checking_status=='cancel')
                    <b>การสั่งสินค้านี้ ถูกยกเลิกแล้ว ordering ID:{{ $t->join_Ordering->ordering_id}}</b>
                  @elseif($t->checking_status=='confirm'&&($t->join_Ordering->join_Shipping->shipping_status==null||$t->join_Ordering->join_Shipping->shipping_status==''||$t->join_Ordering->join_Shipping->shipping_status=='กำลังตรวจสอบ'))
                  </form>
                    <b>กำลังทำการจัดส่ง</b>
                    <br>
                    <form action="/cancelShipping/{{$t->join_Ordering->join_Shipping->ordering_id}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
                     <input type="hidden" class="form-control" name="shipping_status" value="cancel"/>
                     <input type="hidden" class="form-control" name="ordering_id" value="{{$t->join_Ordering->ordering_id}}"/>
                    <button class="btn btn-sm btn-danger" onclick="return confirm('ยกเลิกการจัดส่งสินค้า')">แจ้งยกเลิกการจัดส่ง</button>
                  </form>
                @elseif($t->checking_status=='confirm'&&$t->join_Ordering->join_Shipping->shipping_status=='cancel')
                    <b style="color:red;">การจัดส่งถูกยกเลิก</b>
                  @elseif($t->join_Ordering->join_Shipping->shipping_status=='จัดส่งแล้ว')
                      <b style="color:blue;">การจัดส่งเรียบร้อยแล้ว</b>
                    <br>  เลขพัสด: {{$t->join_Ordering->join_Shipping->package_id}}
                  @endif

          {{-- จะให้ชิดขวาก้ได้ เพิ่มแท้ก   <p align="right"> นี้--}}<br>

                    </td>
                    <td>
                    @if($t->checking_status=='wait'||$t->checking_status=='กำลังตรวจสอบหลักฐาน')
                      <img src="/images/redc.jpg" style="width:7px;height:8px"> &nbsp;<span style="color:red;">ยังไม่ตรวจสอบ</span>
                    @endif



                    </td>
                    <?php     $now = new DateTime();
                        $now->add(new DateInterval('P1D'));
                        date_timezone_set($now, timezone_open('Asia/Bangkok'));
                        $now2= $now->format('d');

                          $i= $t->created_at->format('d')-$now2;
                          $outcome = abs($i);?>
                    @if(($t->picture_slip==null)&&($outcome>=4))
              <td> <a href="/deleteSlipTimeOut/{{ $t->join_Ordering->ordering_id }}/{{$t->order_number}}" class="btn btn-danger btn-sm btn-delete " onclick="return confirm('ยกเลิกการสั่งสินค้า !!!')">ยกเลิกการสั่งที่ไม่อัพสลิปภายในสามวัน</a></td>
            @else
            @endif
                   </tr>
               </tbody>
   @endforeach
          </table>

      </div>


</div>












<script>
var nW,nH,oH,oW;
function zoomToggle(iWideSmall,iHighSmall,iWideLarge,iHighLarge,whichImage){
oW=whichImage.style.width;oH=whichImage.style.height;
if((oW==iWideLarge)||(oH==iHighLarge)){
nW=iWideSmall;nH=iHighSmall;}else{
nW=iWideLarge;nH=iHighLarge;}
whichImage.style.width=nW;whichImage.style.height=nH;
}
</script>

</body>
</html>
