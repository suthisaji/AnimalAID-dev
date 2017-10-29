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
                       <a href="webshop">สั่งซื้อของที่ระลึก</a>
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



   <!-- Page Content -->
   <!-- <div class="container">

       <div class="row">

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
                             @php($i=0)
                              @foreach($animals as $animal)
                               @if(empty($animal->join_Adoption->animal_id) && $animal->doType_id == 3 &&$animal->statusDonation=='-' )
                                 @php($i=$i+1)
                                    @if($i==1)
                                      <div class="item active"  data-toggle="modal" data-target="#myModal{{$animal->animal_id}}">
                                          <img class="slide-image" src="{{url('/images/'.$animal->animal_picture)}}" alt="" a href="_blank">
                                      </div>
                                    @else
                                      <div class="item" data-toggle="modal" data-target="#myModal{{$animal->animal_id}}">
                                          <img class="slide-image" src="{{url('/images/'.$animal->animal_picture)}}" alt="">

                                      </div>
                                    @endif
                              @endif
                           @endforeach



                                                      <marquee>

                                                       @foreach($newsAnis as $fastNews)
                                                         @if($fastNews->news_type == 1)
                                                        "{{$fastNews->head_News}} " &nbsp;{{$fastNews->content}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                         @endif

                                                          @endforeach
                                                          </marquee>

                           </div>
                           <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                               <span class="glyphicon glyphicon-chevron-left"></span>
                           </a>
                           <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                               <span class="glyphicon glyphicon-chevron-right"></span>
                           </a>
                       </div>
                   </div>

               </div> -->


               <div class="container">
<br><br>
                   <div class="row">

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


               <div class="row">

                  @foreach($animals as $animal)
                  {{--  {{$animal->join_Adoption->animal_id}}--}}
                  @if(empty($animal->join_Adoption->animal_id) && $animal->doType_id == 3 && $animal->statusDonation != 'CloseAdoption')
                   <div class="col-sm-4 col-lg-4 col-md-4">
                       <small>{{$animal->created_at}}</small>
                       <div class="thumbnail">
                           <img src="{{url('/images/'.$animal->animal_picture)}}" alt="">
                           <div class="caption">

                             <h5>
                               @if($animal->join_donationType->do_typeName=='Donation Money') ขอรับบริจาคเงิน
                               @elseif($animal->join_donationType->do_typeName=='Blood Donation') ขอรับบริจาคเลือด
                               @else หาบ้านให้สัตว์
                               @endif
                               <span style="color:blue">{{$animal->animal_name}}</span> &nbsp;&nbsp; {{$animal->animal_type}}
                             </h5>

                             <!-- <h6>{{$animal->animal_type}}</h6> -->
                             <h5>{{$animal->symptomCase}}</h5>

                             @foreach($admins as $admin)
                               @if($animal->admin_id==$admin->admin_id)
                                    @foreach($hospitals as $hos)
                                       @if($admin->hospital_id==$hos->hospital_id)
                                        <!-- <h6><span style="color:#8000FF">
                                          {{$admin->join_Hospital->hospital_name}}&nbsp;
                                          @if($admin->join_Hospital->hospital_account=='043-7-12167-6 กองทุนรักษาพยาบาลสัตว์ป่วยอนาถา') 043-7-12167-6
                                          @else{{$admin->join_Hospital->hospital_account}}
                                          @endif
                                        </span></h6> -->
                                       @endif
                                    @endforeach
                               @endif
                             @endforeach





                               <!-- Button trigger modal -->
                             <div class="row text-right">
                           <button type="button" class="btn btn-primary btn-sm box" data-toggle="modal" data-target="#myModal{{$animal->animal_id}}">
                             ดูรายละเอียด</a>
                           </button>
                          <button id="take0{{$animal->animal_id}}" type="button" class="btn btn-lg btn-success rub" data-toggle="popover" data-placement="top">รับเลี้ยง</button>
                          <script>
                                $('#take0{{$animal->animal_id}}').popover({
                                  html: true,
                                  title: 'กรุณาเพิ่มที่อยุ่ในการเลี้ยงสัตว์ ',
                                  content: function(){
                                      return $('#modal-content{{$animal->animal_id}}').html()
                                  }
                                })
                          </script>
                           <!--Modal-->
                           <div class="modal fade" id="myModal{{$animal->animal_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                             <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   <center><h4 class="modal-title" id="myModalLabel" >{{$animal->join_donationType->do_typeName}} to  {{$animal->animal_type}} </h4></center>
                                 </div>
                                 <div class="modal-body box3">
                                    <center><img src="{{url('/images/'.$animal->animal_picture)}}" alt=""></center><br>

                                   ประเภทของการขอรับบริจาค:
                               @if($animal->join_donationType->do_typeName=='Donation Money')
                               ขอรับบริจาคเงิน
                             @elseif($animal->join_donationType->do_typeName=='Blood Donation')
                               ขอรับบริจาคเลือด
                             @else
                                หาบ้านให้สัตว์
                              @endif<br>
                                   ชื่อสัตว์:{{$animal->animal_name}}<br>
                                   อายุ        :{{$animal->animal_age}} ปี<br>
                                   ชนิดของสัตว์ :{{$animal->animal_type}}<br>
                                   สี :{{$animal->animal_color}}<br>
                                   @if($animal->animal_gender == 1)
                                     เพศ :เพศผู้<br>
                                   @else
                                       เพศ:เพศเมีย<br>
                                   @endif

                                  ลักษณะอาการ  :{{$animal->symptomCase}}<br>
                                    สถานะการเปิดขอรับ :{{$animal->statusDonation}}<br>
                                   @foreach($admins as $admin)
                                     @if($animal->admin_id==$admin->admin_id)
                                          @foreach($hospitals as $hos)
                                             @if($admin->hospital_id==$hos->hospital_id)
                                              <span style="color:#8000FF">    {{$admin->join_Hospital->hospital_name}}</span>
                                             @endif
                                          @endforeach
                                     @endif
                                   @endforeach


                                 </div>
                                 <div class="modal-footer">
                                   <!-- <button type="button" class="btn btn-default bori" data-dismiss="modal">ปิด</button> -->
                                   <button id="take{{$animal->animal_id}}" type="button" class="btn btn-primary bori" data-toggle="popover" data-placement="top">รับเลี้ยง</button>
                                   <button type="button" class="btn btn-default bori" data-dismiss="modal">ปิด</button>

                                   <script>
                                         $('#take{{$animal->animal_id}}').popover({
                                           html: true,
                                           title: 'Please add Your address ',
                                           content: function(){
                                               return $('#modal-content{{$animal->animal_id}}').html()
                                           }
                                         })
                                   </script>
                                   <div id="modal-content{{$animal->animal_id}}" style="display:none;">
                                     @if (Auth::guest())
                                       <a href="{{ route('login') }}" class="btn btn-sm btn-success">เข้าสู่ระบบ</a>
                                       <a href="{{ route('register') }}" class="btn btn-sm btn-warning">สมัครสมาชิก</a>
                                     @else
                                     <form class="form" action="/addAdoption" method="post">
                                       <input type="hidden" name="animal_id" value="{{$animal->animal_id}}">
                                         {{ Form::token() }}
                                         <div class="form-group">
                                             <label for=""> <h4 style="color:blue;"> ขอบคุณครับ &nbsp; {{Auth::user()->name}}</h4> </label>
                                         </div>
                                         <div class="form-group">
                                             <label for="">หมายเลขโทรศัพท์</label>
                                             <input class="form-control" type="tel" name="tel" value="{{Auth::user()->tel}}"/>

                                         </div>
                                         <div class="form-group">
                                              <label for="address">เพิ่มที่อยุ่</label>
                                              <textarea class="form-control" name="address" id="address" rows="3" required></textarea>
                                        </div>

                                         <div class="form-group">
                                             <label for="date" class="form-label">วันที่และเวลาที่มารับสัตว์</label>
                                             <input type="datetime-local" class="form-control" name="date_time"  required />
                                         </div>
                                         <div class="form-group">
                                             กรุณารอการติดต่อจากเจ้าหน้าที่เพื่อตรวจสอบและยืนยัน

                                         </div>
                                        <input type='hidden' name='status' value='Recipient' />
                                         <div class="text-center">
                                             <button class="btn btn-success" >ยืนยัน</button>
                                         </div>
                                     </form>
                                   @endif
                                 </div>



                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                           </div>
                       </div>
                     </div>
                   @endif
                @endforeach
  <!-- Modal -->






               </div>

           </div>
           <div class="col-md-3 ro">

             <a  href="dm"><center><img onmouseover="bigImg1(this)" onmouseout="normalImg1(this)" border="0" src="\images\icondonate.png" alt="donateIcon" width="240" height="160"><center></a>

               <p class="lead"><a href="listOfDonor">รายชื่อผู้บริจาค</a></p>
                @php($i=0)
                  <div class="list-group">

               @foreach($donor as $donor)
         @if($i<20)
                       <p class="list-group-item"><small>   {{ str_limit($donor->created_at, $limit = 10, $end = '') }}</small>

                           <i class="fa fa-comment fa-fw">{{$donor->name}} &nbsp; {{$donor->sname}}</i>
                           <span class="pull-right text-muted small">
                               <em>{{$donor->amount}}฿</em>
                           </span>
               </p>
              @php($i++)
            @else

         @endif

@endforeach
           </div>
       </div>


       </div>

   </div>
   <!-- /.container -->

   <!-- <div class="container">

       <hr> -->

       <!-- Footer -->
       <!-- <footer>
           <div class="row">
               <div class="text-center col-lg-12">
                   <p>Copyright &copy; Your Website 2017</p>
               </div>
           </div>
       </footer>

   </div> -->
   <!-- /.container -->



    <!-- jQuery first, then Tether, then Bootstrap JS. -->

    <!--<script src="tether-1.3.3\dist\js\tether.min.js"></script>-->


    </body>
</html>
