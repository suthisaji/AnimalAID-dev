<!DOCTYPE html>
<html  lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UpdateSlip</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" link href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" link href="{{url('css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('/css/shop-homepage.css')}}"/>
    <link rel="stylesheet" href="{{url('/css/index.css')}}"/>

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

    <!-- Styles -->
    <link href="https://animal-aid.me/css/app.css" rel="stylesheet">

    {{Html::style('css/shop-homepage.css')}}

    <!-- Scripts -->
    <script>
        window.Laravel = {"csrfToken":"lTGlgWKoqayN8ejijUYGiNOqRPDyRt58eg8QpU7w"};
    </script>
    <style>
    body{
      font-size: 16px;
    }
    .navbar>.container-fluid .navbar-brand, .navbar>.container .navbar-brand {
        margin-left: -34px;
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
      background-image: linear-gradient(to bottom,	#E5E4E2 0,	#B6B6B4 100%);
    }
    /*จบเนป*/
    </style>
  </head>
  <body>
    <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">  <a  class="navbar-brand" href="all">   <img src="../images/S__1261612.jpg" width="60" height="60" class="d-inline-block align-top" alt=""></a>

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
                     <a href="../all">หน้าหลัก</a>
                 </li>
                   <li class="navmain ">
                       <a href="../dm">การบริจาคเงิน</a>
                   </li>
                   <li class="navmain ">
                       <a href="../webshop">สั่งซื้อของที่ระลึก</a>
                   </li>
                   <li class="navmain ">
                       <a href="../db">การบริจาคเลือด</a>
                   </li>
                   <li class="navmain ">
                       <a href="../da">หาบ้านให้สัตว์</a>
                   </li>
                   <li class="navmain ">
                       <a href="../newsAll">ข่าวสารและกิจกรรม</a>
                   </li>
                   <li class="navmain active ">
                       <a href="../allQuestions">สอบถามผู้รู้เกี่ยวกับสัตว์เลี้ยง</a>
                   </li>

               </ul>
               <ul class="nav navbar-nav navbar-right">
                 @if(!empty($position))
                   @if( $position== 'admin')
                     <li class="navmain">
                       <a href="../admin">การจัดการ</a>
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
                            <a href="../adminProfile">ข้อมูลส่วนตัวแอดมิน</a>
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

     <br><br><br>

     <div class="container">
       <div class="row">
            <div class="container">
              <div class="row" style="border:solid 1px;border-color:gray;">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h1 class="display-4" style="text-align:center; color:#424242; ">แจ้งชำระเงิน ใบสั่งซื้อหมายเลข </h1>
                    <form name="createUserUpdateSlip" action="/createUserUpdateSlip" class="form" method="post" enctype="multipart/form-data">
                        {{ Form::token() }}

                        <div class="form-group" id="div3">
                            <label for="name" class="form-label h3">ชื่อ-นามสกุล</label>
                            <input type="text" class="form-control" name="name" required/>
                        </div>

                        <div class="form-group" id="div3">
                            <label for="dateTimeTransfer" class="form-label h3">วันที่และเวลาที่บริจาคเงิน</label>
                            <input type="datetime-local" class="form-control" name="dateTimeTransfer" required/>
                        </div>

                        <div class="form-group" id="slip">
                            <label for="picture_slip" class="form-label h3">รูปภาพหลักฐานการโอน</label><br>
                            <input type="file"  name="picture_slip"  required/ >
                        </div>

                      <input type="hidden" class="form-control" name="status_check_yet"  value="NotCheck"/>
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

       </div>
       </div>

    </div>

  </body>
</html>
