@extends('layouts.app')
<title>Admin Profile </title>
  <style>
  .si{
    font-size:16px;
  }
li{
  font-size: 22px;
}
body{
  font-size: 16px;
}

  </style>
@section('content')

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



@endsection
