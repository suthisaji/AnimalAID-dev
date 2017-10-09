<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <style>
      .it{
        margin:0;
        padding: 0;
        color: #fff;
        text-align: center;
      }
      .boxp{
        width:400px;
        height:200px;
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        overflow:hidden;
      }
      .boxp figure{
        height:100%;
        margin:0;
        padding: 0;

      }
      .boxp figure img{
        width:100%;
      }
      .boxp figcaption
      {
        position :absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        box-sizing: border-box;
        padding: 80px 20px;
        z-index: 100;
        opacity: 0;
        transition-delay: .3s;
        transition:.5s ease;
      }
      .boxp:hover figcaption
      {
        opacity: 1;
      }
      .boxp figure:before,
      .boxp figure:after{
        content:'';
        position:absolute;
        transition: .5s ease-in-out;
        height: 200%;
        width:200%;
        background: #000;
      }
.boxp figure:before
{
  right: 0;
  bottom: 0;
  background: rgba(255, 0, 0, .8);
  transform:skew(45deg) translateX(100%);

}
.boxp figure:after{
  left:0;
  top: 0;
  background: #FF8C00;
  transform: skew(-120deg) translateX(-74.6%);
}
.boxp:hover figure:before{
  transform: skew(45deg) translateX(0%);
}
.boxp:hover figure:after{
  transform: skew(-135deg) translateX(0%);
}




      </style>
    </head>
    <body class="it">
      <div class="boxp">
        <figure>
          <img src="images\Cee.PNG">
          <figcaption>
            <h1>lyl</h1>
            <p>sgksgn;fmldgdm;l</p>
          </figcaption>
        </figure>
      </div>
    </body>
    </html>
