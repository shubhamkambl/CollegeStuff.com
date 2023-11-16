<?php
include("dbconnect.php");
$host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';

$eventname=$_POST['Name'];

$sql="create table $eventname(srno int(10)not null auto_increment,Enrolled_student varchar(50),stream varchar(25),gender varchar(10),Date date,primary key(srno));";

$data=mysqli_query($conn,$sql);

if($data)
{
    echo "<script> alert('Event table created successfully');</script>";
    header('location:../evelog.html');
}

else
{
    echo "Error".$sql."<br>".$conn->error;
}

mysqli_close($conn);

?>
