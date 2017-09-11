<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <style>
    @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400);
body, html {
  height: 100%;
  font-size: 20px;
  font-family: Source Sans Pro;
}

.b, .bb {
  position: absolute;
  width: 100%;
  height: 100%;
/*  background: url("http://i.imgur.com/kje4L5j.jpg");
  background-attachment: fixed;
  background-size: cover;
  background-position: center;*/
}

.bb {
  background:#e6fff2;
  opacity: .4;

  background-attachment: fixed;
  background-size: cover;
  background-position: center;
  display: none;
}

#send {
  position: absolute;
  top: 30px;
  left: 50%;
  transform: translate(-50%, 0%);
  color: white;
  border: 0;
  background: #71c341;
  width: 100px;
  height: 30px;
  border-radius: 6px;
  font-size: 1rem;
  transition: background 0.2s ease;
  outline: none;
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
  font-size: 1.1rem;
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
  font-size: 1.2rem;
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

    </style>
  </head>
  <body>
    <div class='b'></div>
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


<script type="text/javascript">
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
