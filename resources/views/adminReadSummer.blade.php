<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">



    <!-- include libraries(jQuery, bootstrap) -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
    <title>แอดมินอ่านคำถาม</title>
    <!-- Styles -->
    <link href="https://animal-aid.me/css/app.css" rel="stylesheet">
    <script>
        window.Laravel = {"csrfToken":"lTGlgWKoqayN8ejijUYGiNOqRPDyRt58eg8QpU7w"};
    </script>
    <style >
    .navbar>.container-fluid .navbar-brand, .navbar>.container .navbar-brand {
        margin-left: -34px;
    }
    .owner{
      width: 40%;
    }
    </style>
  </head>
  <body>
    <div id="app">
    <nav class="navbar navbar-default navbar-static-top">
           <div class="container">
               <div class="navbar-header ">

                   <!-- Collapsed Hamburger -->
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                       <span class="sr-only">Toggle Navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>

                   <!-- Branding Image-->
                   <a class="navbar-brand" href="https://animal-aid.me/all">

               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Animal-AID
                   </a>

                     <a  class="navbar-brand" href="../add">&nbsp;&nbsp;&nbsp; เพิ่มการขอรับบริจาค &nbsp;&nbsp;</a> &nbsp;
                     <a class="navbar-brand" href="../animal">  รายชื่อสัตว์&nbsp;&nbsp; </a>&nbsp;
                     <a  class="navbar-brand" href="../addNews">   เพิ่มข่าวและกิจกรรม&nbsp;&nbsp;</a>&nbsp;

                 <!--    <a class="navbar-brand"  href="../n">   ข่าวทั้งหมด &nbsp;&nbsp;</a>&nbsp;-->
                     <a class="navbar-brand" href="../checkAdoption"> ตรวจสอบการขอรับเลี้ยงสัตว์ :<span style="color:red"> 0</span><a>&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="navbar-brand" href="../admin">     &nbsp;&nbsp; ตอบปัญหา:<span style="color:red"> {{DB::table('blogs')->where('status','answered')->count()}}</span>/{{DB::table('blogs')->count()}}</a>&nbsp;




               </div>

               <div class="collapse navbar-collapse" id="app-navbar-collapse">
                   <!-- Left Side Of Navbar -->


                   <!-- Right Side Of Navbar -->
                   <ul class="nav navbar-nav navbar-right">
                       <!-- Authentication Links -->
                                                   <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   {{ Auth::user()->name }}<span class="caret"></span>
                               </a>

                                       <ul class="dropdown-menu" role="menu">
                                                 <li>
                                                   <a   href="../adminProfile"> ข้อมูลส่วนตัว &nbsp;&nbsp; </a>
                                                 </li>
                                                     <li>
                                                         <a href="{{route('logout')}}"
                                                           onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                                           ออกจากระบบ
                                                           </a>

                                                           <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                                             {{csrf_field()}}
                                                           </form>
                                                         </li>
                                       </ul>
                           </li>
                                           </ul>
               </div>
           </div>
       </nav>
</div>

    <div class="container">
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color:#F2FBEF;border-color:#E0F8EC;">
             <h4>ตอบปัญหาจากทางบ้าน </h4>
          </div>
                 <div class="panel-body" style="word-wrap:break-word;">
                   <h3>Q : {{$data->topic}}</h3>
                   <hr>

                     {{$data->content}}

                 </div>
        </div>

<!--แสดงคำตอบ-->
  @if($data->answer!=null)
<div class="panel panel-default" style="border-color:#F3E2A9;">
  <div class="panel-heading" style="background-color:#F3E2A9;border-color:#F3E2A9;">
     <h4>คำตอบ </h4>
  </div>
         <div class="panel-body" style="word-wrap:break-word;background-color:#F7F8E0;border-color:#F3E2A9;">
  {{$data->answer}}
 </div>
</div>
@endif
<!--แสดงคำตอบ-->


<!--Summernote Answer-->
<div class="panel panel-default">
  <div class="panel-heading" style="background-color:#EFF5FB;">
    <center><h4>ตอบกระทู้คำถาม </h4></center>
  </div>
  <div class="panel-body">
  <form action="{{url('updateSummerAns')}}" method="post">
      {{ Form::token() }}
    <div class="form-group owner">
        <input type="hidden" name="id" value="{{$data->id}}">
          <input type="hidden" name="status" value="Answered">
      <label for="topic">ผู้ตอบ</label>

    <input type="text" name="name" id="name"   class="form-control" value="   แอดมิน :   {{ Auth::user()->name }}" disabled>
    </div>

    <div class="form-group" >
      <textarea id="summernote" name="summernote" class="form-control"  required >
      </textarea>
    </div>

     <input type="hidden" name="summernote2" class="form-control" value="{{$data->answer}} ,,," />





    <div class="form-group">
      <input type="submit" name="send" id="send" value="create" class="btn btn-success">
      <input type="button" name="clear" id="clear" class="btn btn-danger pull-right" value="Clear">

    </div>
    @if (Auth::guest())
        <input type="hidden"  name="userid" value="guest"/>
    @else
      <input type="hidden"  name="userid" value=" {{ Auth::user()->id }}"/>
    @endif
  </form>
    </div>
  </div>
</div>

<!--end summer-->

    </div>
    <script type="text/javascript">
         $(document).ready(function(){
           $('#summernote').summernote({
            height:'200px',
            placeholder:'content here ..' //placeholderเสือกไม่ขึ้น งง

          //  fontNames:['Arial','Arial Black','Khmer OS'],
          })
     })
     $('#clear').on('click',function(){
       $('#summernote').summernote('code',null);

     })

    </script>




  </body>
</html>
