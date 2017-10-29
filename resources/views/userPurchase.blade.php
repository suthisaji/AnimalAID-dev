<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>หาบ้านให้สัตว์</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" link href="{{url('css/bootstrap.css')}}">
        <link rel="stylesheet" link href="{{url('css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('/css/shop-homepage.css')}}"/>


    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--bootstrap link-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    {{Html::style('css/shop-homepage.css')}}

    <style type="text/css">
        .carousel-inner > .item > img {
          width:100%;
          height:300px;
        }

        .thumbnail img {
          /*width:100% !important;*/
          height: 200px !important;
        }

        body{
          font-size: 16px;
        }
        .box1{
          margin: 1px;
          font-size: 12px;
          width: 70px;
          height: 30px;
          padding: 5px 6px;
          position: absolute;
          bottom: 28px;
          right: 25px;
          border-radius: 3px;
        }
        /*รับเลี้ยง*/
        .rub{
          font-size: 12px;
          width: 70px;
          height: 30px;
          padding: 5px 6px;
          position: absolute;
          bottom: 28px;
          right: 25px;
          border-radius: 3px;
        }
        /*ดูรายละเอียด*/
        .box{
          padding: 6px 10px;
          font-size: 12px;
          position:absolute;
          bottom: 28px;
          right:100px;
          border-radius: 3px;
        }
        /*บริจาค*/
        .box2{
          margin: 1px;
          font-size: 12px;
          width: 70px;
          height: 30px;
          padding: 5px 6px;
          position: absolute;
          bottom: 28px;
          right: 25px;
          border-radius: 3px;
        }
        .box3{
          text-align: left;
        }
        .small, small {
    font-size: 75%;
}
/*nav*/
.navbar-inverse {

    background-color: #fffdfd;
    border-color: #fdf9f9;

    background-image: -webkit-linear-gradient(top,#FFFFFF 0,#FFFFFF 100%);
    background-image: -o-linear-gradient(top,#FFFFFF 0,#FFFFFF 100%);
    background-image: -webkit-gradient(linear,left top,left bottom,from(#FFFFFF),to(#FFFFFF));
    background-image: linear-gradient(to bottom,#FFFFFF 0,#FFFFFF 100%);
}
.navbar-inverse .navbar-nav >li>a:hover {
    color: #fb841b;
    background-color: rgba(234, 243, 150, 0);
}
.navbar-inverse .navbar-nav >li>a:hover>span {
    color: #2ECCFA;
    background-color: rgba(234, 243, 150, 0);
}
.navbar-inverse .navbar-nav >li>a:hover>span>span {
    color: #01DF01;
    background-color: rgba(234, 243, 150, 0);
}

.navbar-inverse .navbar-nav>li>a {
    color: #0c0c0c;
}
.navbar {
    min-height: 88px;
  }
  .navbar-brand>img {
    position: absolute;
    left: 5%;
  }
  .navmain {
    padding-top: 18px;
    padding-bottom: 15px;
}
.navbar-inverse .navbar-toggle .icon-bar {
    background-color: #ec9619;
}
.navbar-inverse .navbar-toggle {
    border-color: #d29f24;
}
.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
    border-color: #fdce9a;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 9px;
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.open>a {
    background-image: linear-gradient(to bottom, #ffd391 0, #ffd67b 100%);
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.open>a {

    box-shadow: inset 0 3px 9px rgba(0, 0, 0, 0);
}
/*จบเนป*/
    </style>

  </head>
  <body>
    <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">  <a  class="navbar-brand" href="all">   <img src="images/S__1261612.jpg" width="60" height="60" class="d-inline-block align-top" alt=""></a>

       <div class="container">

           <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header ">

             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>



           </div>
           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse tw" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav ">
                 <li class="navmain">
                     <a href="all">หน้าหลัก</a>
                 </li>
                   <li class="navmain ">
                       <a href="dm">การบริจาคเงิน</a>
                   </li>
                   <li class="navmain ">
                       <a href="webshop">ของที่ระลึก</a>
                   </li>
                   <li class="navmain ">
                       <a href="db">การบริจาคเลือด</a>
                   </li>
                   <li class="navmain active ">
                       <a href="da">หาบ้านให้สัตว์</a>
                   </li>
                   <li class="navmain ">
                       <a href="newsAll">ข่าวสารและกิจกรรม</a>
                   </li>
                   <li class="navmain ">
                       <a href="allQuestions">สอบถามผู้รู้เกี่ยวกับสัตว์เลี้ยง</a>
                   </li>

               </ul>
               <ul class="nav navbar-nav navbar-right">
                 @if(!empty($position))
                   @if( $position== 'admin')
                     <li class="navmain">
                       <a href="admin">การจัดการ</a>
                    </li>



                   @endif
                 @endif

                   <!-- Authentication Links -->
                   @if (Auth::guest())

                       <li class="navmain"><a href="{{ route('login') }}"><span>เข้าสู่ระบบ</span></a></li>
                       <li class="navmain"><a href="{{ route('register') }}"><span><span>สมัครสมาชิก</span></span></a></li>
                   @else
                     <li class="navmain">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             {{ Auth::user()->name }} <span class="caret"></span>
                         </a>

                         <ul class="dropdown-menu" role="menu">
                           @if(Auth::user()->position=='user')
                           <li class="fl tw16">
                             <a href="userProfile">ข้อมูลส่วนตัวผู้ใช้ </a>
                           </li>
                           <li class="fl">
                               <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                   ออกจากระบบ
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   {{ csrf_field() }}
                               </form>
                           </li>
                         @else <li class="fl tw16">
                            <a href="adminProfile">ข้อมูลส่วนตัวแอดมิน</a>
                          </li>
                             <li class="fl">
                                 <a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                     ออกจากระบบ
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     {{ csrf_field() }}
                                 </form>
                             </li>
                           @endif
                         </ul>
                     </li>
                   @endif
               </ul>
           </div>
           <!-- /.navbar-collapse -->
       </div>
       <!-- /.container -->
   </nav>
   <div class="container">
     <div class="panel-heading">
       <center><h3><b>สั่งซื้อสินค้า<b></h3></center>
     </div>

     <div class="panel-heading">
       <table class="table table-striped">
         <thead>
           <tr>
             <th><center>รหัสสินค้า</center></th>
             <th><center>ชื่อสินค้า</center></th>
             <th><center>จำนวน</center></th>
             <th><center>ราคา</center></th>
           </tr>
         </thead>

         <tbody>

           <td><center></center></td>
           <td><center></center></td>
           <td><center></center></td>
           <td><center></center></td>

 <!-- ดึงข้อมูลจากดาต้าเบส -->

         </tbody>

       </table>
     </div>

   </div>



   <div class="container">
     <div class="row">
       <div class="col-sm-3" style=""></div>

       <div class="col-md-6">
         <h1 style="text-align:center">กรุณากรอกข้อมูลการจัดส่ง</h1><!--DB::User-->
         <form name="addPurchase" action="/addPurchase/{{ Auth::user()->id}}" class="form" method="post" enctype="multipart/form-data" onsubmit="return validation()">{{ Form::token() }}


           <div class="form-group">
             <label for="address" class="form-label">ที่อยู่และรหัสไปรษณ์ (<small>บ้านเลขที่  หมู่บ้าน  ตำบล อำเภอ ถนน จังหวัด  รหัสไปรษณ์</small>)</label>
             <input type="text" class="form-control" name="address"  required />
           </div>

           <div class="form-group" id="Bank_name">
             <label for="Bank_name" class="form-label">ธนาคาร</label><br>
             <label><input type="radio" value="กรุงเทพ สาขาบิ๊กซี อยุธยา มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน บัญชีเลขที่ 790-020373-3" name="Bank_name" id="Bank_name_input" required="required"><span style="color:blue;">
               ธนาคารกรุงเทพ สาขาบิ๊กซี อยุธยา
               ชื่อบัญชี มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน
               บัญชีเลขที่ 790-020373-3</span></label><br><br>

             <label><input type="radio" value="กรุงไทย สาขามหาวิทยาลัยเกษตรศาสตร์ บางเขน มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน บัญชีเลขที่ 986-4-399968-3" name="Bank_name"><span style="color:#AEB404;">
               ธนาคารกรุงไทย สาขามหาวิทยาลัยเกษตรศาสตร์ บางเขน
               ชื่อบัญชี มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน
               บัญชีเลขที่ 986-4-399968-3</span></label>
           </div>
              <input type="hidden" class="form-control" name="amountOfTransfer" value="20000"/>

           <input type="hidden" class="form-control" name="pay_status" value="wait"/>
            <input type="text" class="form-control" name="order_number" value="{{rand(0,190000)}}"/>
           <input type="hidden" class="form-control" name="ordering_id" value="{{rand(200000,380000)}}"/>

<input type="hidden" class="form-control" name="id" value="{{ Auth::user()->id }}"/>
           <div class="text-center">
             <button class="btn btn-success">ยืนยันการสั่งซื้อ</button>
           </div>
         </form>
       </div>
       <div class="col-sm-3" style=""></div>
     </div>
   </div>
   

       </body>
   </html>
