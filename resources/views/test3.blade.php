<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<style media="screen">
.loi{
  position: fixed;
  left: -1%;
   top: 12%;

}
</style>
  </head>
  <body>

<img src="\images\Admin Icon - 01.png" id="zoomimg" height="13%" width="13%" class="loi">




<script type="text/javascript">
$('#zoomimg').mouseenter(function() {
  $(this).css("cursor","pointer");
  $(this).animate({width: "18%", height: "18%"}, 'slow');
});

$('#zoomimg').mouseleave(function() {
  $(this).animate({width: "13%",height:"13%"}, 'slow');
});
</script>
  </body>
</html>
