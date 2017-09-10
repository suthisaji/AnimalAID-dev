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
      <a href="all">กลับไปยังall</a>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>Test Summer Note </h4>
        </div>
        <div class="panel-body">
        <form action="{{url('insert')}}" method="post">
            {{ Form::token() }}
          <div class="form-group">
            <label for="topic">questioner</label>
            <input type="text" name="name" id="name" class="form-control" >
          </div>
          <div class="form-group">
            <label for="topic">Title</label>
            <input type="text" name="topic" id="topic" class="form-control">
          </div>
          <div class="form-group">
            <textarea id="summernote" name="summernote" class="form-control">
            </textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="send" id="send" value="create" class="btn btn-success">
            <input type="button" name="clear" id="clear" class="btn btn-danger pull-right" value="Clear">

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
                             <th>Title</th>
                             <th>Action</th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach($data as $d )
                             <tr>
                               <td>  {{$value = str_limit($d->topic, 80)}}</td>

                               <td>

                                 <a href="{{url('readSummer',array($d->id))}}">View</a>  {{-- จะให้ชิดขวาก้ได้ เพิ่มแท้ก   <p align="right"> นี้--}}
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
</script>
  </body>
</html>
