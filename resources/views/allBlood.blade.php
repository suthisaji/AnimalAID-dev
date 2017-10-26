<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>การขอรับบริจาคเลือด</title>

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
        .video-wrapper {
	         position: relative;
	         padding-bottom: 56.25%; /* 16:9 */
	         padding-top: 25px;
	         height: 0;
         }

         .video-wrapper object,
         .video-wrapper embed,
         .video-wrapper iframe {
	          position: absolute;
	          top: 0;
	          left: 0;
	          width: 100%;
	          height: 100%;
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
          }

          .small, small{
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
          .tran {
          color: #000000;
          background-color: #ffffff;
         opacity: 0.8;
         filter: alpha(opacity=60); /* For IE8 and earlier */
          }
    </style>
  </head>

  <body >
  <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> <a  class="navbar-brand" href="all">   <img src="images/S__1261612.jpg" width="60" height="60" class="d-inline-block align-top" alt=""></a>
       <div class="container">
           <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <!-- <a class="navbar-brand"  style="font-size:20px;"  href="all">Animals A-I-D</a> -->
           </div>
           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse tw" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                 <li class="navmain">
                     <a href="all">หน้าหลัก</a>
                 </li>
                   <li class="navmain">
                       <a href="dm">การบริจาคเงิน</a>
                   </li>
                   <li class="navmain ">
                       <a href="webshop">ของที่ระลึก</a>
                   </li>
                   <li class="navmain active">
                       <a href="db">การบริจาคเลือด</a>
                   </li>
                   <li class="navmain">
                       <a href="da">หาบ้านให้สัตว์</a>
                   </li>
                   <li class="navmain">
                       <a href="newsAll">ข่าวสารและกิจกรรม</a>
                   </li>
                   <li class="navmain">
                       <a href="allQuestions">สอบถามผู้รู้เกี่ยวกับสัตว์เลี้ยง</a>
                   </li>

               </ul>
               <!--check login -->
          <ul class="nav navbar-nav navbar-right">
            @if(!empty($position))
              @if( $position== 'admin')
                <li class="navmain">
             <a href="admin">การจัดการ</a>
           </li>
         @endif
       @endif
              <!-- Authentication Links -->
             <!-- Authentication Links -->
                   @if (Auth::guest())
                       <li class="navmain"><a href="{{ route('login') }}">เข้าสู่ระบบ</a></li>
                       <li class="navmain"><a href="{{ route('register') }}">สมัครสมาชิก</a></li>
                   @else
                     <li class="navmain">
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
               <div class="row">
                   <div class="col-lg-12">
                       <h1 class="page-header">การบริจาคเลือดให้สัตว์</h1>

                       <div class="video-wrapper">
                         <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/azTXEmnkBDY" frameborder="0" allowfullscreen></iframe>
                       </div>

                       <br>

                       <div class="col-sm-2"></div>
                       <div class="col-sm-8">
                         <div class="list-group-item tran" style="background-color:#FFF9CE;">
                       <h4>สัตว์โลกทุกชีวิตย่อมมีเกิด แก่ เจ็บ ตาย ในเมื่อคนเรายังป่วย ยังต้องการเลือด เพื่อทำการรักษา สัตว์เลี้ยงก็ย่อมต้องการเช่นกัน</h4>
                       <h3>ธนาคารเลือดสัตว์เลี้ยง
                           <small>เป็นสถานที่จัดเก็บ และสำรองเลือดในรูปแบบผลิตภัณฑ์เลือดชนิดต่างๆ เช่น</small>
                       </h3>
                       <h4>- เลือดสด และเลือดแช่เย็น (Whole blood)</h4>
                       <h4>- เม็ดเลือดอัดแน่น (Packed Red Calls) นำไปใช้ในกรณีเลือดจางอย่างรุนแรง</h4>
                       <h4>- น้ำเลือด (Plasma) นำไปใช้กรณีสัตว์มีปัญหาการแข็งตัวของเลือด ภาวะโปรตีนในเลือดต่ำ</h4>
                       <h3>คุณสมบัติของสัตว์ที่สามารถจะบริจาคเลือดได้</h3>
                       <h4>1. สัตว์เลี้ยงต้องมีสุขภาพดี อายุตั้งแต่ 1-6 ปี ไม่จำกัดเพศและพันธุ์</h4>
                       <h4>2. ในสุนัขต้องมีน้ำหนักมากกว่า 20 กิโลกรัม ส่วนในแมวต้องมีน้ำหนักมากกว่า 5 กิโลกรัม</h4>
                       <h4>3. มีประวัติการฉีดวัคซีนครบ</h4>
                       <h4>4. ปราศจากโรคติดต่อทางเลือด เช่น โรคพยาธิเม็ดเลือด พยาธิหนอนหัวใจ</h4>
                       <h4>5. ไม่เคยได้รับการผ่าตัดใหญ่ในระยะ 1-2 เดือน</h4>
                       <h4>6. ไม่มีโรคประจำตัวร้ายแรง กรณีมีโรคประจำตัวให้แจ้งเจ้าหน้าที่ก่อนบริจาค</h4>
                       <h4>7. ในกรณีที่ทำวัคซีนประจำปี ควรเว้นระยะเวลาอย่างต่ำ 3 สัปดาห์ก่อนนำสัตว์เลี้ยงมาบริจาค</h5>
                       <h4>8. ไม่มีเห็บหมัด หรือโรคผิวหนัง</h4>
                       <h4>9. สุขภาพฟันดี ไม่มีคราบหินปูน</h4>
                   </div></div>
                   <div class="col-sm-2"></div>


                   <div class="col-sm-12">
                      <br><br>
                  @foreach($animalsBloods as $animal)
                    @if($animal->statusDonation=='open')
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
                           <button type="button" class="btn btn-primary btn-sm box2" data-toggle="modal" data-target="#myModal{{$animal->animal_id}}">
                             ดูรายละเอียด</a>
                           </button>

                           <!--Modal-->
                           <div class="modal fade" id="myModal{{$animal->animal_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                             <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   <center><h4 class="modal-title" id="myModalLabel" >{{$animal->join_donationType->do_typeName}} to  {{$animal->animal_type}}</h4></center>
                                 </div>
                                 <div class="modal-body box3">
                                    <img src="{{url('/images/'.$animal->animal_picture)}}" alt=""><br>
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
                                   ชนิดของสัตว์:{{$animal->animal_type}}<br>
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
                                   <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>

                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                           <!-- Modal -->
                           </div>
                       </div>
                     </div>
                   @endif
                @endforeach
              </div>
               </div>

   </div>





   <!-- /.container -->


   <div class="container">

       <hr>

       <!-- Footer -->
       <footer>
           <div class="row">
               <div class="text-center col-lg-12">
                   <p>Copyright &copy; Your Website 2017</p>
               </div>
           </div>
       </footer>

   </div>
   <!-- /.container -->


<script type="text/javascript">
   $(docment).ready(function() {
   	// เปลี่ยน .entry-content เป็น class ที่คุณต้องการใช้
   	var embed = ('.entry-content').find('embed, iframe');
   	if (embed.length > 0) {
   		  embed.each(function() {
   		  	$(this).wrap('<div class="video-wrapper"></div>');
   		})
   	}
   });
   </script>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->

    <!-- Bootstrap Core JavaScript -->

    </body>
</html>
