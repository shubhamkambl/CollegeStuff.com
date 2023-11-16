<?php
   include("dbconnect.php");
   $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';

  $username=$_POST['username'];
  
  $sql="delete from stud where username='$username'";
 
  $data=mysqli_query($conn,$sql);
      
  if($data)
  {
      echo "<script>";
      echo "alert('You have removed record successfully')";
      echo "</script>";
      header('location:../collegestuff/fetch1.php');
  }
  
  else
  {
      echo "Error: " . $query . "<br>" . $conn->error;
  }
  
 mysqli_close($conn);
?>