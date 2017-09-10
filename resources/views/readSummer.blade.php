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
    <title>summer Note</title>
    {{Html::style('css/shop-homepage.css')}}<!--ตรงนี้คือฟ้อนแบบไม่มีหัว-->
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
               <a class="navbar-brand"  style="font-size:20px;"  href="/all">Animals A-I-D</a>
           </div>
           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                   <li >
                       <a href="/dm">การบริจาคเงิน</a>
                   </li>
                   <li>
                       <a href="/db">การบริจาคเลือด</a>
                   </li>
                   <li>
                       <a href="/da">หาบ้านให้สัตว์</a>
                   </li>
                   <li  >
                       <a href="/newsAll">ข่าวสารและกิจกรรม</a>
                   </li>
                   <li class="active" >
                       <a href="/allQuestions">สอบถามผู้รู้เกี่ยวกับสัตว์เลี้ยง</a>
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
                             <a href="/userProfile">ข้อมูลส่วนตัวผู้ใช้ </a>
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
                            <a href="/adminProfile">ข้อมูลส่วนตัวแอดมิน</a>
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
        <div class="panel panel-default">
           <div class="panel-heading">
              <h4>Read Information </h4>
           </div>
                 <div class="panel-body" style="word-wrap:break-word;">
                   <h1>{{$data->topic}}</h1>
                   <hr>

                     {{$data->content}}

                 </div>
        </div>
    </div>





  </body>
</html>
