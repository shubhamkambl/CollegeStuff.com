<?php
include("dbconnect.php");

 $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';
session_start();
 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($conn,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($conn,$password);
 $query = "SELECT * FROM `eventmanager` WHERE email='$username' or username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($conn,$query) ;
    
 $rows = mysqli_num_rows($result);

if($rows==1)
{
     $_POST['username'] = $username;
     header("Location:../collegestuff/evenlogg.html");
}
else
{
 echo "<script>";
 echo "alert('Invalid credentials!!');";
 echo "</script>";
 header('location:../collegestuff/login.html');
 }
mysqli_close($conn);
?>