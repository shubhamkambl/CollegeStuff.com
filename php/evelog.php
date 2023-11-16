<?php
include("dbconnect.php");

 $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';
session_start();
 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($conn,$username);
 $password = stripslashes($_REQUEST['pass']);
 $password = mysqli_real_escape_string($conn,$password);
 $query = "SELECT * FROM `eventmanager` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($conn,$query) ;
    
 $rows = mysqli_num_rows($result);

if($rows==1)
{
     $_POST['username'] = $username;
     header("Location:../backup/evelog.html");
}
else
{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.html'>Login</a></div>";
 }
mysqli_close($conn);
?>