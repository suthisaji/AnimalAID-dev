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

    <title>Shippings</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" link href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" link href="{{url('css/bootstrap.min.css')}}">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('/css/shop-homepage.css')}}"/>
    <link rel="stylesheet" href="{{url('/css/index.css')}}"/>

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
      .btn-info2 {

    background-image: linear-gradient(to bottom,#9d89dc 0,#2aabd2 100%);
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
            <li><a href="../checkAdoption">ตรวจสอบการขอรับเลี้ยง: <span style="color:#FFFF00"> {{DB::table('adoptions')->join('animals', 'adoptions.animal_id', '=', 'animals.animal_id')
            ->where('animals.admin_id','=', Auth::user()->id)
            ->where('adoptions.status', '=','Recipient')
          ->count()}} </span></a></li>
            <li><a href="../admin">ตอบปัญหา: <span style="color:#FFFF00">{{DB::table('blogs')->where('status','answered')->count()}}</span>/{{DB::table('blogs')->count()}}</a></li>
            <li><a href="../addProductPage">เพิ่มสินค้า</a></li>
            <li class="active"><a href="../shippings">ใบจัดส่งสินค้า :<span style="color:#FFFF00">{{DB::table('shippings')->where('shipping_status', '=','กำลังตรวจสอบ')->count()}}</span></a></li>
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
      <center><h3><b>ใบจัดส่งสินค้า<b></h3></center>
    </div>
@if(DB::table('shippings')->count()>0)
    <div class="panel-heading">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><center>Shippig ID</center></th>
            <th><center>Order ID</center></th>
            <th><center>รหัสผู้สั่งซื้อ</center></th>
            <th><center>รายละเอียดการสั่งสินค้า<center></th>
            <th><center>ข้อมูลติดต่อและที่อยู่จัดส่ง</center></th>


            <th><center>วันที่ส่งสินค้า</center></th>
            <th><center>หมายเลขพัสดุ</center></th>

            <td><center><center></td>

              <th><center>สถานะการจัดส่ง</center></th>
          </tr>
        </thead>
 @foreach ($shipping as $s)
        <tbody>

          <td><center>{{$s->shipping_id}}<center></td>
          <td><center>{{$s->ordering_id}}<center></td>
          <td><center>{{$s->buyer_id}}<center></td>
            <td><center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">รายการสินค้า</button></center>
              <!-- Modal -->
              <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">ข้อมูลติดต่อและที่อยู่จัดส่ง</h4>
                    </div>
                    <div class="modal-body">

                         <table class="table table-striped">
                           <thead>
                             <th><center>ผู้รับ</center></th>
                             <th><center>E-mail</center></th>
                             <th><center>    ที่อยู่จัดส่ง   </center> </th>
                          <th> <center> เบอร์โทรศัพท์ </center></th><thead>
                      <tbody>
                          <td><center> {{Auth::user()->name}}</center></td><br>
                         <td><center> {{$s->email}}</center></td><br>
                              <td><center>    @foreach($ordering as $o)
                                    @if($o->ordering_id==$o->join_Shipping->ordering_id)
                                      {{$o->home}} {{$o->district}} {{$o->amphoe}} {{$o->province}}{{$o->zipcode}}
                                         @endif
                                    @endforeach
                                    </center></td><br>
                              <td> <center>{{$s->tel}}</center ></td></tbody>

                      </table>


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div></td>
      <td><center><button type="button" class="btn btn-info2 btn-lg" data-toggle="modal" data-target="#myModal1" style="color:white;">ติดต่อและที่จัดส่ง</button></center>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">รายละเอียดการสั่งสินค้า</h4>
              </div>
              <div class="modal-body">

                   <table class="table table-striped">

                     <thead><th><center>รหัสสินค้า</center></th> <th><center>  ชื่อสินค้า</center> </th><th> <center> จำนวน </center></th><thead>
                @foreach($ordering_product as $op)

                <tbody> <td><center> {{$op->product_id}}</center></td><br>
                        <td><center>{{$op->join_Product->product_name}}</center</td><br>
                        <td> <center>{{$op->product_number}}</center ></td></tbody>

               @endforeach
               </table>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div></td>


              <form action="/shippingUpdate/{{$s->ordering_id}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
<input type="hidden" name="ordering_id" value="{{$s->ordering_id}}"/>


          @if($s->shipping_status!='กำลังตรวจสอบ')
          <td></td>
          <td></td>
          <td></td>
          <td><center>@if($s->shipping_status=='cancel') <b style="color:red;">ยกเลิกการจัดส่ง</b> @elseif($s->shipping_status=='จัดส่งแล้ว')<b style="color:blue;">จัดส่งแล้ว</b> @endif<center></td>
          @else
            <td><center><input type="date" name="dateTimeShipping"required/><center></td>
            <td><center><input type="text" name="package_id" required/><center></td>
              <input type="hidden" name="shipping_status" value="จัดส่งแล้ว" />
            <td>  <button class=" btn btn-sm btn-primary" onclick="return confirm('แน่ใจว่าข้อมูลถูกต้อง')">ยินยัน</button></td>
          <td>  กำลังตรวจสอบ</td>
          @endif
         </form>
<!-- ดึงข้อมูลจากดาต้าเบส -->

        </tbody>
        @endforeach
      </table>
    </div>
  @else
    <br>
<center><h2 style="color:orange">ยังไม่มีใบจัดส่งสินค้า</h2></center>
  @endif

  </div>















</body>
</html>
