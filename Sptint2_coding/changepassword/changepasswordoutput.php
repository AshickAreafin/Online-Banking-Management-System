<?php

// connecting to the database
$con = mysqli_connect("localhost","root","","abc_bank");


// create and execute query

$sql = "SELECT * FROM changepassword";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
{
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1>';

   echo '<caption><b>Change Password<b></caption>';   

   echo '<tr><td><b>Old Password</b></td><td><b>New Password</b></td><td><b>Confirm New Password</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td>' . $row[0] .'</td>';
   echo '<td>' . $row[1] .'</td>';
   echo '<td>' . $row[2] .'</td>';

   echo'</tr>';

     }

   echo '</table>'; 
}
else
{
  echo 'NO records found!';
}


mysqli_free_result($res);

mysqli_close($con);  // logout from db
?> 