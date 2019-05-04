<?php


$input_accountNumber=$_POST['AccountNumber'];
$input_amount = $_POST['Amount'];
$input_pin = $_POST['SecurityPin'];

$con = mysqli_connect("localhost","root","","abc_bank");

$sql = "insert into withdrawcash values('$input_accountNumber','$input_amount','$input_pin')";

$res = mysqli_query($con,$sql);

mysqli_close($con);

?>