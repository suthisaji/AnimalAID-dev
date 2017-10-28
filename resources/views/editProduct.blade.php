<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <script src="https://cdn.omise.co/card.js" charset="utf-9"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>แก้ไขสินค้า</title>

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
        font-size: 15px;
      }
      body{
        font-size: 16px;
      }
      .fl{
        font-size: 16px;
      }
    </style>
</head>
<body>
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
        <a class="navbar-brand"  style="font-size:20px;" href="../all">Animal A-I-D </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">

            <li><a href="../animal">รายชื่อสัตว์</a></li>
            <li><a href="../addNews">เพิ่มข่าวและกิจกรรม</a></li>
            <li><a href="../checkAdoption">ตรวจสอบการขอรับเลี้ยงสัตว์: <span style="color:red">{{DB::table('adoptions')->join('animals', 'adoptions.animal_id', '=', 'animals.animal_id')
            ->where('animals.admin_id','=', Auth::user()->id)
            ->where('adoptions.status', '=','Recipient')
          ->count()}}</span></a></li>
            <li><a href="../admin">ตอบปัญหา: <span style="color:red">{{DB::table('blogs')->where('status','answered')->count()}}</span>/{{DB::table('blogs')->count()}}</a></li>
            <li ><a href="../addProductPage">เพิ่มสินค้า</a></li>
            <li><a href="../transferDocument">ตรวจสอบสลิปเงิน: <span style="color:#FFFF00">{{DB::table('transferMoneys')->where('checking_status', '=','wait')->count()}}</span></a></li>
            <li><a href="../shippings">ใบจัดส่งสินค้า:<span style="color:#FFFF00">{{DB::table('shippings')->where('shipping_status', '=','กำลังตรวจสอบ')->count()}}</span></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <!-- Left Side Of Navbar -->

          <!-- Right Side Of Navbar -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="../adminProfile">ข้อมูลส่วนตัว</a></li>
              <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ออกจากระบบ</a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">{{csrf_field()}}</form></li>
            </ul>
        </ul>
    </div>
   </div>
  </nav>

        <div class="container">
          <div class="row">
            <div class="col-sm-3" style=""></div>

            <div class="col-md-6">
              <h1 style="text-align:center">แก้ไขสินค้า</h1>
              <form name="edit_product" action="/edit_Product" class="form" method="post" enctype="multipart/form-data" onsubmit="return validation()">
                {{ Form::token() }}

                <div class="form-group">
                    <label for="product_id" class="form-label">รหัสสินค้า</label>
                    <input type="text" class="form-control" name="product_id" value="{{ $product->product_id }}" readonly/>
                </div>

                <div class="form-group">
                  <label for="product_name" class="form-label">ชื่อสินค้า</label>
                  <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}" required>
                </div>

                <div class="form-group" >
                    <label for="product_pic" >รูปภาพ</label><br>
                    <img id="pre_img" src="{{url('/images/'.$product->product_pic)}}" alt="" width="130" height="130">
                  <?php echo "$product->product_pic"; ?>
                    <div >
                      <input type="file" name="product_pic" id="file_up_img"/><label for="file_up_img" value"{{$product->product_pic}}">{{$product->product_pic}}</label>
                    </div>
                </div>



                <div class="form-group">
                    <label for="category_id" class="form-label">ประเภทสินค้า</label>
                    <br>
                    <select class="custom-select" style="  border: 5px solid rgba(0, 255, 0,.15);" name="category_id">
                        <option value="{{$product->join_category->category_id}}">  @if($product->join_category->category_name=='เครื่องใช้ของสัตว์')
                          อุปกรณ์สำหรับสัตว์เลี้ยง
                         @elseif($product->join_category->category_name=='อาหารสัตว์')
                          อุโภคบริโภค
                         @else
                        เครื่องแต่งกาย
                          @endif</option>
                      @foreach($category as $ct)
                        @if($ct->category_id!=$product->join_category->category_id)
                          <option value="{{$ct->category_id}}">  @if($ct->category_name=='เครื่องใช้ของสัตว์')
                          อุปกรณ์สำหรับสัตว์เลี้ยง
                        @elseif($ct->category_name=='อาหารสัตว์')
                           อุโภคบริโภค
                         @else
                          เครื่องแต่งกาย
                          @endif</option>
                        @endif
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                  <label for="product_detail" class="form-label">รายละเอียดสินค้า</label>
                  <textarea class="form-control" name="product_detail" row="2" >{{$product->product_detail}}</textarea>
                </div>

                <div class="form-group">
                  <label for="number_product" class="form-label">จำนวนสินค้า</label>
                  <input type="number" class="form-control" name="number_product" value="{{$product->number_product}}" required>
                </div>
                <div class="form-group">
                  <label for="product_price" class="form-label">ราคาขายสินค้า ฿</label>
                  <input type="number" class="form-control" name="product_price" value="{{$product->product_price}}" required>
                </div>

                <div class="text-center">
                  <button class="btn btn-success">ยืนยันการแก้ไขสินค้า</button>
                </div>
              </form>
            </div>
            <div class="col-sm-3" style=""></div>
          </div>
        </div>


        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <!--  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


        <script type="text/javascript">
            function changeImg(input){
                if(input.files && input.files[0]){
                  var reader = new FileReader();
                  reader.onload = function(evt){
                    $('#pre_img').attr('src', evt.target.result);
                  }
                  reader.readAsDataURL(input.files[0]);
                }
            }
            $(document).ready(function(){
              $('#file_up_img').change(function(){
                  changeImg(this);
              });
            });
        </script>
  </body>
</html>
