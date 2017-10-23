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



    <!--css of picture content
    <link rel="stylesheet" link href="{{url('css/stylep.css')}}">-->
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
          height:360px;
        }

        .thumbnail img {
          width:100% !important;
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
          height: 32px;
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
          position: absolute;
          bottom: 28px;
          right: 100px;
          border-radius: 3px;
        }
        /*บริจาค, ช่วยเหลือ*/
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
          padding: 15px;
        }
        .small, small {
    font-size: 75%;
}
.after{
  position:absolute;top:0px;left:0px;
width:100%;
height:500px;
}

.after2{
  position:absolute;top:610px;left:0px;
width:100%;
height:76%;
}
.after3{
  position:absolute;left:0px;
width:100%;
  z-index:-100;
}
.after4{
  position:absolute;top:1270px;left:0px;
width:100%;
height:90%;
}

.tw{
  font-size: 20px;
}
.tw16{
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
hr.light {
    width:100%;
    margin:0 auto;

    border-top:5px solid lightgray;
}
/*เอาใหม่จังไร*/
.it{
  margin:0;
  padding: 0;
  color: #fff;
  text-align: center;
}

.boxp{
  width:250px;
  height:250px;
  position:relative;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  overflow:hidden;
}
.boxp figure{
  height:100%;
  margin:0;
  padding: 0;

}
.boxp figure img{
  width:100%;
}
.boxp figcaption
{
  margin:0;
padding: 0;
color: #fff;
text-align: center;
  position :absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  box-sizing: border-box;
  padding: 3px 2px;
  z-index: 100;
  opacity: 0;
  transition-delay: .3s;
  transition:.5s ease;
  font-size: 20px;
}
.boxp:hover figcaption
{
  opacity: 1;
}
.boxp figure:before,
.boxp figure:after{
  content:'';
  position:absolute;
  transition: .5s ease-in-out;
  height: 200%;
  width:200%;
  background: #000;
}
.boxp figure:before
{
right: 0;
bottom: 0;
background: #E77471;
transform:skew(45deg) translateX(100%);

}
.boxp figure:after{
left:0;
top: 0;
background: #FF8C00;
transform: skew(-120deg) translateX(-74.6%);
}
.boxp:hover figure:before{
transform: skew(45deg) translateX(0%);
}
.boxp:hover figure:after{
transform: skew(-135deg) translateX(0%);
}


.boxnews{
  width:250px;
  height:250px;
  position:relative;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  overflow:hidden;
}
.boxnews figure{
  height:100%;
  margin:0;
  padding: 0;

}
.boxnews figure img{
  width:100%;
}
.boxnews figcaption
{
  margin:0;
  padding: 0;
  color: #fffff;
  text-align: center;
  position :absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  box-sizing: border-box;
  padding: 3px 2px;
  z-index: 100;
  opacity: 0;
  transition-delay: .3s;
  transition:.5s ease;
  font-size: 20px;
}
.boxnews:hover figcaption
{
  opacity: 1;
}
.boxnews figure:before,
.boxnews figure:after{
  content:'';
  position:absolute;
  transition: .5s ease-in-out;
  height: 200%;
  width:200%;
  background: #000;
}
.boxnews figure:before{
  right: 0;
  bottom: 0;
  background: #ff7f50;
  transform:skew(45deg) translateX(100%);
}
.boxnews figure:after{
  left:0;
  top: 0;
  background: #ffd700;
  transform: skew(-120deg) translateX(-74.6%);
}
.boxnews:hover figure:before{
  transform: skew(45deg) translateX(0%);
}
.boxnews:hover figure:after{
  transform: skew(-135deg) translateX(0%);
}

/*จบจังไร*/
.follow{
  position:fixed;
  top:16%;
  left:-1%;
}



  .lig:hover
	{
		-moz-box-shadow: 0 0 28px #ccc;
		-webkit-box-shadow: 0 0 28px #ccc;
		box-shadow: 5 0 28px #ccc;
  border-radius: 20px;

}
.srollup{
  text-align: right;font-size:30px;
  line-height: 50px;
  color: blue;
  font-weight: bold;
  cursor: pointer;

}
.b{
  background-color: #EFEEEC;
}
.hoverOranger:hover{
 cursor: pointer;
 color: orange;
}


.list-group-item {
    padding: 10px 3px;
    background-color: rgba(245, 239, 239, 0.63);
    border: 4px solid rgba(251, 250, 243, 0.59);
    font-size: 17px;
  }
    </style>

  </head>
  <body>
     <img class="after2" src="images\wg.PNG" alt="">
     <img class="after4" src="images\gray.jpg" alt="">
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

                   <div class="row">
                     <br>
                     <br>
                            <img class="after" src="images\Cee.PNG" >
                       <div class="col-md-9">

                           <div class="row carousel-holder">

                               <div class="col-md-12">
                                   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                       <ol class="carousel-indicators">
                                           <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                           <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                           <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                       </ol>
                                       <div class="carousel-inner">
                                           <div class="item active">
                                               <img class="slide-image" src="\images\animal.png" alt="">
                                           </div>
                                           <div class="item">
                                               <img class="slide-image" src="\images\S__1261615.jpg" alt="">
                                           </div>
                                           <div class="item">
                                               <img class="slide-image" src="\images\puppy.jpg" alt="">
                                           </div>
                                       </div>
                                       <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                           <span class="glyphicon glyphicon-chevron-left"></span>
                                       </a>
                                       <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                           <span class="glyphicon glyphicon-chevron-right"></span>
                                       </a>
                                   </div>
                               </div>

                           </div>





<br>
<br>

<div class="row">
@php($b=0)
  <!-- Related Projects Row -->
    <div class="col-md-12">
      <h3 class="my-4"><b>ขอเชิญร่วมกิจกรรม   </b>    &nbsp;  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;      <span id="click1" class="hoverOranger" >ข่าวสาร</span>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  <span id="click2" class="hoverOranger" >Product</span>
      &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<span id="click3" class="hoverOranger" >Games</span>   &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<span id="click4" class="hoverOranger" >เกี่ยวกับมูลนิธิ</span></h3>
<br><br><br><br><br><br><br>
        <div class="row">

          @foreach($newsAnis as $ac)
                     @if($ac->news_type == 3)
          <div class="col-sm-4 col-lg-4 col-md-4">
@if($b<=6)
            <a href="newsAll">
              <div class="boxp">
                    <i class="fa fa-comment fa-fw"> "{{$ac->head_News}}"</i>
                   <figure>
                   <img src="{{url('/images/'.$ac->act_pic)}}" >
                   <figcaption>{{str_limit($ac->content,80,"..อ่านต่อ")}}
                   </figcaption>
                 </figure>
               </div>
</a>
          </div>
@php($b++)
@else
@endif
      @endif
      @endforeach
    </div>
    </div>
</div>
<p id="div1" ></p>

<div class="row"  >
@php($b=0)
  <!-- Related Projects Row -->
    <div class="col-md-12"  >
<br><br><br>
      <h3 class="my-4"  ><b>ข่าวสาร</b></h3>


<br><br><br><br><br><br>
        <div class="row">

          @foreach($newsAnis as $ac)
                     @if($ac->news_type == 2)
          <div class="col-sm-4 col-lg-4 col-md-4">
@if($b<=6)
            <a href="newsAll">
              <div class="boxnews">
                    <i class="fa fa-comment fa-fw"> "{{$ac->head_News}}"</i>
                   <figure>
                   <img src="{{url('/images/'.$ac->act_pic)}}" >
                   <figcaption>{{str_limit($ac->content,80,"..อ่านต่อ")}}
                   </figcaption>
                 </figure>
               </div>
</a>
          </div>
@php($b++)
@else
@endif
      @endif
      @endforeach


        </div>
    </div>
</div>
</div>


<div class="col-md-3 ro">

  <a  href="dm"><center><img onmouseover="bigImg1(this)" onmouseout="normalImg1(this)" border="0" src="\images\icondonate.png" alt="donateIcon" width="240" height="160"></center></a>

    <p class="lead"><h2><b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="listOfDonor" style="color:white;">รายชื่อผู้บริจาค</b></h2></a></p>
     @php($i=0)
       <div class="list-group">

    @foreach($donor as $donor)
@if($i<20)
            <p class="list-group-item"><small>   {{ str_limit($donor->created_at, $limit = 10, $end = '') }}</small>

                <i class="fa fa-comment fa-fw">{{$donor->name}} &nbsp; {{$donor->sname}}</i>
                <span class="pull-right text-muted small">
                    <em >{{$donor->amount}}฿</em>
                </span>
    </p>
   @php($i++)
 @else

@endif

@endforeach
</div>
</div>


          <div class="col-md-12">
            <p id="div2"><p>
          <br><br><br>
          <hr class="light">
          <br><br>

               <div class="row">

                 <!-- Related Projects Row  -->
                   <div class="col-md-12">
                     <h2 class="my-4" ><b>Product<b> </h2>

                       <div class="row">


                         <div class="col-sm-4 col-lg-4 col-md-4">  plate&screw
                           <div class="thumbnail" >
                             <img src="images\test.JPG" alt="">
                           </div>
                         </div>

                         <div class="col-sm-4 col-lg-4 col-md-4"> เสื้อ
                           <div class="thumbnail">
                             <img src="images\1.JPG" alt="">
                           </div>
                         </div>

                         <div class="col-sm-4 col-lg-4 col-md-4"> ที่นั่ง
                           <div class="thumbnail">
                             <img src="images\fghj.JPG" alt="">
                           </div>
                         </div>

                           <br>
                       </div>

                   </div>
                 <!-- /.row -->

               </div>
               <br><br><br>
  <hr class="light" >
  <br><br><br><br><br>
  <div class="row" id="div3">

    <!-- Related Projects Row -->
      <div class="col-md-12">
        <h2 class="my-4">Games</h2>

          <div class="row">


            <div class="col-sm-4">
              <div >
                <center><img src="images\War-1.PNG" alt="" width="270" height="200"></center>
              </div>
            </div>

            <div class="col-sm-4">
              <div >
                <center><img src="images\Whisperer-1.PNG" alt="" width="270" height="200"></center>
              </div>
            </div>

            <div class="col-sm-4">
              <div >
                <center><img src="images\Shelter-1.PNG" alt="" width="270" height="200"></center><br><br>
              </div>
            </div>
            <br><br>
            <center>
              <img src="/images/grob.png" width="70%" height="70%">
            </center><br>

        <div >
            <a target ="_blank" href="https://itunes.apple.com/us/app/rabies-hunting/id1281934153?l=th&ls=1&mt=8"><center><img src="images\load.png" alt="" width="250" height="80"></center></a>
            </div>
            <div >
            <a target ="_blank" href="https://play.google.com/store/apps/details?id=th.co.progaming.rabieshunting" ><center><img src="images\load2.png" alt=""width="250" height="80" ></center></a>
            </div>  </center>
              <br>
          </div>
      </div>
    <!-- /.row -->

  </div>
 <!-- </div> -->



<!-- </div> -->

<!-- /.container -->
<!-- Related Projects Row -->
  <div class="col-md-12">
    <h3 class="my-4">ประเภทการบริจาค</h3>
    <br>
      <div class="row">

        <div class="col-sm-4">
          <div >
            <a  href="donate"><center><img  class="lig" src="images\Picture2.png" alt="donateIcon" width="260" height="170" style=""></center><a>
          </div>
        </div>

        <div class="col-sm-4">
          <div >
              <a  href="db"><center><img class="lig" src="images\Picture3.png" alt=""width="260" height="170"></center></a>
          </div>
        </div>

        <div class="col-sm-4">
          <div  >
            <a  href="da"><center id="div4"><img class="lig" src="images\Picture4.png" alt=""width="260" height="170"></center></a>
          </div>
        </div>
      </div>
      <br ><br>
  </div>
<!-- /.row -->
<!-- </div> -->
 <!-- <img class="after3" src="images\wg.PNG" alt=""> -->

     <!-- Related Projects Row -->
       <div class="col-md-12 b"  >

         <br><center><h2 class="my-4">เกี่ยวกับมูลนิธิ</h2></center>
             <h3>ชื่อภาษาไทย มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน (สปฉ.) <br>
             ชื่อภาษาอังกฤษ Animal in Disaster and Emergency Foundation (ADEF) <br></h3>
             <h4>สำนักงานใหญ่ของมูลนิธิ ตั้งอยู่ที่ เลขที่ 10/5 ถนนอู่ทอง ตำบลหอรัตนไชย อำเภอพระนครศรีอยุธยา จังหวัดพระนครศรีอยุธยา</h4>
             <h3>วัตถุประสงค์ของมูลนิธิ</h3>
             <h4>1. เพื่อส่งเสริมสร้างขีดความสามารถของกลุ่มคนที่สนใจเกี่ยวกับการป้องกัน รักษา ฟื้นฟู สัตว์ที่ประสบภัยและเหตุฉุกเฉิน <br>
                 2. เพื่อส่งเสริม สนับสนุน การศึกษา ค้นคว้า อบรม วิจัย พัฒนาและเผยแพร่สู่สากล <br>
                 3.	เพื่อดำเนินการให้สัตว์ที่ประสบภัยและเหตุฉุกเฉินสามารถเข้าถึงระบบบริการได้อย่างทั่วถึง และทันท่วงที <br>
                 4.	เพื่อดำเนินการให้สัตว์ที่ประสบภัยและเหตุฉุกเฉิน ให้สามารถดำรงชีวิตต่อไปได้อย่างเหมาะสม <br>
                 5. เพื่อประกาศเกียรติคุณและให้รางวัลแก่ผู้ปฏิบัติหน้าที่โดยสุจริต เสียสละ ในภาครัฐและภาคเอกชนที่เป็นประโยชน์ต่อส่วนรวมและประเทศชาติ <br>
                 6. ดำเนินการหรือร่วมมือกับองค์กรการกุศลเพื่อการกุศล และองค์กรสาธารณประโยชน์ เพื่อสาธารณประโยชน์ <br>
                 7. ดำเนินการหรือร่วมมือกับองค์กรเอกชนที่มีกิจกรรม หรือโครงการเพื่อการกุศล หรือสาธารณประโยชน์
                 8.	ไม่ดำเนินการเกี่ยวข้องกับการเมืองแต่ประการใด <br>
                 9. สนับสนุนกิจกรรมตามนโยบายของรัฐบาลที่เกี่ยวข้องกับสัตว์ และการให้ความรู้ด้านการศึกษาสู่ประชาชน <br></h4>
             <h3>ติดต่อมูลนิธิ</h3>
             <h4>โรงพยาบาลสัตว์ มหาวิทยาลัยเกษตรศาสตร์ บางเขน</h4>
             <h4>ถนนงามวงค์วาน แขวงลาดยาว เขตจตุจักร กรุงเทพมหานคร 10900</h4>
             <h4>โทรศัพท์ 02-797-1900</h4>

       </div>

       <div class="srollup wording"><img src="/images/arr.gif" width="1%" height="8%"><img src="/images/up.png" width="10%" height="10%"></div>
     <div class="col-md-12">
       <div class="row">
 <br><br>
            <center><h2 class="my-4">ร่วมช่วยเหลือสัตว์ประสบภัย</h2>
              <h3>ขอเชิญร่วมกันบริจาคเพื่อช่วยเหลือสัตว์ที่ประสบภัยโดยการดำเนินการป้องกัน รักษา ฟื้นฟูสัตว์ป่วย
              สัตว์ที่ประสบภัยและเหตุฉุกเฉิน ให้สามารถดำรงชีวิตต่อไปได้อย่างเหมาะสม โดยสามารถบริจาคได้ที่</h3>
            </center>
         <div class="col-sm-6">
           <h4><p>ธนาคารกรุงเทพ สาขาบิ๊กซี อยุธยา</p>
             <ul>
               <li>ชื่อบัญชี มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน</li>
               <li>บัญชีเลขที่ 790-020373-3</li>
             </ul>
           </h4>
         </div>

         <div class="col-sm-6">
           <h4><p>ธนาคารกรุงไทย สาขามหาวิทยาลัยเกษตรศาสตร์ บางเขน</p>
             <ul>
               <li>ชื่อบัญชี มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน</li>
               <li>บัญชีเลขที่ 986-4-399968-3</li>
             </ul>
           </h4>

         </div>
       </div>
     </div>
</div>
   </div>



       <!-- Footer -->
       <footer>
           <div class="row ">
               <div class="text-center col-lg-12">
                 <hr>
                   <p>Copyright &copy; Your Website 2017</p>

               </div>
           </div>
       </footer>

   </div>
   <!-- /.container -->

   <div class="follow">
    <a  href="donate"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="\images\cl.png" alt="donateIcon" width="200" height="60"></a>
   </div>

    </body>

</html>
<script>

function bigImg(x) {
    x.style.height = "100px";
    x.style.width = "260px";
}

function normalImg(x) {
    x.style.height = "60px";
    x.style.width = "200px";
}
function bigImg1(x) {
    x.style.height = "170px";
    x.style.width = "270px";
}

function normalImg1(x) {
    x.style.height = "160px";
    x.style.width = "240px";
}

$(".srollup").click(function(){
  $("body,html").animate({scrollTop:0},1000);
});

$(document).ready(function(){
  $('#click1').click(function(){
    $('html,body').animate({
      scrollTop: $('#div1').offset().top},1000);
    })

$('#click2').click(function(){
    $('html,body').animate({
      scrollTop: $('#div2').offset().top},1000);
    })
    $('#click3').click(function(){
        $('html,body').animate({
          scrollTop: $('#div3').offset().top},1000);
        })
        $('#click4').click(function(){
            $('html,body').animate({
              scrollTop: $('#div4').offset().top},1000);
            })

  })




</script>
