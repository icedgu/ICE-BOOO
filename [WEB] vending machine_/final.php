<!doctype html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<meta charset="utf-8">
<title>ICE-BOOO의 자판기 결제창</title>
<style>
body{
  background-color: #F3CD52;
}
.button {
  display: inline-block;
  margin-top: 2em;
  padding: 0.70em 1.5em 0.70em 1.5em;
  background: #d39e00;
  letter-spacing: 0.10em;
  line-height: 1.8em;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 1em;
  color: #333;
}

.button:before {
  display: inline-block;
  background: #8DCB89;
  margin-right: 1em;
  width: 20px;
  height: 20px;
  line-height: 20px;
  border-radius: 20px;
  text-align: center;
  color: #272925;
}

.button-small {
  padding: 0.9em 2em;
  background: #67128F;
  border-radius: 5px;
  line-height: 1.8em;
  font-size: 1em;
}
/*버튼 디자인*/
input[type=checkbox]{
  display: none;
}
input[type=checkbox] + label{
  display:inline-block;
  cursor:pointer;
  position:relative;
}
input[type=checkbox]+label:before{
  content:"";
  display:inline-block;
  width:40px;
  height:40px;
  bottom:1px;
  background-color: #ccc;
  border-radius: 2px;
  box-shadow: inset 0px 1px 1px 0px rgba(0,0,0, .3),0px 1px 0px 0px rgba(255,255,255, .8);

}
input[type=checkbox]:checked+label:before{
  content:"\2713";
  text-shadow: 1px 1px 1px rgba(0,0,0, .2);
  /* font-size:90px; */
  font-weight: 800;
  color:#fff;
  background: #2f87c1;
  text-align: center;

}
div {
  text-align:right;
  margin-right:100px;
}
h2{
  font-weight:bold;
  color:#FF8C00;
}
#my-box {
position: absolute;
top: 67%;
left: 55%;
margin-top: -86px;
margin-left: -89px;
text-align:center;

}/*타이머 위치*/
</style>
</head>
<body>
<h1 align="center">Payment Information</h1>
    <center>
        <p stlyle="margin-bottom:0px">
          <div id=my-box>
        <div class= 'time'>
          <h2>  <span id="timer" ></span></h2>
        </div></div>

        결제 - <span id="itemName">ICE-BOOO의 결제시스템</span><br>
        총 결제금액  <span id=""></span>
        <strong> <span id="bitcoinTotal"> Ξ
          <?php
          $payment = $_GET['totalPrice'];
          echo $_GET['totalPrice']."BTC";

          require_once('easybitcoin.php');
          $bitcoin = new Bitcoin('bitcoinrpc', 'testuser2@', 'localhost', '18443');
          $address = $bitcoin->getnewaddress();   //사용자 공개키 생성
          ?>
        </span></strong><br>
        주소 - <span id=""></span>
    <strong> <span id="bitcoinAddress"> Ξ
          <?php
          echo $address;
          ?>
        </span></strong><br>
        <br>
        <img id="qrcode" style="min-width:100; margin:20px;min-height:800px;max-width:200; max-height:1000px"
        src="https://chart.googleapis.com/chart?chs=200x200&amp;cht=qr&amp;chl=userWallet://?publicKeyofProvider=<?=$address?>%26totalPrice=<?=$payment?>">   <!--  사용자 공개키, 총 금액정보를 저장한 QR출력   -->
      </p>

<h2><a href="#"  class="button" id="final_button">결제완료</a><h2>
</body>

</html>
<script>
$(document).ready(function () {
$('#final_button').click(function() {       //결제 알림창 생성
      alert(showp() +' 물품이 곧 출고됩니다. 잠시만 기다려주세요.');
      document.location.href="/main.php"
    })
  });
  function showp(){            //자판기 물품 이름값 가져오기
    var finalimg ="<?= $_GET['finalimg']?>";
    return finalimg;
  }
setTimeout(function() {      //60초 카운트 후 main.php로 이동
location.href="/main.php";
}, 61000);
$(document).ready(function () {
     startTimer();

  });
  timer=document.getElementById("timer");
startSecond="60";
setInterval("timer.innerHTML=startSecond+'';startSecond--;",1000);

      function getTotalPrice()     //총 금액 합산
      {
        var totalPrice = 0;
        for(var i =0; i<6; i++){
          var counter = Number($('#counter'+i).val());//1
          var price = Number($('#tdPrice'+i).text());//700
          if(isNaN(price) || isNaN(counter)){
            break;
          }
          totalPrice += counter*price;
          //totalPrice = totalPrice + counter*price
        }
        return totalPrice;
      }


</script>
