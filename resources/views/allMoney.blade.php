<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>การขอรับบริจาคเงิน</title>

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
  background-image: linear-gradient(to bottom,	#E5E4E2 0,	#B6B6B4 100%);
}
/*จบเนป*/
/*bank*/
.donate-box-header{
  font-weight: bold;
  display: inline;
}
/*.left-tab{
  float: left;
}

.right-tab{
  float: right;
}*/


.bank-list-item{
  list-style: none;
  overflow: hidden;
  padding: 1rem 0;
  border-bottom: 1px solid #ebebeb;
  cursor: pointer;
}

.paytype{
  width: 7rem;
  float: left;
  line-height: 2.4rem;
}
.paytype > img{
  width: 100%;
}

.payname{
  color: #000;
  float: left;
  margin-left: 1rem;
}

.selected-bank{
  display: none;
}

.selected-bank h3, img {
    display: block;
    margin: 0 auto;
    text-align: center;
    line-height: 5rem;
}

.selected-bank > img{
  width: 7rem;
}
/*endBank*/

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

                   <li class="navmain active">
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

   <!-- Page Content -->


               <div class="container">
                 <!-- Page Heading -->
                 <div class="row">
                     <div class="col-lg-12">
                         <h1 class="page-header">ช่องทางการบริจาคเงิน</h1>
                     </div>
                 </div
                 <!-- /.row -->

                 <div class="row text-center">

                     <div class="col-lg-12">
                       <h2>บริจาคเงินผ่านทาง iBanking</h2>
                       <h3>ชื่อบัญชี มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน</h3>
                       <h4>ผ่านบัญชีออมทรัพย์ ธนาคารกรุงไทย สาขามหาวิทยาลัยเกษตรศาสตร์ บางเขน</h4>
                       <h3>บัญชีเลขที่ 986-4-399968-3</h3>
                       <br>

                     </div>
                   </div>

                   <div class="row">
                     <!-- DONATE BOX -->
                       <div class="col-md-6 col-md-offset-3">
                         <div class="donate-box">
                             <div class="donate-box-header">
                               <div class="left-tab">
                                 ธนาคารออนไลน์
                               </div>
                               <!-- <div class="right-tab">
                                 บัตรเครดิต
                               </div> -->
                             </div>
                             <div class="donate-box-content">
                               <div class="selected-bank">
                                 <input type="hidden" id="bankcode" value="">
                                 <div class="row">
                                   <div class="col-md-12 getBankSelected">
                                     <h3></h3>
                                     <img src="" alt="" />
                                   </div>
                                 </div>
                                 <div class="row">
                                   <div class="row">
                                     @if (Auth::guest())
                                       <div class="col-md-6">
                                       <label for="">ชื่อ</label>
                                       <input type="text" class="form-control" id="name" placeholder="ชื่อ"/>
                                     </div>

                                     <div class="col-md-6">
                                       <label for="">นามสกุล</label>
                                       <input type="text" class="form-control" id="sname" placeholder="นามสกุล"/>
                                     </div>
                                   </div>

                                   <div class="row">
                                     <div class="col-md-12">
                                       <label for="">เบอร์โทรศัพท์ (กรอกตามความจริงเพื่อรับ SMS ยืนยันการบริจาคเงิน)</label>
                                       <input type="tel" class="form-control" id="tel" placeholder="โทรศัพท์" pattern="[0-9]{10}" required/>
                                     </div>
                                   </div>

                                      @else
                                    <div class="col-md-6">
                                      <label for="">ชื่อ</label>
                                      <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}"/>
                                    </div>

                                    <div class="col-md-6">
                                      <label for="">นามสกุล</label>
                                      <input type="text" class="form-control" id="sname" placeholder="นามสกุล"/>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-12">
                                      <label for="">เบอร์โทรศัพท์ (กรอกตามความจริงเพื่อรับ SMS ยืนยันการบริจาคเงิน)</label>
                                      <input type="tel" class="form-control" id="tel" value="{{ Auth::user()->tel }}" required/>
                                    </div>
                                  </div>

                                  @endif
                                   <div class="row">
                                     <div class="col-md-12">
                                       <label for="">จำนวนเงิน</label>
                                       <input type="email" class="form-control" id="amount" placeholder="จำนวนเงินต้องมากกว่า 20 บาท"/>
                                     </div>
                                   </div>
                                   <div class="row">
                                     <div class="col-md-6 col-md-offset-3 text-center" style="padding: 1rem;">
                                       <button id="submit-donate-btn" type="button" class="btn btn-success">ยืนยัน</button>
                                       <button id="cancel-donate-btn" type="button" class="btn btn-danger">ยกเลิก</button>
                                     </div>
                                   </div>
                                 </div>
                               </div>

                               <ul class="bank-list">
                                 <li class="bank-list-item">
                                   <div class="paytype">
                                       <img src="{{url('/images/logos/ayud.png')}}" alt="" />
                                   </div>
                                   <div class="payname">ธนาคารกรุงศรี</div>
                                 </li>
                                 <li class="bank-list-item">
                                   <div class="paytype">
                                       <img src="{{url('/images/logos/bkk.png')}}" alt="" />
                                   </div>
                                   <div class="payname">ธนาคารกรุงเทพ</div>
                                 </li>
                                 <li class="bank-list-item">
                                   <div class="paytype">
                                       <img src="{{url('/images/logos/ktb.png')}}" alt="" />
                                   </div>
                                   <div class="payname">ธนาคารกรุงไทย</div>
                                 </li>
                                 <li class="bank-list-item">
                                   <div class="paytype">
                                       <img src="{{url('/images/logos/scb.png')}}" alt="" />
                                   </div>
                                   <div class="payname">ธนาคารไทยพาณิชย์</div>
                                 </li>
                               </ul>
                             </div>
                         </div>
                       </div>
                     <!-- DONATE BOX -->
                   </div>
                   {{--
                      <div class="col-lg-12" style="background-color: #EFFBFB;padding:30px 40px;">
                         <h3><b style="font-size: 32px;">Omise </b> &nbsp;เป็น Payment Gateway<h3>
                       <h2>บริจาคเงินผ่านทางบัตรเครดิต</h2>
                       <h3>เราได้เลือก Omise เป็นช่องทางการในการบริจาคเงินออนไลน์</h3>
                       <h3>ผู้ใช้จะปลอดภัยจากการปลอมแปลง หรือเก็บข้อมูลบัตรเครดิต เพราะมีเทคโนโลยีตรวจสอบข้อมูลว่า เป็นข้อมูลจริงหรือไม่</h3>
                       <h3>ทำให้ไม่มีเรื่องการกรอกข้อมูลปลอมได้ ระบบของเราไม่จำเป็นต้องเก็บข้อมูลบัตรเครดิตของผู้ใช้ไว้</h3>
                       <h3>เพราะ Token จะเป็นตัวแทนข้อมูลบัตรเครดิตของผู้ใช้ที่ถูกเข้ารหัสไว้แล้ว </h3> --}}



         <!-- data-key="pkey_test_57gpwuk3sm7mirumtsx" -->
<br><h1>สัตว์ที่ได้รับการช่วยเหลือแล้ว</h1><br><br>
                   <div class="row">

                       <div class="col-md-9">




               <div class="row">

                  @foreach($animalsMoneys as $animal)
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
                              <div>
                                <button type="button" class="btn btn-primary btn-sm box" data-toggle="modal" data-target="#myModal{{$animal->animal_id}}">ดูรายละเอียด</button>
                                <button type="button" class="btn btn-primary btn-sm box2">
                                  <a style="color: white;" href="donate">ช่วยเหลือ</a></button>
                              </div>

                              <!--Modal-->
                              <div class="modal fade" id="myModal{{$animal->animal_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <center><h4 class="modal-title" id="myModalLabel" >{{$animal->join_donationType->do_typeName}} to  {{$animal->animal_type}}</h4></center>
                                    </div>
                                    <div class="modal-body box3">
                                       <img src="{{url('/images/'.$animal->animal_picture)}}" alt="">
                                       <br>
                                      ประเภทของการขอรับบริจาค:

                               @if($animal->join_donationType->do_typeName=='Donation Money')
                               ขอรับบริจาคเงิน
                             @elseif($animal->join_donationType->do_typeName=='Blood Donation')
                               ขอรับบริจาคเลือด
                             @else
                                หาบ้านให้สัตว์
                              @endif
                                      <br>
                                      ชื่อสัตว์:{{$animal->animal_name}}<br>
                                      อายุ        :{{$animal->animal_age}} ปี<br>
                                      ชนิดของสัตว์ :{{$animal->animal_type}}<br>
                                      สี :{{$animal->animal_color}}<br>
                                      @if($animal->animal_gender == 1)
                                          เพศ :เพศเมีย<br>
                                      @else
                                          เพศ :เพศผู้<br>
                                      @endif

                                      ลักษณะอาการ :{{$animal->symptomCase}}<br>
                                       สถานะการเปิดขอรับ :{{$animal->statusDonation}}<br>
                                      @foreach($admins as $admin)
                                        @if($animal->admin_id==$admin->admin_id)
                                             @foreach($hospitals as $hos)
                                                @if($admin->hospital_id==$hos->hospital_id)
                                                 <span style="color:#8000FF">    {{$admin->join_Hospital->hospital_name}}&nbsp; @if($admin->join_Hospital->hospital_account=='043-7-12167-6 กองทุนรักษาพยาบาลสัตว์ป่วยอนาถา') 043-7-12167-6
                                                 @else
                                                 {{$admin->join_Hospital->hospital_account}}
                                         @endif

                                         </span>
                                                @endif
                                             @endforeach
                                        @endif
                                      @endforeach


                                    </div>
                                    <div class="modal-footer">
                                      <!-- <button type="button" class="btn btn-default bori" data-dismiss="modal">ปิด</button> -->
                                      <button type="button" class="btn btn-primary bori"><a style="color: white;" href="donate">บริจาค</a></button>
                                      <button type="button" class="btn btn-default bori" data-dismiss="modal">ปิด</button>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                              <!-- Modal -->

                           </div>
                       </div>
                     </div>
                @endforeach









               </div>

           </div>
           <div class="col-md-3 ro">


             <a  href="dm"><img onmouseover="bigImg1(this)" onmouseout="normalImg1(this)" border="0" src="\images\icondonate.png" alt="donateIcon" width="240" height="160"></a>

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



   <script>
   function bigImg(x) {
       x.style.height = "170px";
       x.style.width = "270px";
   }

   function normalImg(x) {
       x.style.height = "160px";
       x.style.width = "240px";
   }
   </body>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
   <script>
   $(document).ready(function()
   {
     $('ul.bank-list li').click(function(e)
       {
        const bankName = $(this).find("div.payname").text();
        let bankCode = '';
        let bankLogo = '';
        switch (bankName) {
          case 'ธนาคารกรุงศรี':
            bankCode = 'internet_banking_bay'
            bankLogo = '{{url('/images/logos/ayud.png')}}'
            break;
          case 'ธนาคารกรุงเทพ':
            bankCode = 'internet_banking_bbl'
            bankLogo = '{{url('/images/logos/bkk.png')}}'
            break;
          case 'ธนาคารกรุงไทย':
            bankCode = 'internet_banking_ktb'
            bankLogo = '{{url('/images/logos/ktb.png')}}'
            break;
          case 'ธนาคารไทยพาณิชย์':
            bankCode = 'internet_banking_scb'
            bankLogo = '{{url('/images/logos/scb.png')}}'
            break;
          default:
             bankCode = null
        }
        $('.bank-list').css('display', 'none')
        $('#bankcode').val(bankCode)
        $('.getBankSelected > h3').text(bankName);
        $('.getBankSelected > img').attr('src', bankLogo);
        $('.selected-bank').css('display', 'block')
        console.log('bankLogo is ', bankLogo)
       });

       $('#cancel-donate-btn').click(function(e){
         e.preventDefault();
         console.log('eeee')
         $('.selected-bank').css('display', 'none')
         $('.bank-list').css('display', 'block')
       })

       $('#submit-donate-btn').click(function(e){
         const name = $('#name').val()
         const surname = $('#sname').val()
         const tel = $('#tel').val()
         const amount = $('#amount').val()*100
         const bankCode = $('#bankcode').val()
         const data = {
           amount: amount,
           name: name,
           sname: surname,
           tel: tel,
           bank: bankCode
         }
         fetch("{{url('/charge')}}", {
           method: 'POST',
           body: JSON.stringify(data)
         }).then(res => {
           return res.json();
         }).then(json => {
           return window.location.href = json.url
         }).catch(err => {
           console.log('error ',err)
         })
       })

   })


   </script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <!-- Bootstrap Core JavaScript -->
  <!--old - -   <script src="https://blackrockdigital.github.io/startbootstrap-shop-homepage/js/bootstrap.min.js"></script>
    </body>
</html>
