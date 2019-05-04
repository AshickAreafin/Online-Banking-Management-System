<?php


$input_billnumber=$_POST['billNumber'];
$input_amount = $_POST['amount'];
$input_pin = $_POST['securityPin'];

$con = mysqli_connect("localhost","root","","abc_bank");

$sql = "insert into paybill values('$input_billnumber','$input_amount','$input_pin')";

$res = mysqli_query($con,$sql);

mysqli_close($con);

?>