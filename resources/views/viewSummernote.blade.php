<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
    <title>summer Note</title>
  </head>
  <body>

    <div class="container">
        <div class="panel panel-default">
           <div class="panel-heading">
              <h4>ดูกระทู้คำถาม</h4>
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

                                  <a href="{{url('readSummer',array($d->id))}}">ดู&ตอบคำถาม</a> | {{-- จะให้ชิดขวาก้ได้ เพิ่มแท้ก   <p align="right"> นี้--}}
                                 <a href="{{url('deleteSummer',array($d->id))}}" onclick="return confirm('Please confirm again !!!')" >ลบ</a> |
                                  <a href="{{url('editSummer',array($d->id))}}">แก้ไข</a>


                                </td>
                              </tr>
                            @endforeach
                          </tbody>

                     </table>

                 </div>
        </div>
    </div>





  </body>
</html>
