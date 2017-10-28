<style>
.bg-inverse {
    background-color: #2d2c2c !important;
  }
  .navbar-light .navbar-brand, .navbar-light .navbar-toggler {
    color: #9d9d9d;
}
.navbar-light .navbar-nav .nav-link {
    color: rgba(199, 199, 199, 0.77);
}
.navbar {
    text-transform: unset;
}
</style>
<nav class="navbar navbar-toggleable-md navbar-light bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="all">
            &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;Animal A-I-D
    </a>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">


            <li class="nav-item">
                <a class="nav-link" href="../addProductPage">กลับไปยังหน้าเพิ่มสินค้า</a>
            </li>



        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../adminProfile">{{ Auth::user()->name }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ออกจากระบบ</a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">{{csrf_field()}}</form>
            </li>
        </ul>
    </div>
</nav>
