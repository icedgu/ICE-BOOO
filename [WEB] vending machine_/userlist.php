<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css' />
<style>
body {
  font-family: sans-serif;
  font-size: 35px;
  text-align: center;
  background-color: #F3CD52;
}
h1 {
  margin-top:50px;
}
button{
  background-image: url(http://p1.pichost.me/i/11/1344899.jpg);
    background-size: cover;
    background-repeat: no-repeat;
   font-family: Arial, sans-serif;
    font-weight: bold;
    font-size: 14px;
}

.wrap {
    position: absolute;
    top: 44%;
    left: 84%;
    margin-top: -86px;
    margin-left: -89px;
    text-align: center;
}

a {
    -webkit-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
    -moz-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
    -ms-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
    -o-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
    transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
    display: block;
    margin: 20px auto;
    max-width: 180px;
    text-decoration: none;
    border-radius: 4px;
    padding: 20px 30px;
}

a.button {
    color: rgba(30, 22, 54, 0.6);
    box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset ;
}

a.button:hover {
    color: rgba(255, 255, 255, 0.85);
    box-shadow: rgba(30, 22, 54, 0.7) 0 0px 0px 40px inset;
}

a.button2 {
    color: rgba(30, 22, 54, 0.6);
    box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset ;
}

a.button2:hover {
    color: rgba(255, 255, 255, 0.85);
    box-shadow: rgba(30, 22, 54, 0.7) 0 80px 0px 2px inset;
}
}
</style>
<body>
  <h1 >Output User List <h1>
    <br>
      <h1>PW :
    <input type="password" name=id />
    <div class="wrap">
         <a href="#" id="bt1"class="button">확인</a>
     </div>

</body>
<script type="text/javascript" >
/*$(document).ready(function(){
    var bla = $("form[id]").val();
    $('#').click(function() {
    alert(bal);
  });

});*/
$(function(){
  $("#bt1").click(function(){
    var pw=1234;                //비밀번호 1234
    if(pw==$("input").val())
    {
location.href="/showlist.php";   //비밀번호가 맞다면 showlist.php(관리자 페이지)로 이동
    }
    else {
      alert('비밀번호가 일치하지 않습니다');  //비밀번호 오류
    }

// alert($("input").val());


});
});




  /*$(document).ready(function(){
    $('#').click(function() {
           var pw =1234;
          if(numkeyCheck(e)==pw)
          {
          location.href = "/userlist.php?";
         }
      }) ;
    });*/


</script>