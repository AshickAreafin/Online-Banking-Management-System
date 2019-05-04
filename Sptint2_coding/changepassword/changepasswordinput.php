<?php


$input_oldpassword=$_POST['oldPassword'];
$input_newpassword = $_POST['newPassword'];
$input_confirmnewpassword = $_POST['confirmnewPassword'];

$con = mysqli_connect("localhost","root","","abc_bank");

$sql = "insert into changepassword values('$input_oldpassword','$input_newpassword','$input_confirmnewpassword')";

$res = mysqli_query($con,$sql);

mysqli_close($con);

?>