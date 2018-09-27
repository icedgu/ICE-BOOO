<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css' />
</head>
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
table.type04 {
    border-collapse: separate;
    border-spacing: 1px;
    text-align: left;
    line-height: 1.5;
    border-top: 1px solid #ccc;
  margin : 20px 10px;
}
table.type04 th {
    width: 150px;
    padding: 10px;
    font-weight: bold;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
}
table.type04 td {
    width: 350px;
    padding: 10px;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
}
</style>
<body>
  <h1 >Output User List <h1>
    <pre> <h2>HDmasterKey1                      balance<h2> </pre>


<?php
  $host = 'localhost';
  $user = 'root';
  $pw = '1234';
  $dbName = 'user';

  $mysqli = new mysqli($host, $user, $pw, $dbName);   //DB 접속

  $sql = 'select * from UserListTable';   //UserListTable table의 값 받아오기
  $result = $mysqli->query($sql);


  while ($row = mysqli_fetch_array($result))
{
  echo " ".$row["HDmasterKey"]."     ".$row["balance"]."<br />\n<br />\n";  //HDmasterKey, balance의 값 출력(즉, 충전된 고객의 HDmasterKey와 그 잔액 출력)
}
?>

</body>
