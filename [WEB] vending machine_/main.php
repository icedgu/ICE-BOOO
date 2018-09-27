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

    #u_button{
      text-align:right;
      margin-right:100px;
    }
    #userlist_button{
      background-image: url(http://p1.pichost.me/i/11/1344899.jpg);
        background-size: cover;
        background-repeat: no-repeat;
       font-family: Arial, sans-serif;
        font-size: 20px;
    }
    #wrap {
      position: absolute;
      top: 85%;
      left: 85%;
      margin-top: -86px;
      margin-left: -89px;
      text-align:right;
    }
    #userlist_button {
        -webkit-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
        -moz-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
        -ms-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
        -o-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
        transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
        display: block;
        margin: 20px auto;
        max-width: 210px;
        text-decoration: none;
        border-radius: 4px;
        padding: 20px 30px;
    }

    #userlist_button.button {
        box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset ;
    }

    #userlist_button.button:hover {
        color: rgba(255, 255, 255, 0.85);
        box-shadow: rgba(30, 22, 54, 0.7) 0 0px 0px 40px inset;
    }

    #userlist_button.button2 {
        color: rgba(30, 22, 54, 0.6);
        box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset ;
    }

    #userlist_button.button2:hover {
        color: rgba(255, 255, 255, 0.85);
        box-shadow: rgba(30, 22, 54, 0.7) 0 80px 0px 2px inset;
    }
    }/*버튼 디자인*/
  </style>

</head>


<body>
  <div id="wrapper">
    <h1> <th colspan="4">ICE-BOOO 의 자판기</th></h1>
    <div id="wrap"  >
      <a href="userlist.php" class="button" id=userlist_button>management</a>
    </div>
<br>
<div id="p_button" align="center">
  <a href="charge.php" class="button" id="charge_button">충전하기</a>
<a href="vendingmachine.php" class="button" id="purchase_button">구입하기</a>
</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>


</body>

</html>
