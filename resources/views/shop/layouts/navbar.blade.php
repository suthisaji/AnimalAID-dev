<nav class="navbar navbar-toggleable-md navbar-light bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;
    <a  class="navbar-brand" href="all">
      <img src="images/S__1261612.jpg" width="60" height="60" class="d-inline-block align-top" alt=""></a>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/all">หน้าแรก <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/webshop">สินค้า</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/webshop/checkout">order</a>
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
                      <li class="nav-link">
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
                    @else <li class="fl tw16">
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
