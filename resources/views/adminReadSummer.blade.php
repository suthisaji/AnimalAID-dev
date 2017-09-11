<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
 <meta name="csrf-token" content="lTGlgWKoqayN8ejijUYGiNOqRPDyRt58eg8QpU7w">


    <!-- include libraries(jQuery, bootstrap) -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
    <title>Admin Read Question</title>
    <!-- Styles -->
    <link href="https://animal-aid.me/css/app.css" rel="stylesheet">
    <script>
        window.Laravel = {"csrfToken":"lTGlgWKoqayN8ejijUYGiNOqRPDyRt58eg8QpU7w"};
    </script>
    <style >
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



                   <a href="#"></a>
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
</div>

    <div class="container">
        <div class="panel panel-default">
          <div class="panel-heading">
             <h4>ตอบปัญหาจากทางบ้าน </h4>
          </div>
                 <div class="panel-body" style="word-wrap:break-word;">
                   <h1>{{$data->topic}}</h1>
                   <hr>

                     {{$data->content}}

                 </div>
        </div>
    </div>





  </body>
</html>
