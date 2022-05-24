<?php

$name = $_POST['name'];
$mailid = $_POST['mailid'];
$phoneno = $_POST['phoneno'];
$adress =$_POST['adress'];
$productcode=$_POST['productcode'];
$db=new mysqli('localhost','root','','mydb');
echo "connected successfully";

?>
