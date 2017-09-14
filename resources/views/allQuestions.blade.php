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

      /* Add animation (fade in the popup) */
      @-webkit-keyframes fadeIn {
          from {opacity: 0;}
          to {opacity: 1;}
      }

      @keyframes fadeIn {
          from {opacity: 0;}
          to {opacity:1 ;}
      }
      </style>
  </head>
  <body>
    <!-- Navigation -->
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
               <a class="navbar-brand"  style="font-size:20px;"  href="all">Animals A-I-D</a>
           </div>
           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                   <li >
                       <a href="dm">การบริจาคเงิน</a>
                   </li>
                   <li>
                       <a href="db">การบริจาคเลือด</a>
                   </li>
                   <li>
                       <a href="da">หาบ้านให้สัตว์</a>
                   </li>
                   <li  >
                       <a href="newsAll">ข่าวสารและกิจกรรม</a>
                   </li>
                   <li class="active" >
                       <a href="allQuestions">สอบถามผู้รู้เกี่ยวกับสัตว์เลี้ยง</a>
                   </li>


               </ul>
               <!--check login -->
          <ul class="nav navbar-nav navbar-right">
            @if(!empty($position))
              @if( $position== 'admin')
                <li class="fl">
             <a href="admin">การจัดการ</a>
           </li>
         @endif
       @endif
              <!-- Authentication Links -->
             <!-- Authentication Links -->
                   @if (Auth::guest())
                       <li class="fl"><a href="{{ route('login') }}">เข้าสู่ระบบ</a></li>
                       <li class="fl"><a href="{{ route('register') }}">สมัครสมาชิก</a></li>
                   @else
                     <li class="dropdown fl">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             {{ Auth::user()->name }} <span class="caret"></span>
                         </a>

                         <ul class="dropdown-menu" role="menu">
                           @if(Auth::user()->position=='user')
                           <li class="fl">
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
                         @else <li class="fl">
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
