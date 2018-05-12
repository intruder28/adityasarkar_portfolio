<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("adityas3_myForm", $connection); // Selecting Database
//Fetching Values from URL
$msg2=$_POST['msg1'];
$email2=$_POST['email1'];
//Insert query
$query = mysql_query("insert into tblUserInfo(email, msg) values ('$email2','$msg2')");
echo "Form Submitted Succesfully";
mysql_close($connection); // Connection Closed
?>
