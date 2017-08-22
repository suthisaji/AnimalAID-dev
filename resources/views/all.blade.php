<!DOCTYPE html>
<html lang="en">
<title>ALL Donation</title>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
                   <li>
                       <a href="newsAll">ข่าวสารและกิจกรรม</a>
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
                             @php($x=0)
                             @foreach($animals as $animal)
                                  @if($animal->statusDonation=='open' ||$animal->statusDonation=='-' && empty($animal->join_Adoption->animal_id))
                                    @php($x++)
                                    @if($x == 1)
                                      <div class="item active"  data-toggle="modal" data-target="#myModal{{$animal->animal_id}}">
                                          <img class="slide-image" src="{{url('/images/'.$animal->animal_picture)}}" alt="">
                                      </div>
                                    @else
                                      <div class="item"  data-toggle="modal" data-target="#myModal{{$animal->animal_id}}">
                                          <img class="slide-image" src="{{url('/images/'.$animal->animal_picture)}}" alt="">
                                      </div>

                                    @endif
                                    <div class="modal fade" id="myModal{{$animal->animal_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel" > {{$animal->join_donationType->do_typeName}} to  {{$animal->animal_type}}</h4>
                                          </div>
                                          <div class="modal-body thumbnailjam">
                                             <img src="{{url('/images/'.$animal->animal_picture)}}" alt="" width="200" height="500">
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
                                                       <span style="color:#8000FF">    {{$admin->join_Hospital->hospital_name}}&nbsp; @if($admin->join_Hospital->hospital_account=='043-7-12167-6 กองทุนรักษาพยาบาลสัตว์ป่วยอนาถา') 043-7-12167-6
                                                        @else
                                                 {{$admin->join_Hospital->hospital_account}}
                                         @endif</span>
                                                      @endif
                                                   @endforeach
                                              @endif
                                            @endforeach
                                          </div>
                                          @if($animal->doType_id==3)
                                            <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>

                                   <button id="takemodal{{$animal->animal_id}}" type="button" class="btn btn-lg btn-danger rub1" data-toggle="popover" data-placement="top">รับเลี้ยง</button>
                                   <script>
                                         $('#takemodal{{$animal->animal_id}}').popover({
                                           html: true,
                                           title: 'กรุณาเพิ่มที่อยู๋ในการเลี้ยงสัตว์ ',
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
                                     <form class="form" action="/addAdoptionAllPage" method="post">
                                       <input type="hidden" name="animal_id" value="{{$animal->animal_id}}">
                                         {{ Form::token() }}
                                         <div class="form-group">
                                             <label for=""> <h4 style="color:blue;"> ขอบคุณ &nbsp; {{Auth::user()->name}}</h4> </label>
                                         </div>
                                         <div class="form-group">
                                             <label for="">หมายเลขโทรศัพท์</label>
                                             <input class="form-control" type="tel" name="tel" value="{{Auth::user()->tel}}"/>

                                         </div>
                                         <div class="form-group">
                                              <label for="address">กรุณาเพิ่มที่อยู่</label>
                                              <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                                        </div>

                                         <div class="form-group">
                                             <label for="date" class="form-label">วันและเวลาที่มารับสัตว์</label>
                                             <input type="datetime-local" class="form-control" name="date_time"  value="2011-08-19T13:45:00" />
                                         </div>
                                         <div class="form-group">
                                             กรุณารอการติดต่อกลับจากเจ้าหน้าที่เพื่อตรวจสอบและยืนยัน

                                         </div>
                                        <input type='hidden' name='status' value='Recipient' />
                                         <div class="text-center">
                                             <button class="btn btn-success" >ยืนยัน</button>
                                         </div>
                                     </form>
                                   @endif
                                 </div>


                                 </div>
                               @elseif($animal->doType_id==2)
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default bori" data-dismiss="modal">ปิด</button>
                                              <button type="button" class="btn btn-primary "><a href='db' style='color:white;'>วิธีบริจาคแสดงข้อมูล</a></button>


                                            </div>
                                          @else
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default bori" data-dismiss="modal">ปิด</button>
                                              <button type="button" class="btn btn-primary bori"><a href="donate" style="color:white">บริจาค</a></button>
                                            </div>
                                          @endif
                                        </div>
                                      </div>
                                    </div>
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

               </div>












               <div class="row">

                  @foreach($animals as $animal)

                    @if($animal->statusDonation=='open' ||$animal->statusDonation=='-' && empty($animal->join_Adoption->animal_id))
                   <div class="col-sm-4 col-lg-4 col-md-4">
                       <small>{{$animal->created_at}}</small>
                       <div class="thumbnail">
                           <img src="{{url('/images/'.$animal->animal_picture)}}" alt="">
                           <div   class="caption  ">

                              @if($animal->join_donationType->do_typeName=='Donation Money')
                               ขอรับบริจาคเงิน
                             @elseif($animal->join_donationType->do_typeName=='Blood Donation')
                               ขอรับบริจาคเลือด
                             @else
                                หาบ้านให้สัตว์
                              @endif
                              <br>
                              <span style="color:blue">{{$animal->animal_name}}</span>

                              {{$animal->animal_type}} <br>
                              {{$animal->symptomCase}}<br>
                              @foreach($admins as $admin)
                                @if($animal->admin_id==$admin->admin_id)
                                     @foreach($hospitals as $hos)
                                        @if($admin->hospital_id==$hos->hospital_id)
                                         <span style="color:#8000FF">    {{$admin->join_Hospital->hospital_name}}&nbsp;
                                         @if($admin->join_Hospital->hospital_account=='043-7-12167-6 กองทุนรักษาพยาบาลสัตว์ป่วยอนาถา') 043-7-12167-6
                                          @else
                                                 {{$admin->join_Hospital->hospital_account}}
                                         @endif
                                         </span>
                                        @endif
                                     @endforeach
                                @endif
                              @endforeach


                              <!-- Button trigger modal -->
                            <div class="row text-right">

                          @if($animal->doType_id==3)
                            <button type="button" class="btn btn-primary btn-sm box1" data-toggle="modal" data-target="#myModal{{$animal->animal_id}}">
                              ดูรายละเอียด
                            </button>
                            <button id="take{{$animal->animal_id}}" type="button" class="btn btn-lg btn-danger rub2" data-toggle="popover" data-placement="top">รับเลี้ยง</button>
                            <script>
                                  $('#take{{$animal->animal_id}}').popover({
                                    html: true,
                                    title: 'กรุณาเพิ่มที่อยู่ในการเลี้ยงสัตว์  ',
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
                              <form class="form" action="/addAdoptionAllPage" method="post">
                                <input type="hidden" name="animal_id" value="{{$animal->animal_id}}">
                                  {{ Form::token() }}
                                  <div class="form-group">
                                      <label for=""> <h4 style="color:blue;"> ขอบคุณค่ะ !&nbsp; {{Auth::user()->name}}</h4> </label>
                                  </div>
                                  <div class="form-group">
                                      <label for="">หมายเลขโทรศัพท์</label>
                                      <input class="form-control" type="tel" name="tel" value="{{Auth::user()->tel}}"/>

                                  </div>
                                  <div class="form-group">
                                       <label for="address">เพิ่มที่อยู่</label>
                                       <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                                 </div>

                                  <div class="form-group">
                                      <label for="date" class="form-label">วันที่และเวลาที่มารับสัตว์</label>
                                      <input type="datetime-local" class="form-control" name="date_time"  value="2017-08-19T13:45:00"  />
                                  </div>
                                  <div class="form-group">
                                     กรุณารอการติดต่อกลับจากเจ้าหน้าที่เพื่อตรวจสอบและยืนยัน

                                  </div>
                                 <input type='hidden' name='status' value='Recipient' />
                                  <div class="text-center">
                                      <button class="btn btn-success" >ยืนยัน</button>
                                  </div>
                              </form>

                            @endif
                            </div>
                          @elseif($animal->doType_id==1)
                            <button type="button" class="btn btn-primary btn-sm box1" data-toggle="modal" data-target="#myModal{{$animal->animal_id}}">
                             ดูรายละเอียด
                            </button>
                              <button type="button" class="btn btn-primary btn-sm box2" ><a style="color: white;" href="donate">ช่วยเหลือ</a></button>

                          @else
                            <button type="button" class="btn btn-primary btn-sm box2" data-toggle="modal" data-target="#myModal{{$animal->animal_id}}">
                            ดูรายละเอียด
                            </button>
                          @endif



                          <!--Modal-->
                          <div class="modal fade" id="myModal{{$animal->animal_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel" > {{$animal->join_donationType->do_typeName}} to  {{$animal->animal_type}}</h4>
                                </div>
                                <div class="modal-body thumbnailjam">
                                   <img src="{{url('/images/'.$animal->animal_picture)}}" alt="" width="200" height="500">
                                  ประเภทของการขอบริจาค:
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
                                  Color :{{$animal->animal_color}}<br>
                                  @if($animal->animal_gender == 1)
                                    เพศ :เพศผู้<br>
                                   @else
                                       เพศ:เพศเมีย<br>
                                   @endif
                                  ลักษณะอาการ  :{{$animal->symptomCase}}<br>
                                  สถานะการเปิดขอรับ :{{$animal->statusDonation}}<br>
                                </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default bori" data-dismiss="modal">ปิด</button>
                                    <button type="button" class="btn btn-primary bori">บริจาค</button>
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
                   <p class="lead">รายชื่อผู้บริจาค</p>
                       <div class="list-group">
                           <p class="list-group-item"><small>2017-04-12</small>
                               <i class="fa fa-comment fa-fw">Jutatip</i>
                               <span class="pull-right text-muted small">
                                   <em>$100  กองทุนรักษาพยาบาลสัตว์ป่วยอนาถา</em>
                               </span>
                   </p>

                   <p class="list-group-item"><small>2017-04-12</small>
                       <i class="fa fa-comment fa-fw">Suthisa</i>
                       <span class="pull-right text-muted small">
                           <em>$100  กองทุนรักษาพยาบาลสัตว์ป่วยอนาถา</em>
                       </span>
                   </p>
                   <p class="list-group-item"><small>2017-04-12</small>
                       <i class="fa fa-comment fa-fw">Somsak</i>
                       <span class="pull-right text-muted small">
                           <em>$100  กองทุนรักษาพยาบาลสัตว์ป่วยอนาถา</em>
                       </span>
                   </p>
               </div>
           </div>


       </div>

   </div>
   <!-- /.container -->


   กิจกรรม
   <h3>
     @foreach($newsAnis as $ac)
       @if($ac->news_type == 3)
          "{{$ac->head_News}} " &nbsp;{{$ac->content}}
       @endif
  @endforeach
        </h3>



   <div class="container">

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
