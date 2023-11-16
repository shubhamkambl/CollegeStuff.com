<?php
include("dbconnect.php");
   $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';

$event=$_POST['evename'];



$sql="create table $event(id varchar(10),name varchar(50),college varchar(25),stream varchar(25),gender varchar(8),primary key(id))";



$data=mysqli_query($conn,$sql);

if($data)
{
    echo "Event table created suucessfully";
    header('location:../collegestuff/addeventinformation.html');
}

else
{
     echo "Error: " . $sql . "<br>" . $conn->error;
  
}

mysqli_close($conn);
?>
