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


    <title>Edit</title>

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
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="font-size:20px;" href="all">Animals A-I-D </a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/admin">การจัดการ</a></li>
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
        <h1 style="text-align:center">แก้ไขข้อมูลสัตว์</h1>
        <form action="/edit" class="form" method="post" enctype="multipart/form-data">
          {{ Form::token() }}

          <div class="form-group">
            <label for="ani_id" class="form-label">รหัส</label>
            <input type="text" class="form-control" name="ani_id" value="{{ $animal->animal_id }}" readonly/>
          </div>

          <div class="form-group">
            <label for="ani_name" class="form-label">ชื่อสัตว์</label>
            <input type="text" class="form-control" name="ani_name" value="{{ $animal->animal_name }}" />
          </div>

          <div class="form-group">
            <label for="ani_type" class="form-label">ชนิดของสัตว์</label>
            <input type="text" class="form-control" name="ani_type"  value="{{ $animal->animal_type }}" />
          </div>

          <div class="form-group">
            <label for="doType_id" class="form-label">ประเภทของการขอรับบริจาค</label>
            <br>
            <select class="custom-select" style="  border: 5px solid rgba(0, 255, 0,.15);" name="doType_id" id="doType">
              <option value="{{$animal->join_donationType->do_typeId}}">  @if($animal->join_donationType->do_typeName=='Donation Money')
                ขอรับบริจาคเงิน
                @elseif($animal->join_donationType->do_typeName=='Blood Donation')
                ขอรับบริจาคเลือด
                @else
                หาบ้านให้สัตว์
                @endif
              </option>
              @foreach($donationType as $dt)
              @if($dt->do_typeId!=$animal->join_donationType->do_typeId)
              <option value="{{$dt->do_typeId}}">  @if($dt->do_typeName=='Donation Money')
                ขอรับบริจาคเงิน
                @elseif($dt->do_typeName=='Blood Donation')
                ขอรับบริจาคเลือด
                @else
                หาบ้านให้สัตว์
                @endif</option>
                @endif
                @endforeach
              </select>
            </div>

            <!-- ต้องแก้ รุป ตอน up อ่ะ -->
            <div class="form-group" >
              <label for="ani_picture" >รูปภาพ</label><br>
              <img id="pre_img" src="{{url('/images/'.$animal->animal_picture)}}" alt="" width="130" height="130">
              <?php echo "$animal->animal_picture"; ?>
              <div>
                <input type="file" name="ani_picture" id="file_up_img"/><label for="file_up_img" value"{{$animal->animal_picture}}">{{$animal->animal_picture}}</label>
              </div>
            </div>

            <div class="form-group" id="animal_color">
              <label for="ani_color" class="form-label">สี</label>
              <input type="text" class="form-control" name="ani_color" value="{{ $animal->animal_color }}"/>
            </div>

            <input type="hidden" class="form-control" name="ani_gender"  value="{{ $animal->animal_gender }}" />

            <div class="form-group" id="animal_gender">
              <label for="ani_gender" class="form-label" >เพศ</label><br>
              @if( $animal->animal_gender ==1)
              <label><input type="radio" value="1" name="ani_gender" checked>  เพศผู้</label>&nbsp;&nbsp;
              <label><input type="radio" value="2" name="ani_gender">  เพศเมีย</label>&nbsp;&nbsp;
              @else
              <label><input type="radio" value="1" name="ani_gender" >  เพศผู้</label>&nbsp;
              <label><input type="radio" value="2" name="ani_gender" checked>  เพศเมีย</label>&nbsp;&nbsp;
              @endif
            </div>

            <div class="form-group" id="animal_age">
              <label for="ani_age" class="form-label">อายุ(ปี)</label>
              <input type="text" class="form-control" name="ani_age" step="any" value="{{ $animal->animal_age }}"/>
            </div>

            <div class="form-group">
              <label for="symptomCase" class="form-label">ลักษณะอาการ&ค่ารักษา</label>
              <textarea class="form-control"  name="symptomCase" value="{{ $animal->symptomCase }}" row="3">{{ $animal->symptomCase }}</textarea>
            </div>

            <input type="hidden" class="form-control" name="statusDonation" value="{{ $animal->statusDonation }}"/>
            <div class="text-center">
              <button class="btn btn-success">ยืนยันการแก้ไข</button><br>
            </div>
          </form>
          <br>
        </div>
      </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script type="text/javascript">
    function changeImg(input){
      if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(evt){
          $('#pre_img').attr('src', evt.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $(document).ready(function(){
      $('#file_up_img').change(function(){
        changeImg(this);
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('#doType').on('change', function(event){
        event.preventDefault();
        if(this.value == 2){
          $('#animal_gender').hide()
          $('#animal_age').hide()
          $('#animal_color').hide()
        }else{
          $('#animal_gender').show()
          $('#animal_age').show()
          $('#animal_color').show()
        }
      });

      if($('#doType').find(":selected").val() == 2){
        $('#animal_gender').deleteเนี่ยลบทำควยไร() อยาก required ของtype1,3 ถ้ามีอันนี้ hide มันไม่ให้ submitง งะ กุงง อันนี้มันแค่ซ่อน แต่ถ้ากุ
        $('#animal_age').hide()
        $('#animal_color').hide()
      }else{
        $('#animal_gender').show()
        $('#animal_age').show()
        $('#animal_color').show()
      }
    });
    </script>
  </body>
</html>
