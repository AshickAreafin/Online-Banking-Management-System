<?php


$input_mobileNumber=$_POST['MobileNumber'];
$input_amount = $_POST['Amount'];
$input_pin = $_POST['Securitypin'];

$con = mysqli_connect("localhost","root","","abc_bank");

$sql = "insert into mobilerecharge values('$input_mobileNumber','$input_amount','$input_pin')";

$res = mysqli_query($con,$sql);

mysqli_close($con);

?>