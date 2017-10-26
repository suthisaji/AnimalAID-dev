<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <script src="https://cdn.omise.co/card.js" charset="utf-9"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>AddNews</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" link href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" link href="{{url('css/bootstrap.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('/css/shop-homepage.css')}}"/>
    <link rel="stylesheet" href="{{url('/css/index.css')}}"/>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="https://blackrockdigital.github.io/startbootstrap-shop-homepage/js/bootstrap.min.js"></script> -->

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    {{Html::style('css/shop-homepage.css')}}

    <style type="text/css">
      li{
        font-size: 15px;
      }
      body{
        font-size: 16px;
      }
      .fl{
        font-size: 16px;
      }
      .table-inverse{
        background-color: #E6E6E6;
        color: #585858;
      }
      .con{
        width: 1600px;
        }
      .t{
        font-size: 19px;
      }
      .t2{
        font-size: 15px;
      }
      .a{
        color:  #6E6E6E  ;
      }
    </style>
</head>

<body>
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
        <a class="navbar-brand"  style="font-size:20px;" href="all">Animals A-I-D </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="../animal">รายชื่อสัตว์</a></li>
            <li class="active"><a href="../addNews">เพิ่มข่าวและกิจกรรม</a></li>
            <li><a href="../checkAdoption">ตรวจสอบการขอรับเลี้ยงสัตว์: <span style="color:red"> {{$countRecipientEachAdmin}} </span></a></li>
            <li><a href="../admin">ตอบปัญหา: <span style="color:red">{{DB::table('blogs')->where('status','answered')->count()}}</span>/{{DB::table('blogs')->count()}}</a></li>
            <li><a href="../addProductPage">เพิ่มสินค้า</a></li>
            <li><a href="../transferDocument">ตรวจสอบสลิปเงิน: <span style="color:red">{{DB::table('transferMoneys')->where('checking_status', '=','wait')->count()}}</span></a></li>
            <li><a href="../shippings">ใบจัดส่งสินค้า</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <!-- Left Side Of Navbar -->

          <!-- Right Side Of Navbar -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="../adminProfile">ข้อมูลส่วนตัว</a></li>
              <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ออกจากระบบ</a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">{{csrf_field()}}</form></li>
            </ul>
        </ul>
    </div>
    </div>
  </nav>

        <div class="container">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="display-4" style="text-align:center; color:#424242; ">เพิ่มข่าว/กิจกรรม</h1>
                <form action="/addNews" class="form" method="post" enctype="multipart/form-data">
                    {{ Form::token() }}

                    <div class="form-group">
                        <label for="head_News" class="form-label h3">หัวข่าว/กิจกรรม</label>
                        <input type="text" class="form-control" name="head_News" required/>
                    </div>

                    <div class="form-group" id="animal_pic">
                        <label for="ani_picture" class="form-label h3">รูปภาพ</label><br>
                        <input type="file"  name="ani_picture"  / >
                    </div>

                    <div class="form-group" id="news_type">
                      <label for="news_type" class="form-label h3">ประเภท</label><br>

                      <!--  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;<label class="t2"><input  type="radio" value="1" name="news_type">&nbsp;ข่าวด่วน</label>  &nbsp;&nbsp;&nbsp;-->
                        &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;<label class="t2"><input type="radio" value="2" name="news_type" required >&nbsp;ข่าวปกติ</label>
                    &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;<label class="t2"><input type="radio" value="3" name="news_type" >&nbsp;กิจกรรม</label>
                    </div>



                    <div class="form-group">
                         <label for="content" class=" h3">เนื้อหาข่าว/กิจกรรม</label>
                         <textarea class="form-control" name="content" id="content" rows="2" required></textarea>
                   </div>



                    <div class="text-center">
                        <button class="btn btn-success">เพิ่มข่าว/กิจกรรม</button>
                    </div>

                </form>

            </div>
          </div>
        <br>
        <div class="row ">
            <div class="col-md-12 offset-0">
              <table class="table">
                <thead class="table-inverse">
                  <tr>
                    <th style="font-size:18px; background-color:#737373; color:white;">ประเภท</th>
                    <th style="font-size:18px; background-color:#999999; color:white;">รหัส</th>
                    <th style="font-size:18px; background-color:#8c8c8c; color:white;">หัวข่าว</th>
                    <th style="font-size:18px; background-color:#808080; color:white;">เนื้อหาข่าว</th>
                    <th style="font-size:18px; background-color:#666666; color:white;">ภาพ</th>
                    <th style="font-size:18px; background-color:#737373; color:white;">สร้างเมื่อ</th>
                    <th style="font-size:18px; background-color:#595959; color:white;">ลบ</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($news as $new)

                      @if( $new->admin_id == $adminId)
                  <tr>
                    @if($new->news_type==1)
                      <td style="font-size:14px;">ข่าวด่วน</td>
                    @elseif($new->news_type==2)
                      <td style="font-size:14px;">ข่าวปกติ</td>
                    @else
                      <td style="font-size:14px;">กิจกรรม</td>
                    @endif
                    <td style="font-size:14px;">{{$new->news_id}}</td>

                    <td style="font-size:14px;">{{$new->head_News}}</td>
                    <td style="font-size:14px;">{{$new->content}}</td>

                    @if($new->act_pic!='noPic')
                    <td ><img src="{{url('/images/'.$new->act_pic)}}" alt="" width="60px" height="60px"></td>
                  @elseif($new->act_pic=='noPic')
                                  <td >noPic</td>
                    @endif


                    <td style="font-size:18px;">{{$new->created_at}}</td>

                    <td > <a style="font-size:18px;" href="/deleteNews/{{$new->news_id}}" class="btn btn-danger btn-sm" onclick="return confirm('Please confirm again !!!') ">ลบ </a></td>

                  </tr>
                          @endif
                  @endforeach

                </tbody>
              </table>
            </div>
        </div>
        </div>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
