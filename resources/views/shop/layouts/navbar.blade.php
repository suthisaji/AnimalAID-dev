<style>
.navbar {
    font-size: 0.875rem;
    text-transform: uppercase;
    font-weight: 600
}
</style>

<nav class="navbar navbar-toggleable-md navbar-light bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="navbar-brand" href="../all">
        <img src="{{ url('images/S__1261612.jpg') }}" width="60" height="60" class="d-inline-block align-top" alt=""/>
    </a>

    <div class="collapse navbar-collapse" id="navbarColor01" style="font-size: 17px;">
        <ul class="navbar-nav mr-auto">
            <li class="navmain">
                <a class="nav-link" href="/all">หน้าหลัก <span class="sr-only">(current)</span></a>
            </li>
            <li class="navmain">
                <a class="nav-link" href="/dm">การบริจาคเงิน</a>
            </li>
            <li class="navmain active">
                <a class="nav-link" href="/webshop">สั่งซื้อของที่ระลึก</a>
            </li>
            <li class="navmain">
                <a class="nav-link" href="/db">การบริจาคเลือด</a>
            </li>
            <li class="navmain">
                <a class="nav-link" href="/da">หาบ้านให้สัตว์</a>
            </li>
            <li class="navmain">
                <a class="nav-link" href="/newsAll">ข่าวสาร&กิจกรรม</a>
            </li>
            <li class="navmain">
                <a class="nav-link" href="/allQuestions">สอบถามเกี่ยวกับสัตว์เลี้ยง</a>
            </li>
            <li class="navmain">
                <a class="nav-link" href="/webshop/checkout">ออเดอร์ของฉัน</a>
            </li>
        </ul>
        <ul class="navbar-nav">
          <!-- <ul class="nav navbar-nav navbar-right"> -->
            @if(!empty($position))
              @if( $position== 'admin')
                <li class="nav-link">
                  <a href="admin">การจัดการ</a>
               </li>



              @endif
            @endif

              <!-- Authentication Links -->
              @if (Auth::guest())

                  <li class="nav-link"><a href="{{ route('login') }}"><span>เข้าสู่ระบบ</span></a></li>
                  <li class="nav-link"><a href="{{ route('register') }}"><span><span>สมัครสมาชิก</span></span></a></li>
              @else
                <li class="nav-link">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                      @if(Auth::user()->position=='user')
                      <li class="fl tw16">
                        <a href="../userProfile">ข้อมูลส่วนตัวผู้ใช้ </a>
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
                    @else <li class="fl tw16">
                       <a href="../adminProfile">ข้อมูลส่วนตัวแอดมิน</a>
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
