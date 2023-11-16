<?php
include("dbconnect.php");
   $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';

   
       $oldusername=$_POST['oldusername'];
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
       $query = "update  teacher set id='$id',name='$name',email='$email',birthdate='$newdob',gender='$gender',designation='$des',department='$dept',username='$username',password=md5('$psw') where username='$oldusername'";
       $data = mysqli_query($conn,$query); 
   
         
   if($data)
   { 
        header('location:../collegestuff/teacherlogg.html');
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