
<!DOCTYPE html>
<html>
<head>
<style>
/* mouse over link */
a:hover {
    color: white;
}

/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 190px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 44%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style>
</head>
<body style="text-align:center">

<h2>Popup</h2>

<div class="popup" onclick="myFunction()">
  <center><a href="#">
    <button type="button" class="btn btn-success">
    <span style="font-size:21px">เขียนสอบถามเพิ่มเติม<span> <img src="/images/pencil.png" style="width:30px;height:30px;">
    </button></a>
  </center>
  <span class="popuptext" id="myPopup">  <a href="{{ route('login') }}" class="btn btn-sm btn-success"><span style="color:white">เข้าสู่ระบบ</span></a>
  &nbsp;  &nbsp; &nbsp;<a href="{{ route('register') }}" class="btn btn-sm btn-warning"><span style="color:white">สมัครสมาชิก</span></a></span>
</div>

<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

</body>
</html>
