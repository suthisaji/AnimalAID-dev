<!DOCTYPE html>
<title>Omise</title>
<head>
    <script src="https://cdn.omise.co/card.js" charset="utf-9"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Omise</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" link href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" link href="{{url('css/bootstrap.min.css')}}">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('/css/shop-homepage.css')}}"/>
    <link rel="stylesheet" href="{{url('/css/index.css')}}"/>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="https://blackrockdigital.github.io/startbootstrap-shop-homepage/js/bootstrap.min.js"></script> -->

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    {{Html::style('css/shop-homepage.css')}}

 <style type="text/css">
 li{
  font-size: 16px;
}
body{
  font-size: 16px;
}
.fl{
  font-size: 16px;
}
.donate-box-header{
  font-weight: bold;
  display: inline;
}
/*.left-tab{
  float: left;
}

.right-tab{
  float: right;
}*/


.bank-list-item{
  list-style: none;
  overflow: hidden;
  padding: 1rem 0;
  border-bottom: 1px solid #ebebeb;
  cursor: pointer;
}

.paytype{
  width: 7rem;
  float: left;
  line-height: 2.4rem;
}
.paytype > img{
  width: 100%;
}

.payname{
  color: #000;
  float: left;
  margin-left: 1rem;
}

.selected-bank{
  display: none;
}

.selected-bank h3, img {
    display: block;
    margin: 0 auto;
    text-align: center;
    line-height: 5rem;
}

.selected-bank > img{
  width: 7rem;
}

/*nav*/
.navbar-inverse {

    background-color: #fffdfd;
    border-color: #fdf9f9;

    background-image: -webkit-linear-gradient(top,#FFFFFF 0,#FFFFFF 100%);
    background-image: -o-linear-gradient(top,#FFFFFF 0,#FFFFFF 100%);
    background-image: -webkit-gradient(linear,left top,left bottom,from(#FFFFFF),to(#FFFFFF));
    background-image: linear-gradient(to bottom,#FFFFFF 0,#FFFFFF 100%);
}
.navbar-inverse .navbar-nav >li>a:hover {
    color: #fb841b;
    background-color: rgba(234, 243, 150, 0);
}
.navbar-inverse .navbar-nav >li>a:hover>span {
    color: #2ECCFA;
    background-color: rgba(234, 243, 150, 0);
}
.navbar-inverse .navbar-nav >li>a:hover>span>span {
    color: #01DF01;
    background-color: rgba(234, 243, 150, 0);
}

.navbar-inverse .navbar-nav>li>a {
    color: #0c0c0c;
}
.navbar {
    min-height: 88px;
  }
  .navbar-brand>img {
    position: absolute;
    left: 5%;
  }
  .navmain {
    padding-top: 18px;
    padding-bottom: 15px;
}
.navbar-inverse .navbar-toggle .icon-bar {
    background-color: #ec9619;
}
.navbar-inverse .navbar-toggle {
    border-color: #d29f24;
}
.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
    border-color: #fdce9a;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 9px;
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.open>a {
  background-image: linear-gradient(to bottom,	#E5E4E2 0,	#B6B6B4 100%);
}

 </style>
</head>

<body>
  <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> <a  class="navbar-brand" href="all">   <img src="images/S__1261612.jpg" width="60" height="60" class="d-inline-block align-top" alt=""></a>
       <div class="container">
           <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>

           </div>
           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                 <li class="navmain">
                     <a href="all">หน้าหลัก</a>
                 </li>
                   <li class="navmain active">
                       <a href="dm">การบริจาคเงิน</a>
                   </li>
                   <li class="navmain ">
                       <a href="webshop">สั่งซื้อของที่ระลึก</a>
                   </li>
                   <li class="navmain ">
                       <a  href="db">การบริจาคเลือด</a>
                   </li>
                   <li class="navmain ">
                       <a href="da">หาบ้านให้สัตว์</a>
                   </li>

                   <li class="navmain ">
                       <a href="newsAll">ข่าวสารและกิจกรรม</a>
                   </li>
                   <li class="navmain">
                       <a href="allQuestions">สอบถามผู้รู้เกี่ยวกับสัตว์เลี้ยง</a>
                   </li>

               </ul>

<!--check login yet-->
<ul class="nav navbar-nav navbar-right">
  @if(!empty($position))
    @if( $position== 'admin')
      <li class="fl">
   <a href="admin">การจัดการ</a>
 </li>
@endif
@endif
    <!-- Authentication Links -->
    @if (Auth::guest())
        <li class="fl"><a href="{{ route('login') }}">เข้าสู่ระบบ</a></li>
        <li class="fl"><a href="{{ route('register') }}">สมัครสมาชิก</a></li>
    @else
        <li class="dropdown fl">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
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
                  <h2>บริจาคเงินผ่านทาง iBanking</h2>
                  <h3>ชื่อบัญชี มูลนิธิเพื่อสัตว์ประสบภัยและเหตุฉุกเฉิน</h3>
                  <h4>ผ่านบัญชีออมทรัพย์ ธนาคารกรุงไทย สาขามหาวิทยาลัยเกษตรศาสตร์ บางเขน</h4>
                  <h3>บัญชีเลขที่ 986-4-399968-3</h3>
                  <br>

                </div>
              </div>

              <div class="row">
                <!-- DONATE BOX -->
                  <div class="col-md-6 col-md-offset-3">
                    <div class="donate-box">
                        <div class="donate-box-header">
                          <div class="left-tab">
                            ธนาคารออนไลน์
                          </div>
                          <div class="right-tab">
                            บัตรเครดิต
                          </div>
                        </div>
                        <div class="donate-box-content">
                          <div class="selected-bank">
                            <input type="hidden" id="bankcode" value="">
                            <div class="row">
                              <div class="col-md-12 getBankSelected">
                                <h3></h3>
                                <img src="" alt="" />
                              </div>
                            </div>
                            <div class="row">
                              <div class="row">
                                 @if (Auth::guest())
                                   <div class="col-md-6">
                                   <label for="">ชื่อ</label>
                                   <input type="text" class="form-control" id="name" placeholder="ชื่อ"/>
                                 </div>

                                 <div class="col-md-6">
                                   <label for="">นามสกุล</label>
                                   <input type="text" class="form-control" id="sname" placeholder="นามสกุล"/>
                                 </div>
                               </div>

                               <div class="row">
                                 <div class="col-md-12">
                                   <label for="">เบอร์โทรศัพท์ (กรอกตามความจริงเพื่อรับ SMS ยืนยันการบริจาคเงิน)</label>
                                   <input type="tel" class="form-control" id="tel" placeholder="โทรศัพท์" pattern="[0-9]{10}" required/>
                                 </div>
                               </div>

                                  @else
                                <div class="col-md-6">
                                  <label for="">ชื่อ</label>
                                  <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}"/>
                                </div>

                                <div class="col-md-6">
                                  <label for="">นามสกุล</label>
                                  <input type="text" class="form-control" id="sname" placeholder="นามสกุล"/>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12">
                                  <label for="">เบอร์โทรศัพท์ (กรอกตามความจริงเพื่อรับ SMS ยืนยันการบริจาคเงิน)</label>
                                  <input type="tel" class="form-control" id="tel" value="{{ Auth::user()->tel }}" required/>
                                </div>
                              </div>

                              @endif
                              <div class="row">
                                <div class="col-md-12">
                                  <label for="">จำนวนเงิน</label>
                                  <input type="email" class="form-control" id="amount" placeholder="จำนวนเงินต้องมากกว่า 20 บาท"/>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center" style="padding: 1rem;">
                                  <button id="submit-donate-btn" type="button" class="btn btn-success">ยืนยัน</button>
                                  <button id="cancel-donate-btn" type="button" class="btn btn-danger">ยกเลิก</button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <ul class="bank-list">
                            <li class="bank-list-item">
                              <div class="paytype">
                                  <img src="{{url('/images/logos/ayud.png')}}" alt="" />
                              </div>
                              <div class="payname">ธนาคารกรุงศรี</div>
                            </li>
                            <li class="bank-list-item">
                              <div class="paytype">
                                  <img src="{{url('/images/logos/bkk.png')}}" alt="" />
                              </div>
                              <div class="payname">ธนาคารกรุงเทพ</div>
                            </li>
                            <li class="bank-list-item">
                              <div class="paytype">
                                  <img src="{{url('/images/logos/ktb.png')}}" alt="" />
                              </div>
                              <div class="payname">ธนาคารกรุงไทย</div>
                            </li>
                            <li class="bank-list-item">
                              <div class="paytype">
                                  <img src="{{url('/images/logos/scb.png')}}" alt="" />
                              </div>
                              <div class="payname">ธนาคารไทยพาณิชย์</div>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                <!-- DONATE BOX -->
              </div>
              {{--
                 <div class="col-lg-12" style="background-color: #EFFBFB;padding:30px 40px;">
                    <h3><b style="font-size: 32px;">Omise </b> &nbsp;เป็น Payment Gateway<h3>
                  <h2>บริจาคเงินผ่านทางบัตรเครดิต</h2>
                  <h3>เราได้เลือก Omise เป็นช่องทางการในการบริจาคเงินออนไลน์</h3>
                  <h3>ผู้ใช้จะปลอดภัยจากการปลอมแปลง หรือเก็บข้อมูลบัตรเครดิต เพราะมีเทคโนโลยีตรวจสอบข้อมูลว่า เป็นข้อมูลจริงหรือไม่</h3>
                  <h3>ทำให้ไม่มีเรื่องการกรอกข้อมูลปลอมได้ ระบบของเราไม่จำเป็นต้องเก็บข้อมูลบัตรเครดิตของผู้ใช้ไว้</h3>
                  <h3>เพราะ Token จะเป็นตัวแทนข้อมูลบัตรเครดิตของผู้ใช้ที่ถูกเข้ารหัสไว้แล้ว </h3> --}}



    <!-- data-key="pkey_test_57gpwuk3sm7mirumtsx" -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
<script>
$(document).ready(function()
{
  $('ul.bank-list li').click(function(e)
    {
     const bankName = $(this).find("div.payname").text();
     let bankCode = '';
     let bankLogo = '';
     switch (bankName) {
       case 'ธนาคารกรุงศรี':
         bankCode = 'internet_banking_bay'
         bankLogo = '{{url('/images/logos/ayud.png')}}'
         break;
       case 'ธนาคารกรุงเทพ':
         bankCode = 'internet_banking_bbl'
         bankLogo = '{{url('/images/logos/bkk.png')}}'
         break;
       case 'ธนาคารกรุงไทย':
         bankCode = 'internet_banking_ktb'
         bankLogo = '{{url('/images/logos/ktb.png')}}'
         break;
       case 'ธนาคารไทยพาณิชย์':
         bankCode = 'internet_banking_scb'
         bankLogo = '{{url('/images/logos/scb.png')}}'
         break;
       default:
          bankCode = null
     }
     $('.bank-list').css('display', 'none')
     $('#bankcode').val(bankCode)
     $('.getBankSelected > h3').text(bankName);
     $('.getBankSelected > img').attr('src', bankLogo);
     $('.selected-bank').css('display', 'block')
     console.log('bankLogo is ', bankLogo)
    });

    $('#cancel-donate-btn').click(function(e){
      e.preventDefault();
      console.log('eeee')
      $('.selected-bank').css('display', 'none')
      $('.bank-list').css('display', 'block')
    })

    $('#submit-donate-btn').click(function(e){
      const name = $('#name').val()
      const surname = $('#sname').val()
      const tel = $('#tel').val()
      const amount = $('#amount').val()*100
      const bankCode = $('#bankcode').val()
      const data = {
        amount: amount,
        name: name,
        sname: surname,
        tel: tel,
        bank: bankCode
      }
      fetch("{{url('/charge')}}", {
        method: 'POST',
        body: JSON.stringify(data)
      }).then(res => {
        return res.json();
      }).then(json => {
        return window.location.href = json.url
      }).catch(err => {
        console.log('error ',err)
      })
    })

})

</script>

</html>
