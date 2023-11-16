<?php
include("dbconnect.php");
   $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';

   
   
       $id= $_POST['tid'];
       $name = $_POST['Name'];  
       $email =  $_POST['E-mail']; 
       $formdob  =  $_POST['Date_of_Birth']; 
       $gender =  $_POST['gender']; 
       $des =$_POST['desig'];
       $dept =$_POST['dept'];
       $username =  $_POST['Username'];  
       $psw =  $_POST['Password']; 
       $dob=str_replace('/','-',$formdob);
       $newdob=date("Y-m-d",strtotime($dob));
       $query = "insert into teacher values('$id','$name','$email','$newdob','$gender','$des','$dept','$username',md5('$psw'))";
       $data = mysqli_query($conn,$query); 
   
         
   if($data)
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