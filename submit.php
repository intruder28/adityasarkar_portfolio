<?php
$connection = mysql_connect("localhost", "adityas3_adi", "itsmyname@28"); // Establishing Connection with Server..
$db = mysql_select_db("adityas3_myForm", $connection); // Selecting Database
//Fetching Values from URL
$email2=$_POST['email1'];
$msg2=$_POST['msg1'];
//Insert query
$query = mysql_query("insert into tblUserInfo(email, msg) values ('$email2','$msg2')");
echo "Form Submitted Succesfully";
mysql_close($connection); // Connection Closed
?>
