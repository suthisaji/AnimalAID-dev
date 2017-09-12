
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
           <link href="https://animal-aid.me/css/app.css" rel="stylesheet">
         <title>Admin Profile </title>
<script>
    window.Laravel = {"csrfToken":"lTGlgWKoqayN8ejijUYGiNOqRPDyRt58eg8QpU7w"};
</script>
  <style>

.navbar>.container-fluid .navbar-brand, .navbar>.container .navbar-brand {
    margin-left: -34px;
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

      <div class="col-md-9">
        <div class="box box-success">
          <div class="panel-body box-header">
              <div class="col-md-12 lead si">ข้อมูลส่วนตัวแอดมิน
                <hr>
              </div>
            <div class="row">
              <div class="col-md-4 text-center">
            <img src="\images\Admin Icon - 01.png" alt="Mountain View" style="width:700px;height:278px; max-width: 100%;">
              </div>
               <b>
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="only-bottom-margin">แอดมิน  : {{$name}}<br></h2>
                  </div>
                </div>
                <div class="row si">
                  <div class="col-md-6">

                    <span class="text-muted ">รหัสแอดมิน <span> :{{ $userId}} <br>
                    <span class="text-muted">username :</span> {{$username}} <br>
                    <span class="text-muted">Email : </span>  {{$email}}<br><br>
                    <span class="text-muted">เบอรติดต่อ :</span>  {{$tel}}<br>
                    <span class="text-muted">สมัครเมื่อ :</span> {{$created}} <br>

                    <br>


                      <ul class="list-group ">

                    <li class="list-group-item list-group-item-info">
                  <span class="badge si">{{$countAdminAction}} ครั้ง </span>
                  กิจกรรม
                    </li>

                      </ul>
                </div>
                </b>

              </div>
            </div>
          </div>
          <!--<div class="box-footer clearfix">-->
            <!--<div class="box-footer clearfix">-->
          <h6 >หากต้องการเปลี่ยนแปลงข้อมูลกรุณาติดต่อ 090-9991002<h6>
            <!--</div>-->
          <!--</div>-->
        </div>
      </div>
    </div>

</div>
