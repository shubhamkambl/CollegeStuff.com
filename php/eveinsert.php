<?php
include("dbconnect.php");
   $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';

   
   
       $id= $_POST['stid'];
       $name = $_POST['Name'];   
       $email =  $_POST['E-mail']; 
       $add  =  $_POST['add']; 
       $username =  $_POST['Username'];  
       $psw =  $_POST['Password']; 
       $con= $_POST['con'];
       $stat= $_POST['type'];
       $query = "insert into eventmanager values('$id','$name','$add','$con','$stat','$username',md5('$psw'),'$email')";
       $data = mysqli_query($conn,$query); 
   
         
   if(!empty($data))
   { 
        header('location:../collegestuff/index.html');
        echo "Entered data successfully\n"; 
      
   } 
   else
   {
           echo "Error: " . $query . "<br>" . $conn->error;

     die('Could not enter data'.mysqli_error($conn)); 
     mysqli_close($conn); 
   }


  mysqli_close($conn)
      

?>