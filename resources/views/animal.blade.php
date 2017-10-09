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


    <title>Animal List</title>

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

      .k{
       border-width: inherit;
      }

     .table-inverse{
       background-color: #D8D8D8;
       color: #424242;
      }

     .t{
       font-size: 19px;
      }

     .t2{
       font-size: 15px;
       border-radius: 5px;
      }

     .a{
       color:  #6E6E6E  ;
      }

     .op{
       font-size: 15px;
       background-color: darkseagreen;
       border-radius: 5px;
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
            <li><a href="../add">เพิ่มการขอรับบริจาค</a></li>
            <li class="active"><a href="../animal">รายชื่อสัตว์</a></li>
            <li><a href="../addNews">เพิ่มข่าวและกิจกรรม</a></li>
            <li><a href="../checkAdoption">ตรวจสอบการขอรับเลี้ยงสัตว์: <span style="color:red"> 0 </span></a></li>
            <li><a href="../admin">ตอบปัญหา: <span style="color:red">{{DB::table('blogs')->where('status','answered')->count()}}</span>/{{DB::table('blogs')->count()}}</a></li>
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
    <div class="row text-center">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <a href="/add" class="btn btn-warning t">เพิ่มสัตว์</a>
      </div>
      <div class="col-md-3"></div>
    </div>

    <div style="color:#566D7E;font-size:20px">
      @foreach($admins as $ad)
        @if( $ad->admin_id == $adminId)
          {{$ad->join_Hospital->hospital_name}}
            @endif
              @endforeach
    </div>

    <table class="table table-hover">
      <thead class="table-inverse t">
        <tr>
          <th width="30">รหัส</th>
          <th width="140">ชื่อ</th>
          <th width="100" >ประเภท</th>
          <th>รูปภาพ</th>
          <th >สถานะ</th>
          <th width="150">ดำเนินการ</th>
        </tr>
      </thead>

      <tbody>
        @foreach($animals as $animal)
          @if( $animal->admin_id == $adminId)

          <tr>
            <td>{{$animal->animal_id}}</td>
            <td>{{$animal->animal_name}}</td>
            <td>{{$animal->join_donationType->do_typeName}}</td>
            <td><img  src="{{url('/images/'.$animal->animal_picture)}}" alt="" width="85" height="85"> &nbsp;<small>{{$animal->animal_picture}}</small><br></td>
            <td>{{$animal->statusDonation}}</td>
            <td>
              <a href="/edit/{{ $animal->animal_id }}" class="btn btn-info btn-sm t2">แก้ไข</a>
              <a href="/deleteAnimal/{{ $animal->animal_id }}" class="btn btn-danger btn-sm btn-delete t2" onclick="return confirm('Please confirm again !!!')">ลบ</a> <br><br>
                @if($animal->statusDonation=='Open'||$animal->statusDonation=='open')
                <form action="/closeAnimal/{{$animal->animal_id}}" class="form" method="post" enctype="multipart/form-data"> {{ Form::token() }}
                  <input type="hidden" class="form-control" name="ani_id" value="{{ $animal->animal_id }}" readonly/>
                  <input type="hidden"class="form-control" name="ani_name" value="{{ $animal->animal_name }}" />
                  <input type="hidden"class="form-control" name="ani_type"  value="{{ $animal->animal_type }}" />
                  <input type="hidden" name="doType_id" id="doType"/>
                  <input type="hidden" name="ani_picture" id="file_up_img"/>
                    <label for="file_up_img" value"{{$animal->animal_picture}}">
                      <input type="hidden" class="form-control" name="ani_color" value="{{ $animal->animal_color }}"/>
                      <input type="hidden" class="form-control" name="ani_gender" value="{{ $animal->animal_gender }}"/>
                        @if( $animal->animal_gender ==1)
                          <label><input type="hidden" value="1" name="ani_gender" checked>
                          <label><input type="hidden" value="2" name="ani_gender">
                        @else
                          <label><input type="hidden" value="1" name="ani_gender" >
                          <label><input type="hidden" value="2" name="ani_gender" checked>
                        @endif
                          <input type="hidden"class="form-control" name="ani_age" step="any" value="{{ $animal->animal_age }}"/>
                          <input type="hidden" name="symptomCase" value="{{ $animal->symptomCase }}" row="3">
                          <input type="hidden" class="form-control" name="statusDonation" value="Close"/>
                          <button class=" btn-sm k btn-primary t2">ปิดการขอรับ</button>
                </form>
                  @elseif($animal->statusDonation=='-'||$animal->statusDonation=='OpenAdoption')

                  <form action="/closeAnimal/{{$animal->animal_id}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
                    <input type="hidden" class="form-control" name="ani_id" value="{{ $animal->animal_id }}" readonly/>
                    <input type="hidden"class="form-control" name="ani_name" value="{{ $animal->animal_name }}" />
                    <input type="hidden"class="form-control" name="ani_type"  value="{{ $animal->animal_type }}" />
                    <input type="hidden" name="doType_id" id="doType"/>
                    <input type="hidden" name="ani_picture" id="file_up_img"/>
                      <label for="file_up_img" value"{{$animal->animal_picture}}">
                        <input type="hidden" class="form-control" name="ani_color" value="{{ $animal->animal_color }}"/>
                        <input type="hidden" class="form-control" name="ani_gender" value="{{ $animal->animal_gender }}" />
                              @if( $animal->animal_gender ==1)
                                <label><input type="hidden" value="1" name="ani_gender" checked>
                                <label><input type="hidden" value="2" name="ani_gender">
                              @else
                                <label><input type="hidden" value="1" name="ani_gender" >
                                <label><input type="hidden" value="2" name="ani_gender" checked>
                              @endif
                                <input type="hidden"class="form-control" name="ani_age" step="any" value="{{ $animal->animal_age }}"/>
                                <input type="hidden" name="symptomCase" value="{{ $animal->symptomCase }}" row="3">
                                <input type="hidden" class="form-control" name="statusDonation" value="CloseAdoption"/>
                                <button class=" btn-sm k btn-primary t2">ปิดการขอรับเลี้ยง</button>
                  </form>

                    @elseif($animal->statusDonation=='CloseAdoption')

                    <form action="/closeAnimal/{{$animal->animal_id}}" class="form" method="post" enctype="multipart/form-data">{{ Form::token() }}
                      <input type="hidden" class="form-control" name="ani_id" value="{{ $animal->animal_id }}" readonly/>
                      <input type="hidden"class="form-control" name="ani_name" value="{{ $animal->animal_name }}" />
                      <input type="hidden"class="form-control" name="ani_type"  value="{{ $animal->animal_type }}" />
                      <input type="hidden" name="doType_id" id="doType"/>
                      <input type="hidden" name="ani_picture" id="file_up_img"/>
                      <label for="file_up_img" value"{{$animal->animal_picture}}">
                        <input type="hidden" class="form-control" name="ani_color" value="{{ $animal->animal_color }}"/>
                        <input type="hidden" class="form-control" name="ani_gender" value="{{ $animal->animal_gender }}" />
                          @if( $animal->animal_gender ==1)
                            <label><input type="hidden" value="1" name="ani_gender" checked>
                            <label><input type="hidden" value="2" name="ani_gender">
                              @else
                                <label><input type="hidden" value="1" name="ani_gender" >
                                <label><input type="hidden" value="2" name="ani_gender" checked>
                                  @endif

                                  <input type="hidden"class="form-control" name="ani_age" step="any" value="{{ $animal->animal_age }}"/>
                                  <input type="hidden" name="symptomCase" value="{{ $animal->symptomCase }}" row="3">
                                  <input type="hidden" class="form-control" name="statusDonation" value="OpenAdoption"/>
                                  <button class=" btn-sm k btn-primary op" >เปิดการขอรับ</button>
                    </form>

                      @elseif($animal->statusDonation=='Close'||$animal->statusDonation=='close')
                        <form action="/closeAnimal/{{$animal->animal_id}}" class="form" method="post" enctype="multipart/form-data">
                            {{ Form::token() }}

                                <input type="hidden" class="form-control" name="ani_id" value="{{ $animal->animal_id }}" readonly/>


                                <input type="hidden"class="form-control" name="ani_name" value="{{ $animal->animal_name }}" />
                                <input type="hidden"class="form-control" name="ani_type"  value="{{ $animal->animal_type }}" />

                                <input type="hidden" name="doType_id" id="doType"/>
                                <input type="hidden" name="ani_picture" id="file_up_img"/><label for="file_up_img" value"{{$animal->animal_picture}}">

                                <input type="hidden" class="form-control" name="ani_color" value="{{ $animal->animal_color }}"/>

                                <input type="hidden" class="form-control" name="ani_gender" value="{{ $animal->animal_gender }}" />

                              @if( $animal->animal_gender ==1)
                                <label><input type="hidden" value="1" name="ani_gender" checked>
                                <label><input type="hidden" value="2" name="ani_gender">
                              @else
                                <label><input type="hidden" value="1" name="ani_gender" >
                                <label><input type="hidden" value="2" name="ani_gender" checked>
                              @endif


                                <input type="hidden"class="form-control" name="ani_age" step="any" value="{{ $animal->animal_age }}"/>
                                <input type="hidden" name="symptomCase" value="{{ $animal->symptomCase }}" row="3">

                                <input type="hidden" class="form-control" name="statusDonation" value="Open"/>

                                <button class=" btn-sm k btn-primary  op">เปิดการขอรับ</button>
                              </form>
              </td>
          </tr>
              @endif
          @endif
            @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
