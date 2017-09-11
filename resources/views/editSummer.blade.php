<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
       <meta name="csrf-token" content="lTGlgWKoqayN8ejijUYGiNOqRPDyRt58eg8QpU7w">
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
    <title>Admin Edit Question</title>
    <!-- Styles -->
    <link href="https://animal-aid.me/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {"csrfToken":"lTGlgWKoqayN8ejijUYGiNOqRPDyRt58eg8QpU7w"};
    </script>
    <style>
    .navbar>.container-fluid .navbar-brand, .navbar>.container .navbar-brand {
        margin-left: -29px;
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
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="navbar-brand" href="../admin">     &nbsp;&nbsp; ตอบปัญหา&nbsp;&nbsp;</a>&nbsp;



                
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
                                                         <a href="https://animal-aid.me/logout"
                                                           onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                                           ออกจากระบบ
                                                           </a>

                                                           <form id="logout-form" action="https://animal-aid.me/logout" method="POST" style="display: none;">
                                                             <input type="hidden" name="_token" value="lTGlgWKoqayN8ejijUYGiNOqRPDyRt58eg8QpU7w">
                                                           </form>
                                                         </li>
                                       </ul>
                           </li>
                                           </ul>
               </div>
           </div>
       </nav>

    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>Edit </h4>
        </div>
        <div class="panel-body">
        <form action="{{url('updateSummer')}}" method="post">
            {{ Form::token() }}
          <div class="form-group">
            <label for="topic">questioner</label>
              <input type="hidden" name="id" value="{{$data->id}}">
            <input type="text" name="name" id="name" class="form-control" value="คุณ {{$data->name}}">
          </div>
          <div class="form-group">
            <label for="topic">Title</label>
          <input type="text" name="topic" id="topic" class="form-control"  value="{{$data->topic}}">
          </div>
          <div class="form-group">
            <textarea id="summernote" name="summernote" class="form-control">
              {{$data->content}}
            </textarea>
          </div>
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
    </div>
    <script type="text/javascript">
         $(document).ready(function(){
           $('#summernote').summernote({
            height:'300px',
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
