<?php
$host = 'localhost'; 
$Username = 'root'; 
$Password = 'usbw';
$db='collegestuff';

 $conn = mysqli_connect($host,$Username,$Password,$db);

if($conn)
{
    echo "Database connectivity successful!";
}
else
{
    die("Not connected!".mysqli_connect_error());
}
?>