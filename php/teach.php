<?php
include("dbconnect.php");
   $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';

   if (isset($_POST['submit']))
   {
       $id= $_POST['stid'];
       $name = $_POST['Name']; 
       $des =  $_POST['desig'];  
       $email =  $_POST['E-mail']; 
       $dob  =  $_POST['Date_of_Birth']; 
       $gender =  $_POST['gender']; 
       $username =  $_POST['Username'];  
       $psw =  $_POST['Password']; 
       $sept= $_POST['dept'];
       $query = "insert into teacher values('$id','$name','$email','$dob','$gender','$des','$dept','$username',md5('$password'))";
       $data = mysqli_query($conn,$query); 
   }
         
   if(!empty($data))
   { 
        header('location:../collegestuff/index.html');
        echo "Entered data successfully\n"; 
      
   } 
   else
   {
     die('Could not enter data'.mysqli_error($conn)); 
     mysqli_close($conn); 
   }


  mysqli_close($conn)
      

?>