<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <script src="https://cdn.omise.co/card.js" charset="utf-9"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AddAnimal</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" link href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" link href="{{url('css/bootstrap.min.css')}}">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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

      /* Style The Dropdown Button */
      .dropbtn {
          background-color: #303030;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
      }

      /* The container <div> - needed to position the dropdown content */
      .dropdown {
          position: relative;
          display: inline-block;
      }

      /* Dropdown Content (Hidden by Default) */
      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
      }

      /* Links inside the dropdown */
      .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
      }

      /* Change color of dropdown links on hover */
      .dropdown-content a:hover {background-color: #f1f1f1}

      /* Show the dropdown menu on hover */
      .dropdown:hover .dropdown-content {
          display: block;
      }

      /* Change the background color of the dropdown button when the dropdown content is shown */
      .dropdown:hover .dropbtn {
          background-color: #3e8e41;
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
            <li><a href="../addNews">เพิ่มข่าวและกิจกรรม</a></li>
            <li><a href="../checkAdoption">ตรวจสอบการขอรับเลี้ยงสัตว์: <span style="color:#FFFF00">{{$countRecipientEachAdmin}} </span></a></li>
            <li><a href="../admin">ตอบปัญหา: <span style="color:#FFFF00">{{DB::table('blogs')->where('status','answered')->count()}}</span>/{{DB::table('blogs')->count()}}</a></li>
            <li><a href="../addProductPage">เพิ่มสินค้า</a></li>
            <li><a href="../shippings">ใบจัดส่งสินค้า :<span style="color:#FFFF00">{{DB::table('shippings')->where('shipping_status', '=','กำลังตรวจสอบ')->count()}}</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ตรวจสอบสลิป<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="transferDocument">สลิปสั่งสินค้า:<span style="color:red">{{DB::table('transferMoneys')->where('checking_status', '=','wait')->orWhere('checking_status', '=','กำลังตรวจสอบหลักฐาน')->count()}}</span></a></li>
                <li><a href="adminCheckSlip">สลิปการบริจาคเงิน:<span style="color:red">{{DB::table('userUpdateSlips')->where('status_check_yet', '=','NotCheck')->count()}}</a>
                  <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">{{csrf_field()}}</form></li>
              </ul>
            </li>
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
            <div class="col-sm-3" style=""></div>

            <div class="col-md-6">
              <h1 style="text-align:center">เพิ่มสัตว์</h1>
              <form name="addAnimal" action="/add" class="form" method="post" enctype="multipart/form-data" onsubmit="return validation()">{{ Form::token() }}
                <div class="form-group">
                  <label for="ani_name" class="form-label">ชื่อสัตว์</label>
                  <input type="text" class="form-control" name="ani_name"/ required>
                </div>

                <div class="form-group">
                  <label for="ani_type" class="form-label">ชนิดของสัตว์</label>
                  <input type="text" class="form-control" name="ani_type"  placeholder="สุนัข  แมว  ฯลฯ" />
                </div>

                <div class="form-group">
                  <label for="doType_id" class="form-label">ประเภทของการขอรับบริจาค</label> <br>
                  <select class="custom-select "  style="  border: 5px solid rgba(0, 255, 0,.15);" name="doType_id" id="doType">@foreach($donationType as $dt)
                    <option value="{{$dt->do_typeId}}">
                      @if($dt->do_typeName=='Donation Money')
                        ขอรับบริจาคเงิน
                        @elseif($dt->do_typeName=='Blood Donation')
                          ขอรับบริจาคเลือด
                          @else
                            หาบ้านให้สัตว์
                            @endif
                    </option>
                          @endforeach
                  </select>
                </div>

                <div class="form-group" id="animal_pic">
                  <label for="ani_picture" class="form-label">รูปภาพ</label><br>
                  <input type="file" name="ani_picture" required/>
                </div>

                <div class="form-group" id="animal_color">
                  <label for="ani_color" class="form-label">สี</label>
                  <input type="text" class="form-control" name="ani_color"/>
                </div>

                <div class="form-group" id="animal_gender">
                  <label for="ani_gender" class="form-label">เพศ</label><br>
                  <label><input type="radio" value="1" name="ani_gender" id="animal_gender_input" required="required">&nbsp;เพศผู้</label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <label><input type="radio" value="2" name="ani_gender">&nbsp;เพศเมีย</label>
                </div>

                <div class="form-group" id="animal_age">
                  <label for="ani_age" class="form-label">อายุ (ปี)</label>
                  <input type="number" class="form-control" name="ani_age"  step="any" placeholder="1.2 เป็นต้น."/>
                </div>

                <div class="form-group">
                  <label for="symptomCase" class="form-label">ลักษณะอาการ&ค่ารักษา</label>
                  <textarea class="form-control" name="symptomCase" row="2"></textarea>
                </div>

                <input type="hidden" class="form-control" name="statusDonation" value="open"/>
                <input type="hidden" class="form-control" name="received" value="received"/>

                <div class="text-center">
                  <button class="btn btn-success">เพิ่มสัตว์</button>
                </div>
              </form>
            </div>
            <div class="col-sm-3" style=""></div>
          </div>
        </div>


        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <!--  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#doType').on('change', function(event){
            event.preventDefault();
            if(this.value == 2){
                $('#animal_gender').hide()
                $('#animal_age').hide()
                $('#animal_color').hide()
                $('#animal_gender_input').attr('required', false)
            }else{
              $('#animal_gender').show()
              $('#animal_age').show()
              $('#animal_color').show()
              $('#animal_gender_input').attr('required', true)
            }
        });
    });
</script>

<br>
  </body>
</html>
