<style>


.navbar-light .navbar-nav .open>.nav-link, .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.open, .navbar-light .navbar-nav .nav-link.active {
    color: #fdce9a;
}

</style>
<nav class="navbar navbar-toggleable-md navbar-light bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="all">
        <img src="{{ url('images/S__1261612.jpg') }}" width="60px"/>
    </a>
    <div class="collapse navbar-collapse tw" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="navmain">
                <a class="nav-link" href="all">หน้าแรก <span class="sr-only">(current)</span></a>
            </li>
            <li class="navmain">
                <a class="nav-link" href="dm">การบริจาคเงิน</a>
            </li>
            <li class="navmain active">
                <a class="nav-link" href="webshop">สั่งซื้อของที่ระลึก</a>
            </li>
            <li class="navmain">
                <a class="nav-link" href="db">การบริจาคเลือด</a>
            </li>
            <li class="navmain">
                <a class="nav-link" href="da">หาบ้านให้สัตว์</a>
            </li>
            <li class="navmain">
                <a class="nav-link" href="newsAll">ข่าวสารและกิจกรรม</a>
            </li>
            <li class="navmain">
                <a class="nav-link" href="allQuestions">สอบถามผู้รู้เกี่ยวกับสัตว์เลี้ยง</a>
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
</nav>
