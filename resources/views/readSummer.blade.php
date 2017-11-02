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
    <!-- include libraries(jQuery, bootstrap) -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
    <title>รายการกระทู้คำถาม</title>
    {{Html::style('css/shop-homepage.css')}}<!--ตรงนี้คือฟ้อนแบบไม่มีหัว-->

    <style type="text/css">
    body{
      font-size: 16px;
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
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">  <a  class="navbar-brand" href="../all">   <img src="../images/S__1261612.jpg" width="60" height="60" class="d-inline-block align-top" alt=""></a>

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
                       <a href="../dm">การบริจาคเงิน</a>
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
                   <li class="navmain active">
                       <a href="../allQuestions">สอบถามผู้รู้เกี่ยวกับสัตว์เลี้ยง</a>
                   </li>

               </ul>
               <ul class="nav navbar-nav navbar-right">
                 @if(!empty($position))
                   @if( $position== 'admin')
                     <li class="fl tw16">
                       <a href="../admin">การจัดการ</a>
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
                             <a href="../userProfile">ข้อมูลส่วนตัวผู้ใช้ </a>
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


    <div class="container">
      <br><br><br>
        <div class="panel panel-default">
           <div class="panel-heading">
              <h4>กระทู้คำถาม</h4>
           </div>
                 <div class="panel-body" style="word-wrap:break-word;">

                   <h1>{{$data->topic}}</h1>
                   <hr>

                  {!! html_entity_decode($data->content) !!}

                </div><div align = 'right'><small >ถามเมื่อ</small> {{$data->created_at}}</div>
        </div>
        <!--แสดงคำตอบ-->

          @if($data->answer!=null)
        <div class="panel panel-default" style="border-color:#F3E2A9;">
          <div class="panel-heading" style="background-color:#F3E2A9;border-color:#F3E2A9;">
             <h4>คำตอบ</h4>
          </div>
                 <div class="panel-body" style="word-wrap:break-word;background-color:#F7F8E0;border-color:#F3E2A9;">
{!! html_entity_decode($data->answer) !!}
         </div>
        </div>

        @endif
        <!--แสดงคำตอบ-->

    </div>





  </body>
</html>
