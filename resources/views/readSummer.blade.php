<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
      <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
      <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
    <title>summer Note</title>
  </head>
  <body>

    <div class="container">
        <div class="panel panel-default">
           <div class="panel-heading">
              <h4>Read Information </h4>
           </div>
                 <div class="panel-body">
                   <h1>{{$data->topic}}</h1>
                   <hr>
                  {{$data->content}}

                 </div>
        </div>
    </div>





  </body>
</html>
