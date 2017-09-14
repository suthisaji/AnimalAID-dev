<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" link href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" link href="{{url('css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('/css/shop-homepage.css')}}"/>
    <link rel="stylesheet" href="{{url('/css/index.css')}}"/>

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

    <title>Create question</title>
          {{Html::style('css/shop-homepage.css')}}<!--ตรงนี้คือฟ้อนแบบไม่มีหัว-->
    <style>
    .owner{
      width: 40%;
    }
    .to{
      width: 80%;
    }

    /*pop up*/
    @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400);

.b, .bb {
  position: absolute;
  width: 100%;
  height: 100%;
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
}

.bb {
 background:#e6fff2;
  opacity: .4;
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
  display: none;
  top: 5px;
right: 0px;
    background: darkgray;
}


#send:hover {
  background: #8ecf68;
}
#send:active {
  background: #5a9f32;
}

.message {
  position: absolute;
  top: -200px;
  left: 50%;
  transform: translate(-50%, 0%);
  width: 300px;
  background: white;
  border-radius: 8px;
  padding: 30px;
  text-align: center;
  font-weight: 300;
  color: #2c2928;
  opacity: 0;
  transition: top 0.3s cubic-bezier(0.31, 0.25, 0.5, 1.5), opacity 0.2s ease-in-out;
}
.message .check {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -50%) scale(4);
  width: 120px;
  height: 110px;
  background: #71c341;
  color: white;
  font-size: 3.8rem;
  padding-top: 10px;
  border-radius: 50%;
  opacity: 0;
  transition: transform 0.2s 0.25s cubic-bezier(0.31, 0.25, 0.5, 1.5), opacity 0.1s 0.25s ease-in-out;
}
.message .scaledown {
  transform: translate(-50%, -50%) scale(1);
  opacity: 1;
}
.message p {
  font-size: 1.8rem;
  margin: 25px 0px;
  padding: 0;
}
.message p:nth-child(2) {
  font-size: 2.3rem;
  margin: 40px 0px 0px 0px;
}
.message #ok {
  position: relative;
  color: white;
  border: 0;
  background: #71c341;
  width: 100%;
  height: 50px;
  border-radius: 6px;
  font-size: 2rem;
  transition: background 0.2s ease;
  outline: none;
}
.message #ok:hover {
  background: #8ecf68;
}
.message #ok:active {
  background: #5a9f32;
}

.comein {
  top: 150px;
  opacity: 1;
}
    /*end popup*/
    </style>
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
               <a class="navbar-brand"  style="font-size:20px;"  href="all">Animals A-I-D</a>
           </div>
           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                   <li >
                       <a href="dm">การบริจาคเงิน</a>
                   </li>
                   <li>
                       <a href="db">การบริจาคเลือด</a>
                   </li>
                   <li>
                       <a href="da">หาบ้านให้สัตว์</a>
                   </li>
                   <li  >
                       <a href="newsAll">ข่าวสารและกิจกรรม</a>
                   </li>
                   <li class="active" >
                       <a href="allQuestions">สอบถามผู้รู้เกี่ยวกับสัตว์เลี้ยง</a>
                   </li>


               </ul>
               <!--check login -->
          <ul class="nav navbar-nav navbar-right">
            @if(!empty($position))
              @if( $position== 'admin')
                <li class="fl">
             <a href="admin">การจัดการ</a>
           </li>
         @endif
       @endif
              <!-- Authentication Links -->
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
           <!-- /.navbar-collapse -->
       </div>
       <!-- /.container -->
   </nav>
    <div class="container">

      <div class="panel panel-default">
        <div class="panel-heading">
          <center><h4>ตั้งกระทู้คำถาม </h4></center>
        </div>
        <div class="panel-body">
        <form action="{{url('insert')}}" method="post">
            {{ Form::token() }}
          <div class="form-group owner">
            <label for="topic">questioner</label>
            <input type="text" name="name" id="name"   class="form-control" required >
          </div>
          <div class="form-group to">
            <label for="topic">Title</label>
            <input type="text" name="topic" id="topic"  class="form-control" required >
          </div>
          <div class="form-group" >
            <textarea id="summernote" name="summernote" class="form-control"  required >
            </textarea>
          </div>
          <div class="form-group">
          <!--popup-->

          <div class='bb'></div>
          <div class="form-group">
          <input type="submit" name="send" id="send" value="create" class="btn btn-success">
          <input type="button" name="clear" id="clear" class="btn btn-danger pull-right" value="Clear">


          </div>
          <div class='message'>
          <div class='check'>
            &#10004;
          </div>
          <p>
            ตั้งกระทู้คำถาม
          </p>
          <p>
            เรียบร้อย
          </p>
          <button id='ok'>
            ตกลง
          </button>
        </div>
        <!--end popup-->

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



   <!--คำถามรวม-->
   <div class="container">
       <div class="panel panel-default">
          <div class="panel-heading">
             <h4>รายการคำถามอื่นๆ </h4>
          </div>
                <div class="panel-body">
                    <table class="table table-striped">
                         <thead>
                           <tr>
                             <th>หัวเรื่อง</th>
                             <th>แอคชั่น</th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach($data as $d )
                             <tr>
                               <td>  {{$value = str_limit($d->topic, 80)}}</td>

                               <td>

                                 <a href="{{url('readSummer',array($d->id))}}">เปิดอ่าน</a>  {{-- จะให้ชิดขวาก้ได้ เพิ่มแท้ก   <p align="right"> นี้--}}
                              <!--  |<a href="{{url('deleteSummer',array($d->id))}}" onclick="return confirm('Please confirm again !!!')" >Delete</a> |
                                 <a href="{{url('editSummer',array($d->id))}}">Edit</a>-->
                               </td>
                             </tr>
                           @endforeach
                         </tbody>

                    </table>

                </div>
       </div>
   </div>
<!--จบตารางคำถามรวม-->





    <script type="text/javascript">
         $(document).ready(function(){
           $('#summernote').summernote({
            height:'200px',
            placeholder:'content here ..' //placeholderเสือกไม่ขึ้น งง

          //  fontNames:['Arial','Arial Black','Khmer OS'],
          })
     })
     $('#clear').on('click',function(){
       $('#summernote').summernote('code',null);

     })


     $('#send').click(function(){send(50)});
     $('#ok').click(function(){send(500)});

     //setTimeout(function(){go(50)},700);
     //setTimeout(function(){go(500)},2000);

     function send(nr) {
     $('.bb').fadeToggle(200);
     $('.message').toggleClass('comein');
     $('.check').toggleClass('scaledown');
     $('#send').fadeToggle(nr);
     }
</script>
  </body>
</html>
