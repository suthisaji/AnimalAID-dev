<!DOCTYPE html>

<head>
    <script src="https://cdn.omise.co/card.js" charset="utf-9"></script>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Core CSS -->
    <link href="https://blackrockdigital.github.io/startbootstrap-shop-homepage/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="https://blackrockdigital.github.io/startbootstrap-shop-homepage/css/shop-homepage.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-shop-homepage/js/bootstrap.min.js"></script>
    <!-- Custom Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
            {{Html::style('css/shop-homepage.css')}}
 
</head>

<body>
  <!-- Navigation -->
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
                   <li>
                       <a href="dm">การบริจาคเงิน</a>
                   </li>
                   <li class="active">
                       <a  href="db"> การบริจาคเลือด</a>
                   </li>
                   <li>
                       <a href="da">หาบ้านให้สัตว์</a>
                   </li>
                   <li>
                       <a href="#">ติดตามสัตว์</a>
                   </li>
                   <li>
                       <a href="newsUser">ข่าว</a>
                   </li>
               </ul>

<!--check login yet-->
<ul class="nav navbar-nav navbar-right">
  @if(!empty($position))
    @if( $position== 'admin')
      <li>
   <a href="admin">การจัดการ</a>
 </li>
@endif
@endif
    <!-- Authentication Links -->
    @if (Auth::guest())
        <li><a href="{{ route('login') }}">เข้าสู่ระบบ</a></li>
        <li><a href="{{ route('register') }}">สมัครสมาชิก</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        ออกจากระบบ
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endif
</ul>
<!--end check-->






           </div>
           <!-- /.navbar-collapse -->
       </div>
       <!-- /.container -->
   </nav>
 <div class="container">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ช่องทางการบริจาคเงิน</h1>
                </div>
            </div
            <!-- /.row -->

            <div class="row text-center">

                <div class="col-lg-12">
                  <h2>บริจาคเงินผ่านทางบัตรเครดิต</h2>
                  <h3>บริจาคเงินเข้ากองทุนรักษาพยาบาลสัตว์ป่วยอนาถา</h3>
                  <h4>ผ่านบัญชีออมทรัพย์ ธนาคารกรุงเทพ สาขามหาวิทยาลัยเกษตรศาสตร์</h4>
                  <h2>เลขที่บัญชี 043-7-12167-6</h2>
                  <h4>ชื่อบัญชี กองทุนรักษาพยาบาลสัตว์ป่วยอนาถา</h4>
                  <hr>
                </div>
  <h3>Omise มาใช้เป็น Payment Gateway<h3>
    <form name="checkoutForm" method="POST" action="/checkout">
       {{ Form::token() }}
        <script type="text/javascript" src="https://cdn.omise.co/omise.js" data-key="pkey_test_57gpwuk3sm7mirumtsx" data-image="https://fbi.dek-d.com/27/0438/4821/118407409?v=4.4" data-frame-label="Animal-AID 4.0" data-button-label="Pay now" data-submit-label="Submit" data-location="yes"
            data-amount="320000" data-currency="thb">
        </script>
        <!--the script will render <input type="hidden" name="omiseToken"> for you automatically-->
    </form>


    <!-- data-key="pkey_test_57gpwuk3sm7mirumtsx" -->
</body>

</html>
