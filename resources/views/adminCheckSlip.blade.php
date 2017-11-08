<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <script src="https://cdn.omise.co/card.js" charset="utf-9"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Animal List</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" link href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" link href="{{url('css/bootstrap.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->

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
  <!--start datatable-->

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

      .k{
       border-width: inherit;
      }

     .table-inverse{
       background-color: #D8D8D8;
       color: #424242;
      }

     .t{
       font-size: 19px;
      }

     .t2{
       font-size: 15px;
       border-radius: 5px;
      }

     .a{
       color:  #6E6E6E  ;
      }

     .op{
       font-size: 15px;
       background-color: darkseagreen;
       border-radius: 5px;
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
            <li class="active"><a href="../animal">รายชื่อสัตว์</a></li>
            <li><a href="../addNews">เพิ่มข่าวและกิจกรรม</a></li>
            <li><a href="../checkAdoption">ตรวจสอบการขอรับเลี้ยงสัตว์: <span style="color:#FFFF00">{{DB::table('adoptions')->join('animals', 'adoptions.animal_id', '=', 'animals.animal_id')
            ->where('animals.admin_id','=', Auth::user()->id)
            ->where('adoptions.status', '=','Recipient')
          ->count()}}</span></a></li>
            <li><a href="../admin">ตอบปัญหา: <span style="color:#FFFF00">{{DB::table('blogs')->where('status','answered')->count()}}</span>/{{DB::table('blogs')->count()}}</a></li>
            <li><a href="../addProductPage">เพิ่มสินค้า</a></li>
            <li><a href="../transferDocument">ตรวจสอบสลิปเงิน: <span style="color:#FFFF00">{{DB::table('transferMoneys')->where('checking_status', '=','wait')->orWhere('checking_status', '=','กำลังตรวจสอบหลักฐาน')->count()}}</span></a></li>
            <li><a href="../shippings">ใบจัดส่งสินค้า :<span style="color:#FFFF00">{{DB::table('shippings')->where('shipping_status', '=','กำลังตรวจสอบ')->count()}}</span></a></li>
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

  <div class="bgc panel-heading">
    <br>

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
       <th><center>ID-Slip</center></th>
       <th><center>PictureSlip</center></th>
       <th id="div4"><center>Check</center></th>
     </tr>
   </thead>
@foreach($userUpdateSlip as $u)
   <tbody>

     <td><center>{{ $u->id }}</center></td>
     <td><center><img src="{{url('/images/'.$u->picture_slip)}}" width="30%" height="30%"></center></td>
     <td><center>

       @if($u->status_check_yet=='NotCheck')
       <form action="/checkRigth/{{$u->id}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
         <input type="hidden"class="form-control" name="id"  value="{{$u->id}}" />
         <input type="hidden" class="form-control" name="status_check_yet" value="check"/>
         <input type="hidden"class="form-control" name="admin_id" value="{{Auth::user()->id}}" />
         <input type="hidden"class="form-control" name="status_slip"  value="Rigth" />
            <br><button class=" btn btn-sm btn-primary" onclick="return confirm('หลักฐานถูกต้อง ยืนยันการจัดส่งสินค้า')">ถูกต้อง</button>
     </form><br>

     <form action="/checkWrong/{{$u->id}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
       <input type="hidden"class="form-control" name="id"  value="{{$u->id}}" />
       <input type="hidden" class="form-control" name="status_check_yet" value="check"/>
       <input type="hidden"class="form-control" name="admin_id" value="{{Auth::user()->id}}" />
       <input type="hidden"class="form-control" name="status_slip"  value="Wrong" />
        <button class=" btn btn-sm btn-danger" onclick="return confirm('หลักฐานผิด')">ไม่ถูกต้อง</button>
   </form>
     @elseif($u->status_slip=='Cancel')
     ถูกยกเลิกการตรวจสอบ
     <form action="/checkRigth/{{$u->id}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
       <input type="hidden"class="form-control" name="id"  value="{{$u->id}}" />
       <input type="hidden" class="form-control" name="status_check_yet" value="check"/>
       <input type="hidden"class="form-control" name="admin_id" value="{{Auth::user()->id}}" />
       <input type="hidden"class="form-control" name="status_slip"  value="Rigth" />
          <br><button class=" btn btn-sm btn-primary" onclick="return confirm('หลักฐานถูกต้อง ยืนยันการจัดส่งสินค้า')">ถูกต้อง</button>
   </form>
   @else
     {{ $u->status_check_yet}}
     <form action="/checkCancel/{{$u->id}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
       <input type="hidden"class="form-control" name="id"  value="{{$u->id}}" />
       <input type="hidden" class="form-control" name="status_check_yet" value="check"/>
       <input type="hidden"class="form-control" name="admin_id" value="{{Auth::user()->id}}" />
       <input type="hidden"class="form-control" name="status_slip"  value="Cancel" />
          <br><button class=" btn btn-sm btn-warning" onclick="return confirm('ต้องการยกเลิก')">ยกเลิก</button>
   </form>



      @endif


      </center></td>
  <!-- ดึงข้อมูลจากดาต้าเบส -->

   </tbody>
@endforeach
  </table>
  </div>
  </div>
  <!--แถบสถานะ-->



</body>
</html>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
