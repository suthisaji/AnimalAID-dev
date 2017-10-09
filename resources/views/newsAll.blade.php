<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>การขอรับบริจาคทั้งหมด</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" link href="{{url('css/bootstrap.css')}}">
        <link rel="stylesheet" link href="{{url('css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('/css/shop-homepage.css')}}"/>
    <link rel="stylesheet" href="{{url('/css/index.css')}}"/>

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
          width:100% !important;
          height: 200px !important;
        }

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


   <!-- Page Content -->


   <div class="container">
     <!-- Page Heading -->

     <div class="row">
         <div class="col-sm-6" style="background-color:#FFF4EA;">
             <h1 class="page-header">ข่าวสาร</h1>
             <div class="list-group-item">
             @foreach($news as $new)
                @if($new->news_type==2||$new->news_type==1)
         {{--{{$new->news_id}}</td>
               <td>{{$new->admin_id}}--}}

               <b style="font-size:23px;">{{$new->head_News}}</b>
            &nbsp;   <small >{{$new->created_at}}</small><br>
            <center><img src="{{url('/images/'.$new->act_pic)}}" alt="" width="55%" height="55%"><br><br></center>
              <p> <span style="font-size:18px;">{{$new->content}}</span></p>

               <hr><br>

             <!--  <td>{{--{{$new->updated_at}}--}}</td>-->
             @endif

             @endforeach
           </div>
           <br>
         </div>

         <div class="col-sm-6" style="background-color:#FFF9CE;">
            <h1 class="page-header">กิจกรรม</h1>
            <div class="list-group-item">
            @foreach($news as $new1)
      @if($new1->news_type==3)

        <b style="font-size:23px;">{{$new1->head_News}}</b>
        &nbsp;   <small >{{$new1->created_at}}</small><br>
        <center><img src="{{url('/images/'.$new1->act_pic)}}" alt="" width="55%" height="55%"><br><br></center>
       <p> <span style="font-size:18px;">{{$new1->content}}</span></p>

        <hr><br>
       @endif
   @endforeach
 </div>
 <br>
         </div>
     </div>

        </div>





       <hr>

       <!-- Footer -->
       <footer>
           <div class="row ">
               <div class="text-center col-lg-12">
                   <p>Copyright &copy; Your Website 2017</p>
               </div>
           </div>
       </footer>

   </div>
   <!-- /.container -->
    </body>

</html>
