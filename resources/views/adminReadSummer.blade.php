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


    <title>AdminreadAsk</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" link href="{{url('css/bootstrap.css')}}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

    <script>window.Laravel = {"csrfToken":"lTGlgWKoqayN8ejijUYGiNOqRPDyRt58eg8QpU7w"};</script>

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

      .owner{
        width: 40%
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
        <a class="navbar-brand"  style="font-size:20px;" href="../all">Animals A-I-D </a>
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
            <li class="active"><a href="../admin">ตอบปัญหา: <span style="color:#FFFF00">{{DB::table('blogs')->where('status','answered')->count()}}</span>/{{DB::table('blogs')->count()}}</a></li>
            <li><a href="../addProductPage">เพิ่มสินค้า</a></li>
            <li><a href="../shippings">ใบจัดส่งสินค้า :<span style="color:#FFFF00">{{DB::table('shippings')->where('shipping_status', '=','กำลังตรวจสอบ')->count()}}</span></a></li>
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
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color:#F2FBEF;border-color:#E0F8EC;">
             <h4>ตอบปัญหาจากทางบ้าน </h4>
          </div>
                 <div class="panel-body" style="word-wrap:break-word;">
                   <h3>Q : {{$data->topic}}</h3>
                   <hr>

                     {!! html_entity_decode($data->content) !!}

                 </div>
        </div>

<!--แสดงคำตอบ-->
  @if($data->answer!=null)
<div class="panel panel-default" style="border-color:#F3E2A9;">
  <div class="panel-heading" style="background-color:#F3E2A9;border-color:#F3E2A9;">
     <h4>คำตอบ </h4>
  </div>
         <div class="panel-body" style="word-wrap:break-word;background-color:#F7F8E0;border-color:#F3E2A9;">
{!! html_entity_decode($data->answer) !!}
 </div>
</div>
@endif
<!--แสดงคำตอบ-->


<!--Summernote Answer-->
<div class="panel panel-default">
  <div class="panel-heading" style="background-color:#EFF5FB;">
    <center><h4>ตอบกระทู้คำถาม </h4></center>
  </div>
  <div class="panel-body">
  <form action="{{url('updateSummerAns')}}" method="post">
      {{ Form::token() }}
    <div class="form-group owner">
        <input type="hidden" name="id" value="{{$data->id}}">
          <input type="hidden" name="status" value="Answered">
      <label for="topic">ผู้ตอบ</label>

    <input type="text" name="name" id="name"   class="form-control" value="   แอดมิน :   {{ Auth::user()->name }}" disabled>
    </div>

    <div class="form-group" >
      <textarea id="summernote" name="summernote" class="form-control"  required >
      </textarea>
    </div>

     <input type="hidden" name="summernote2" class="form-control" value="{{$data->answer}} " />


    <div class="form-group">
      <input type="submit" name="send" id="send" value="create" class="btn btn-success">
      <input type="button" name="clear" id="clear" class="btn btn-danger pull-right" value="Clear">

    </div>
    @if (Auth::guest())
        <input type="hidden"  name="userid" value="guest"/>
    @else
      <input type="hidden"  name="userid" value=" {{ Auth::user()->id }}"/>
    @endif
  </form>
    </div>
  </div>
</div>

<!--end summer-->

    </div>
    <script type="text/javascript">
         $(document).ready(function(){
           $('#summernote').summernote({
            height:'200px',
            placeholder:'content here ..' //placeholderเสือกไม่ขึ้น งง

          //  fontNames:['Arial','Arial Black','Khmer OS'],
          })
     })
     $('#clear').on('click',function(){
       $('#summernote').summernote('code',null);

     })

    </script>


  </body>
</html>
