<!doctype html>
<html>
<head>
  <style>
    .button {
      display: inline-block;
      margin-top: 0.5em;
      padding: 0.50em 1.0em 0.50em 1.2em;
      background: #d39e00;
      letter-spacing: 0.10em;
      line-height: 1em;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 1em;
      color: #333;
    }

    .button:before {
      display: inline-block;
      background: #8DCB89;
      margin-right: 1em;
      width: 10px;
      height: 10px;
      line-height: 10px;
      border-radius: 10px;
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


    h1 {
      padding-top: 50px;
      /* font-size: 100px; */
      margin: 0;
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
      width:10px;
      height:10px;
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
    div{
    text-align:left;
    /* width:200px; */
    margin-left:200px;
    }
    #p_button{
      text-align:right;
      margin-right:100px;
    }


  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css' />
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css' />
    <title>ICE-BOOO의 자판기</title>
</head>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<meta charset="utf-8">
<title>구매 상황</title>
<style>
body{
  background-color: #F3CD52;
}
</style>
<h1 align="center" >Purchase Status </h1>
  <div id="p_button" align="right" >
  <h2><a href="#"  class="button" id="purchase_button">구매하기</a><h2>
</div>
<br><h3 align="center"> 구매 목록</h3> </br>
<table width="100%" align="center" cellpadding="20">
  <td>
  <td>
<div  >
<?php
$img_array = explode(",",$_GET['img_pic']);
$purchase_array = explode(",",$_GET['purchase_item']);
$price_array = explode(",",$_GET['price_pic']);
$price2=0;

function getImg($name, $count){      //외부 물품 리스트 가져오기와 price2에 가격합산
  global $price2;
    if($name == 'pringles_orig'){
      echo "<img src = 'images/pringles_orig.jpg' alt=400 width='150px' height='150px'><br />\n";
      echo " "."프링글스(오리지널) 0.0014";
      $price2 = $price2 + 0.0014*$count;
    }
    else if($name == 'pringles_onion'){
      echo "<img src = 'images/pringles_onion.jpg' alt=400 width='150px' height='150px'><br />\n";
      echo " "."프링글스(양파) 0.0016";
      $price2 = $price2 + 0.0016*$count;
    }
    else if($name == 'haribo'){
      echo "<img src = 'images/haribo.jpg' alt=400 width='150px' height='150px'><br />\n";
      echo " "."하리보 0.0009";
      $price2 = $price2 + 0.0009*$count;
    }
    else if($name == 'honeybutter'){
      echo "<img src = 'images/honeybutter.jpg' alt=400 width='150px' height='150px'><br />\n";
      echo " "."허니버터칩 0.0020";
      $price2 = $price2 + 0.0020*$count;
    }
    else if($name == 'diget'){
      echo "<img src = 'images/diget.jpg' alt=400 width='150px' height='150px'><br />\n";
      echo " "."다이제 0.0014";
      $price2 = $price2 + 0.0014*$count;
    }
    else if($name == 'kinder'){
      echo "<img src = 'images/kinder.jpg' alt=400 width='150px' height='150px'><br />\n";
      echo " "."킨더 초콜릿 0.0028";
      $price2 = $price2 + 0.0028*$count;
    }
  }                                        //6/10추가

for($i=0; $i<count($img_array);$i++){?>
<br>
 <form name='form'>
  <table>
    <tr><td><?php echo $purchase_array[$i];?></td>
   <td id="tdPrice<?= $i?>" value="<?=$price_array[$i]*0.0001?>"> <?php echo (float)$price_array[$i]*0.0001;?></td>
   </tr>
    <td>갯수</td>
    <td>
     <table>
      <tr>
       <td><input id="counter<?= $i?>" type='text' name='count' value='1' size='3' readonly><td>
       <td>
        <a href='#' onclick='javascript_:change(1,<?= $i?>);'>▲</a><br>
        <!-- 카운터를 이용한 물품 값 증가, 감소   -->
        <a href='#' onclick='javascript_:change(-1,<?= $i?>);'>▼</a>
       </td></tr>
     </table></td>
     <img src="<?= $img_array[$i]; ?>" alt=400 height="150px">
   </td>
 </td>
  </table>
 </form>
<?php }?>
</td>              <!-- 6/9추가-->
<td>
  <?php
  $host = 'localhost';
  $user = 'root';
  $pw = '1234';
  $dbName = 'user';

  $mysqli = new mysqli($host, $user, $pw, $dbName); //DB 접속

  $sql = 'select * from products';  //products table의 모든 값 받아옴
  $result = $mysqli->query($sql);


  while ($row = mysqli_fetch_array($result))
{
  getImg($row["pID"], $row["count"]);    //외부 물품의 pID를 통해 이미지출력
  echo " ".$row["count"]."개 <br />\n<br />\n";  //외부 물품의 count출력
}

?>
</td>
</table>           <!-- 6/9추가-->
<br> <span id="puchase_line" >
</div>
</span></br>
<br><h3 align="center"> 총 결제 금액 </h3></br>
    <center><h2 id="totalPrice"><?=$_GET['totalPrice']+$price2?></h2></center>
</body>

</html>

<script language='javascript'>
  finalPrice = getTotalPrice();
  function change(num, idx)     //물품 갯수 증가,감소 누를 시 총 금액 변경 function
  {
    //$('#counter'+idx).val();
  var x  = $('#counter'+idx);
  var y = Number(x.val()) + num;
  if(y < 0) y = 0;
  x.val(y);
  getTotalPrice();
  }
function getTotalPrice()      //총 금액 변경 function
{
  var totalPrice = <?=$price2?>;
  for(var i =0; i<6; i++){
    var counter = Number($('#counter'+i).val());//1
    var price = Number($('#tdPrice'+i).text());//700
    if(isNaN(price) || isNaN(counter)){
      break;
    }
    totalPrice += counter*price;
    totalPrice = Math.floor(totalPrice*10000)/10000;
    finalPrice = totalPrice;
    //totalPrice = totalPrice + counter*price
  }
  $('#totalPrice').text(totalPrice);
  return totalPrice;
}
$(document).ready(function(){
  $('#purchase_button').click(function() {
        var totalPrice=0;
        totalPrice = finalPrice;
        location.href = "/final.php?totalPrice=" + totalPrice+ "&finalimg="+ "<?= $_GET['purchase_item'];?>";  //final.php로 총 금액, 물품리스트 GET방식으로 전송 
      })
      function getTotalPrice()
      {
        var totalPrice = <?=$price2?>;
        for(var i =0; i<6; i++){
          var counter = Number($('#counter'+i).val());//1
          var price = Number($('#tdPrice'+i).text());//700
          if(isNaN(price) || isNaN(counter)){
            break;
          }
          totalPrice += counter*price;
          totalPrice = Math.floor(totalPrice*10000)/10000;
          //totalPrice = totalPrice + counter*price
        }
        return finalPrice;
      }

  })


</script>
