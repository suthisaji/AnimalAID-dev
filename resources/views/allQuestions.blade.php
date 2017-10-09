<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" link href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" link href="{{url('css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('/css/shop-homepage.css')}}"/>
    <link rel="stylesheet" href="{{url('/css/index.css')}}"/>

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">
    <!--ข้างล่างคือของ summernote-->
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <title>summer Note</title>

      {{Html::style('css/shop-homepage.css')}}<!--ตรงนี้คือฟ้อนแบบไม่มีหัว-->
      <style>
      /* mouse over link */
      a:hover {
          color: white;
      }

      /* Popup container - can be anything you want */
      .popup {
          position: relative;
          display: inline-block;
          cursor: pointer;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
      }

      /* The actual popup */
      .popup .popuptext {
          visibility: hidden;
          width: 190px;
          background-color: #555;
          color: #fff;
          text-align: center;
          border-radius: 6px;
          padding: 8px 0;
          position: absolute;
          z-index: 1;
          bottom: 125%;
          left: 44%;
          margin-left: -80px;
      }

      /* Popup arrow */
      .popup .popuptext::after {
          content: "";
          position: absolute;
          top: 100%;
          left: 50%;
          margin-left: -5px;
          border-width: 5px;
          border-style: solid;
          border-color: #555 transparent transparent transparent;
      }

      /* Toggle this class - hide and show the popup */
      .popup .show {
          visibility: visible;
          -webkit-animation: fadeIn 1s;
          animation: fadeIn 1s;
      }

      body{
        font-size: 16px;
      }

      /* Add animation (fade in the popup) */
      @-webkit-keyframes fadeIn {
          from {opacity: 0;}
          to {opacity: 1;}
      }

      @keyframes fadeIn {
          from {opacity: 0;}
          to {opacity:1 ;}
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

                   <li class="navmain ">
                       <a href="dm">การบริจาคเงิน</a>
                   </li>
                   <li class="navmain ">
                       <a href="db">การบริจาคเลือด</a>
                   </li>
                   <li class="navmain ">
                       <a href="da">หาบ้านให้สัตว์</a>
                   </li>
                   <li class="navmain active">
                       <a href="newsAll">ข่าวสารและกิจกรรม</a>
                   </li>
                   <li class="navmain ">
                       <a href="allQuestions">สอบถามผู้รู้เกี่ยวกับสัตว์เลี้ยง</a>
                   </li>

               </ul>
               <ul class="nav navbar-nav navbar-right">
                 @if(!empty($position))
                   @if( $position== 'admin')
                     <li class="fl tw16">
                       <a href="admin">การจัดการ</a>
                    </li>



                   @endif
                 @endif

                   <!-- Authentication Links -->
                   @if (Auth::guest())

                       <li class="fl   btn-default tw16"><a href="{{ route('login') }}"><span>เข้าสู่ระบบ</span></a></li>
                       <li class="fl   btn-default tw16"><a href="{{ route('register') }}"><span><span>สมัครสมาชิก</span></span></a></li>
                   @else
                     <li class="dropdown fl">
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

<br>
   <!-- Page Content -->
    <div class="container">
        <div class="panel panel-default">


          @if (Auth::guest())
            <div class="panel-heading">
              <br>
            <center>   <div class="popup" onclick="myFunction()">

                   <a href="#"><button type="button" class="btn btn-success">
                  <span style="font-size:21px">เขียนสอบถามเพิ่มเติม<span> <img src="/images/pencil.png" style="width:30px;height:30px;">
                  </button></a>


                <span class="popuptext" id="myPopup">  <a href="{{ route('login')  }}"><span style="color:white">เข้าสู่ระบบ</span></a>
                &nbsp;  &nbsp; &nbsp;<a href="{{ route('register') }}" ><span style="color:white">สมัครสมาชิก</span></a></span>
              </div></center>
              <br>
            </div>


          @else
          <div class="panel-heading">
            <br>
             <center><a href="write"><button type="button" class="btn btn-success"> <span style="font-size:21px">เขียนสอบถามเพิ่มเติม<span> <img src="/images/pencil.png" style="width:30px;height:30px;"></button></a></center>
            <br>
          </div>

        @endif






          <br>
           <div class="panel-heading">
              <h4><b>คำถามทั้งหมด </b></h4>
           </div>
                 <div class="panel-body">
                     <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>หัวเรื่อง</th>
                              <th>แอคชั่น</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $d )
                              <tr>
                                <td>  {{$value = str_limit($d->topic, 80)}}</td>

                                <td>

                                  <a href="{{url('readSummer',array($d->id))}}">View</a> {{-- จะให้ชิดขวาก้ได้ เพิ่มแท้ก   <p align="right"> นี้--}}



                                </td>
                              </tr>
                            @endforeach
                          </tbody>

                     </table>

                 </div>
                 @if(Auth::guest())

                 @else

    <!--เฉพาะคำถามของ memberคนนัี้-->
    <br>
     <div class="panel-heading">
        <h4><b>คำถามของคุณ</b></h4>
     </div>
           <div class="panel-body">
               <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>หัวเรื่อง</th>
                        <th>แอคชั่น</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($data as $d )
                        <tr>
                          @if($d->userid==(Auth::user()->id))
                          <td>  {{$value = str_limit($d->topic, 80)}}</td>
                      <td>
                       <a href="{{url('readSummer',array($d->id))}}">เปิดอ่าน</a> {{-- จะให้ชิดขวาก้ได้ เพิ่มแท้ก   <p align="right"> นี้--}}
                              | <a href="{{url('deleteSummer',array($d->id))}}" onclick="return confirm('Please confirm again !!!')" >ลบ</a>
                              |  <a href="{{url('editSummerByMember',array($d->id))}}">แก้ไขคำถาม</a>
                         </td>
                         <td>
                           @if($d->status=='Answered')
                            <img src="/images/pointg.png" style="width:2%;height:19%"> ตอบแล้ว
                           @else

                         @endif
                         </td>
                        </tr>
                      @else
                      @endif

                      @endforeach
                    @endif
                    </tbody>

               </table>

           </div>





        </div>
    </div>




    <script>
    // When the user clicks on div, open the popup
    function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }
    </script>
  </body>
</html>
