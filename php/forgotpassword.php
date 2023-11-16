<?php
include("dbconnect.php");
$host="localhost";
$user="root";
$password="usbw";
$db="collegestuff";

$email=$_POST['email'];

$query="select 'md5(password)' and email from stud where email='$email' or username='$email'";

$pass=$row['password'];
$username=$row['email'];

$data=mysqli_query($conn,$query);

if($data)
{
$email=$row["email"];
$subject="Collegestuff.com - Password Request"; 
$header="From: shubhamkamble2017.it@mmcoe.edu.in"; 
$content="Your password and username is ".$pass.$username; 
mail($email, $subject, $content, $header);  
print "An email containing the password has been sent to you"; 
}
else
{
    echo "Username or mail is invalid";
}

mysqli_close($conn);
?>