<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css' />
  <title>ICE-BOOO의 자판기</title>
  <style>
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

    body {
      font-family: sans-serif;
      font-size: 35px;
      text-align: center;
      background-color: #F3CD52;
    }

    table {
      background-color: white;
      width: 80%;
    }/*table 디자인*/

    th {
      font-size: 2em;
      background-color: #f9ddff;

    }

    h1 {
      padding-top: 50px;
      /* font-size: 100px; */
      margin: 0;
    }

    #table2 {
      margin-top: 50px;
      margin-bottom: 50px;
      overflow: hidden;
      padding: 8em 0em;
      border-top: 50px solid rgba(255, 255, 255, .4);
      border-left: 50px solid rgba(255, 255, 255, .4);
      border-right: 50px solid rgba(255, 255, 255, .4);
      border-bottom: 50px solid rgba(255, 255, 255, .4);
      background: url(images/img02.jpg) no-repeat;
      background-size: 100% 100%;
    }
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
    h2{
      font-weight:bold;
      color:#FF8C00;
    }
    #my-box {
    position: absolute;
    top: 27%;
    left: 55%;
    margin-top: -86px;
    margin-left: -89px;
    text-align:center;

   }

  </style>
</head>

<body>
  <div id="wrapper">
    <h1> <th colspan="4">ICE-BOOO 의 자판기</th></h1>

<div id=my-box>
        <div class= 'time'>
          <h2>  <span id="timer" ></span></h2>
        </div></div>
    <header id="header">

      <table align="center" id="table2">


          <tr>
            <td><span class="a1"><figure>
              <input type="checkbox" id="divECI_ISDVSAVE1" class="checkbox-style" value="9" name="콜라"data-filename="images/1.jpg"/ ><label for="divECI_ISDVSAVE1"></label>
            <img src="images/1.jpg" alt="400" height="150px" />
            <figcaption>0.0009BTC</figcaption>
          </figure></span></td>

            <td><span class="a2"><figure>
              <input type="checkbox" id="divECI_ISDVSAVE2" class="checkbox-style" value="9" name="사이다"data-filename="images/2.jpg"/ ><label for="divECI_ISDVSAVE2"></label>
            <img src="images/2.jpg" alt="400" height="150px" />
            <figcaption>0.0009BTC</figcaption>
          </figure></span></td>

            <td><span class="a3"><figure>
            <input type="checkbox" id="divECI_ISDVSAVE3" class="checkbox-style"  value="13"  name="포카리 스웨트"data-filename="images/3.jpg"/><label for="divECI_ISDVSAVE3"></label>
            <img src="images/3.jpg" alt="400" height="150px" />
            <figcaption>0.0013BTC</figcaption>
          </figure></span></td>
          </tr>


          <tr>
            <td><span class="a4"><figure>
              <input type="checkbox" id="divECI_ISDVSAVE4" class="checkbox-style" value="15" name="옥수수 수염차"data-filename="images/4.jpg"/ ><label for="divECI_ISDVSAVE4"></label>
            <img src="images/4.jpg" alt="400" height="150px" />
            <figcaption>0.0015BTC</figcaption>
          </figure></span></td>

            <td><span class="a5"><figure>
            <input type="checkbox" id="divECI_ISDVSAVE5" class="checkbox-style" value="17"  name="모구모구"data-filename="images/5.jpg"/ ><label for="divECI_ISDVSAVE5"></label>
            <img src="images/5.jpg" alt="400" height="150px" />
            <figcaption>0.0017BTC</figcaption>
          </figure></span></td>

            <td><span class="a6"><figure>
            <input type="checkbox" id="divECI_ISDVSAVE6" class="checkbox-style" value="22" name="비타민 워터" data-filename="images/6.jpg"/><label for="divECI_ISDVSAVE6"></label>
            <img src="images/6.jpg" alt="400" height="150px" />
            <figcaption>0.0022BTC</figcaption>
          </figure></span></td>
          </tr>

      </table>
    </header>

  </div>

  </div>
<a href="#" class="button" id="purchase_button">구입하기</a>

  <!-- Main -->



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script>
  $(document).ready(function(){
    $('#purchase_button').click(function() {   //'구매하기'버튼 event
          var totalPrice = getSelectedPrice();
          var viewName = getSelectedName();
          var viewImg = getImagePic();
          var viewPrice = getPrice();
          location.href = "/midcheck.php?totalPrice=" + totalPrice +"&purchase_item=" + viewName+"&img_pic="+ viewImg +"&price_pic="+viewPrice;  //버튼 클릭 시 midcheck.php로 이동(물품의 이름, 금액, 이미지, 총 합산한 금액과 같이 전송)

        })
      function getSelectedPrice(){   //체크박스 선택된 물품값 합산
        var sum=0;
        for(var i = 1; i<=6; i++)
        {
          if($('#divECI_ISDVSAVE'+String(i)).is(":checked")){
          var price = parseInt($('#divECI_ISDVSAVE'+String(i)).attr('value'));
          sum+=price;
        }
        }
        return sum;
        }
        function getSelectedName(){  //체크박스 선택된 물품 이름 저장
          var name = [];
          for(var i = 1; i<=6; i++)
          {
            if($('#divECI_ISDVSAVE'+String(i)).is(":checked")){
            name.push($('#divECI_ISDVSAVE'+String(i)).attr('name'));
          }
      }
      return name;
    }

    function getImagePic() {    //체크박스 선택된 물품 이미지 저장
      var img = [];
      for (var i = 1; i <= 6; i++) {
        if ($('#divECI_ISDVSAVE' + String(i)).is(":checked")) {
            // img = ($('#divECI_ISDVSAVE'+String(i)).attr('data-filename'));
           img.push('images/'+ String(i)+".jpg");
        }
      }
      return img;

    }

    function getPrice() {    //체크박스 선택된 물품 금액 저장
      var recase = [];
      for (var i = 1; i <= 6; i++) {
        if ($('#divECI_ISDVSAVE' + String(i)).is(":checked")) {
          recase.push($('#divECI_ISDVSAVE'+String(i)).attr('value'));
        }
      }
      return recase;
    }


  setTimeout(function() {    //60초 카운트 후 main.php로 이동
  location.href="/main.php";
  }, 61000);
  $(document).ready(function () {
       startTimer();
    });
    timer=document.getElementById("timer");
  startSecond="60";
  setInterval("timer.innerHTML=startSecond+'';startSecond--;",1000)});

  </script>
</body>

</html>
