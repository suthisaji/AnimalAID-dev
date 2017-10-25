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
            <li class="active"><a href="../add">เพิ่มการขอรับบริจาค</a></li>
            <li><a href="../animal">รายชื่อสัตว์</a></li>
            <li><a href="../addNews">เพิ่มข่าวและกิจกรรม</a></li>
            <li><a href="../checkAdoption">ตรวจสอบการขอรับเลี้ยงสัตว์: <span style="color:red">{{DB::table('adoptions')->join('animals', 'adoptions.animal_id', '=', 'animals.animal_id')
            ->where('animals.admin_id','=', Auth::user()->id)
            ->where('adoptions.status', '=','Recipient')
          ->count()}} </span></a></li>
            <li><a href="../admin">ตอบปัญหา: <span style="color:red">{{DB::table('blogs')->where('status','answered')->count()}}</span>/{{DB::table('blogs')->count()}}</a></li>
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
@foreach ($transferMoney as $t)
  {{$t->dateTimeOfTransfer}}
@endforeach
<div class="panel-heading">
   <h4><b>แอดมิน ตรวจสอบหลักฐานการโอนเงิน</b></h4>
</div>
      <div class="panel-body">
          <table class="table table-striped">
               <thead>
                 <tr>
                    <th>order No.</th>
                    <th>ชื่อ</th>
                   <th>วันเวลาที่โอน</th>
                   <th>ชื่อธนาคาร</th>
                   <th>สาขา</th>
                    <th>จำนวนเงินที่โอน</th>
                   <th>ภาพสลิป</th>
                     <th> อัพหลักฐานเมื่อ</th>
                   <th>ตรวจสอบ</th>
                   <th> สถานะ</th>

                 </tr>
               </thead>
               <tbody>

                 @foreach ($transferMoney as $t)
                   <tr>
                     <td>{{$t->order_number}}</td>
                     <td>{{$t->join_Ordering->join_User->name}}</td>
                     <td>{{$t->dateTimeOfTransfer}}</td>
                     <td>{{$t->Bank_name}}</td>
                     <td>{{$t->Bank_Branch}}</td>
                      <td>{{$t->amountOfTransfer}}</td>
                     <td><img src="{{url('/images/'.$t->picture_slip)}}" alt="" width="130" height="130"></td>
                     <td>{{$t->created_at}}</td>
                 <td>
                   <form action="/confirm/{{$t->order_number}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
                     <input type="hidden"class="form-control" name="order_number"  value="{{$t->order_number}}" />
                     <input type="hidden" class="form-control" name="ordering_id" value="{{ $t->join_Ordering->ordering_id}}" readonly/>
                     <input type="hidden"class="form-control" name="buyer_id" value="{{$t->join_Ordering->customer_id}}" />
                     <input type="hidden"class="form-control" name="address"  value="{{$t->join_Ordering->join_User->address}}" />
                     <input type="hidden"class="form-control" name="tel"  value="{{$t->join_Ordering->join_User->tel}}"  />
                     <input type="hidden"class="form-control" name="email"  value="{{$t->join_Ordering->join_User->email}}" />


                                 <input type="hidden" class="form-control" name="checking_status" value="confirm"/>
                                 <button class=" btn btn-sm btn-primary">ถูกต้องจัดส่งได้</button>
                   </form>
          {{-- จะให้ชิดขวาก้ได้ เพิ่มแท้ก   <p align="right"> นี้--}}<br>
&nbsp;<a href="#" class="btn btn-sm btn-danger">หลักฐานไม่ถูกต้อง</a>
                    </td>
                    <td>
                      @if($t->status=='confirm')
                       <img src="/images/pointg.png" style="width:4%;height:13%"> การสั่งสินค้าสำเร็จ
                     @elseif($t->checking_status=='wait')
                      ยังไม่ตรวจสอบ
                    @endif
                    </td>

                   </tr>
                 @endforeach

               </tbody>

          </table>

      </div>
</div>

</body>
</html>