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


    <title>Ask</title>
    @section('content')

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
    <!--start datatable-->
     <script src="  https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" ></script>
     <script src="  https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" ></script>
     <script>
     $(document).ready(function() {
         $('#example').DataTable();
     } );
     </script>
     <!--end datatable-->
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
            <li><a  href="../animal">รายชื่อสัตว์</a></li>
            <li><a href="../addNews">เพิ่มข่าวและกิจกรรม</a></li>
            <li><a href="../checkAdoption">ตรวจสอบการขอรับเลี้ยงสัตว์: <span style="color:#FFFF00"> {{$countRecipientEachAdmin}} </span></a></li>
            <li class="active"><a href="../admin">ตอบปัญหา: <span style="color:#FFFF00">{{DB::table('blogs')->where('status','answered')->count()}}</span>/{{DB::table('blogs')->count()}}</a></li>
            <li><a href="../addProductPage">เพิ่มสินค้า</a></li>
            <li><a href="../transferDocument">ตรวจสอบสลิปเงิน: <span style="color:#FFFF00">{{DB::table('transferMoneys')->where('checking_status', '=','wait')->count()}}</span></a></li>
            <li><a href="../shippings">ใบจัดส่งสินค้า :<span style="color:red">{{DB::table('shippings')->where('shipping_status', '=','กำลังตรวจสอบ')->count()}}</span></a></li>
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
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <div class="panel panel-default">
          <div class="panel-heading">แอดมินตอบปัญหา</div>
          <div class="panel-body">
            <table class="table">
              {{--  <thead>
                    <tr>
                       <th>name</th>
                       <th>email</th>
                       <th>position</th>
                       <th>tel</th>
                       <th>action</th>
                    </tr>
                </thead>
                    <tbody>
                    @foreach($all_users as $user)
                    @if($user->position=='admin')
                            <tr class="danger">
                    @else
                    <tr>
                    @endif

                           <td>{{$user->name}}</td>
                            <td> {{$user->email}}</td>
                            <td> {{$user->position}}</td>
                              <td> {{$user->tel}}</td>

                             <td><a href="/edit" class="btn btn-info btn-sm">Edit</a></td>
                              <td><a href="/delete/{{$user->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Please confirm again !!!') ">Delete</a></td>
                            </tr>
                            @endforeach
                    </tbody>--}}<table class="table table-striped display" id="example">
                         <thead>
                           <tr>
                             <th>หัวเรื่อง</th>
                             <th>แอคชั่น</th>
                             <th></th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach($da as $d )
                             <tr>
                               <td>  {{$value = str_limit($d->topic, 80)}}</td>
                               <td>
                                <a href="{{url('adminReadSummer',array($d->id))}}">ดู&ตอบคำถาม</a> | {{-- จะให้ชิดขวาก้ได้ เพิ่มแท้ก   <p align="right"> นี้--}}
                                <a href="{{url('deleteSummer',array($d->id))}}" onclick="return confirm('Please confirm again !!!')" >ลบ</a> |
                                <a href="{{url('editSummer',array($d->id))}}">แก้ไขคำถาม</a>
                               </td>
                               <td>
                                 @if($d->status=='Answered')
                                  <img src="/images/pointg.png" style="height:19%">ตอบแล้ว
                                 @else
                               @endif
                               </td>
                             </tr>
                           @endforeach
                         </tbody>

                    </table>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
