<?php


$input_username=$_POST['Username'];
$input_accountnumber = $_POST['Accountnumber'];
$input_pin = $_POST['Pinnumber'];

$con = mysqli_connect("localhost","root","","abc_bank");

$sql = "insert into chequebookrequest values('$input_username','$input_accountnumber','$input_pin')";

$res = mysqli_query($con,$sql);

mysqli_close($con);

?>