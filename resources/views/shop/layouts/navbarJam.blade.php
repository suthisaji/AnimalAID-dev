<style>
.bg-inverse {
    background-color: #2d2c2c !important;
  }
  .navbar-light .navbar-brand, .navbar-light .navbar-toggler {
    color: #9d9d9d;
}
.navbar-light .navbar-nav .nav-link {
    color: #fff;
}
.navbar {
    text-transform: unset;
}

</style>
<nav class="navbar navbar-toggleable-md navbar-light bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" style="font-size:20px;" href="all">
            &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;Animal A-I-D
    </a>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="navmain">
              <a class="nav-link" href="../animal">รายชื่อสัตว์<span class="sr-only">(current)</span></a>
          </li>
          <li class="navmain">
              <a class="nav-link" href="../addNews">เพิ่มข่าวและกิจกรรม</a>
          </li>
          <li class="navmain">
              <a class="nav-link" href="../checkAdoption"> ตรวจสอบการขอรับเลี้ยงสัตว์: <span style="color:#FFFF00"> {{DB::table('adoptions')->join('animals', 'adoptions.animal_id', '=', 'animals.animal_id')
              ->where('animals.admin_id','=', Auth::user()->id)
              ->where('adoptions.status', '=','Recipient')
            ->count()}} </span></a>
          </li>
          <li class="navmain">
              <a class="nav-link" href="../admin">ตอบปัญหา: <span style="color:#FFFF00">{{DB::table('blogs')->where('status','answered')->count()}}</span>/{{DB::table('blogs')->count()}}</a>
          </li>
          <li class="navmain">
              <a class="nav-link" href="../addProductPage">เพิ่มสินค้า</a>
          </li>
          <li class="navmain">
              <a class="nav-link" href="../shippings">ใบจัดส่งสินค้า :<span style="color:#FFFF00">{{DB::table('shippings')->where('shipping_status', '=','กำลังตรวจสอบ')->count()}}</span></a>
          </li>
          <li class="navmain">
            <li class="nav-link">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ตรวจสอบสลิป<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="transferDocument">สลิปสั่งสินค้า:<span style="color:red">{{DB::table('transferMoneys')->where('checking_status', '=','wait')->orWhere('checking_status', '=','กำลังตรวจสอบหลักฐาน')->count()}}</span></a></li>
                <li><a href="adminCheckSlip">สลิปการบริจาคเงิน:<span style="color:red">{{DB::table('userUpdateSlips')->where('status_check_yet', '=','NotCheck')->count()}}</a>
                  <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">{{csrf_field()}}</form></li>
              </ul>
            </li>
          </li>


        </ul>

        <ul class="navbar-nav ">
          @if(!empty($position))
            @if( $position== 'admin')
              <li class="nav-link">
           <a href="admin">การจัดการ</a>
         </li>
       @endif
     @endif
            <!-- Authentication Links -->
           <!-- Authentication Links -->
                 @if (Auth::guest())
                     <li class="nav-link"><a href="{{ route('login') }}">เข้าสู่ระบบ</a></li>
                     <li class="nav-link"><a href="{{ route('register') }}">สมัครสมาชิก</a></li>
                 @else
                   <li class="nav-link">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                           {{ Auth::user()->name }} <span class="caret"></span>
                       </a>

                       <ul class="dropdown-menu" role="menu">
                         @if(Auth::user()->position=='user')
                         <li class="nav-link">
                           <a href="userProfile">ข้อมูลส่วนตัวผู้ใช้ </a>
                         </li>
                         <li class="nav-link">
                             <a href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                 ออกจากระบบ
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 {{ csrf_field() }}
                             </form>
                         </li>
                       @else <li class="nav-link">
                          <a href="adminProfile">ข้อมูลส่วนตัวแอดมิน</a>
                        </li>
                           <li class="nav-link">
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
</nav>
