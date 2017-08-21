<!DOCTYPE html>
<html lang="en">
<title>ALL Donation</title>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--bootstrap link-->

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  <!--bootstrap link end-->



    <!-- Bootstrap Core CSS -->
    <!-- -old- old <link href="https://blackrockdigital.github.io/startbootstrap-shop-homepage/css/bootstrap.min.css" rel="stylesheet">-->


    <!-- Custom CSS -->
    <!--old - - - <link href="https://blackrockdigital.github.io/startbootstrap-shop-homepage/css/shop-homepage.css" rel="stylesheet">-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <!-- Custom Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
{{Html::style('css/shop-homepage.css')}}
    <!-- Bootstrap Core JavaScript -->
    <!--old- - -<script src="https://blackrockdigital.github.io/startbootstrap-shop-homepage/js/bootstrap.min.js"></script>-->


    <style type="text/css">
        .carousel-inner > .item > img {
  width:700;
  height:300px;
}
.thumbnail img {
    width:100% !important;
    height: 200px !important;

}
.caption{
  height: 150px;
}
.thumbnailjam img {
    width:100% !important;
    height: 300px !important;
}
.modal-title {
    text-align: left;
}
.modal-body {
    text-align: left;
}
.box1{
  position:absolute;
  bottom: 33px;
  right:100px;
  font-size: 14px;
}
.box2{
  position:absolute;
  bottom: 33px;
  right:30px;
  font-size: 14px;

}
.popover{
  max-width: none;
  width: 300px;
}
.ro{
  position:absolute;

  right:4px;
}
li{
  font-size: 22px;
}
.bori{
  font-size: 17px;
}
.fl{
  font-size: 18px;
}
.rub1{
       padding: 5px 6px;
      font-size: 14px;
      position:absolute;
      bottom: 17px;
      right:88px;
      border-radius: 3px;
}
.rub2{
       padding: 6px 10px;
      font-size: 15px;
      position:absolute;
      bottom: 33px;
      right:25px;
      border-radius: 3px;
}
.container{
  width:1200px;
}
body{
  font-size: 16px;
}
.col-md-10 {
    width: 85%;
}


.col-md-10 {
    width: 80%;
}
.col-md-3 {
    width: 27%;
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
               <a  style="font-size:20px;" class="navbar-brand" href="all">Animals A-I-D</a>
           </div>
           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">

                   <li>
                       <a href="dm">การบริจาคเงิน</a>
                   </li>
                   <li>
                       <a href="db">การบริจาคเลือด</a>
                   </li>
                   <li>
                       <a href="da">หาบ้านให้สัตว์</a>
                   </li>





               </ul>
               <ul class="nav navbar-nav navbar-right">
                 @if(!empty($position))
                   @if( $position== 'admin')
                     <li class="fl">
                       <a href="admin">การจัดการ</a>
                    </li>



                   @endif
                 @endif

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

   <!-- Page Content -->


   <div class="container">
     <!-- Page Heading -->
         <div class="row">
             <div class="col-lg-12">
                 <h1 class="page-header">ข่าวสาร</h1>

             </div>
         </div>




              @foreach($news as $new)

          {{--{{$new->news_id}}</td>
                <td>{{$new->admin_id}}--}}

                <b style="font-size:23px;">{{$new->head_News}}</b>
             &nbsp;   <small >{{$new->created_at}}</small><br>
               <p> <span style="font-size:18px;">{{$new->content}}</span></p><br>

                <br>   <br>   <br>

              <!--  <td>{{--{{$new->updated_at}}--}}</td>-->


              @endforeach

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
