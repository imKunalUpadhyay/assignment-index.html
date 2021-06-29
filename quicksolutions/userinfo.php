<?php
$con= mysqli_connect('localhost','root');
if($con)
{
	echo "connection established";

}
else
{echo "not connected";}
 
 mysqli_select_db($con,'userdatabase')
 $username = $_post['username'];
 $email = $_post['email'];
 $mobile=$_post['mobile'];
 $query=$_post['quey'];
 $query="insert into userinfo(username,email,mobile,query)
 values('$username','$email','$mobile','$query')";
 mysqli_query($con,$query)
?>