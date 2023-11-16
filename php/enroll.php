<?php
include("dbconnect.php");
   $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';

   
       date_default_timezone_set('America/New_York');
       $event=$_POST['event'];
       $id= $_POST['stid'];
       $name = $_POST['Name'];  
       $email =  $_POST['E-mail']; 
       $formdob  =  $_POST['Date_of_Birth']; 
       $gender =  $_POST['gender'];  
       $str= $_POST['stream'];
       
       $dob=str_replace('/','-',$formdob);
       $newdob=date("Y-m-d",strtotime($dob));

       $query = "insert into $event values('$name','$str','$gender','$newdob','$email','$id')";
       $data = mysqli_query($conn,$query); 
   
         
   if($data)
   { 
        echo "<script>alert('Entered data successfully\n');</script>"; 
       header('location:../collegestuff/studlog.html');
      
   } 
   else
   {
           echo "Error: " . $query . "<br>" . $conn->error;

     die('Could not enter data'.mysqli_error($conn)); 
     mysqli_close($conn); 
   }


  mysqli_close($conn)
      

?>