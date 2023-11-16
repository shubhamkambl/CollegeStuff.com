<?php
include("dbconnect.php");
   $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';

   
   
       $id= $_POST['stid'];
       $name = $_POST['Name']; 
       $yos =  $_POST['year_of_study'];  
       $email =  $_POST['E-mail']; 
       $formdob  =  $_POST['Date_of_Birth']; 
       $gender =  $_POST['gender']; 
       $username =  $_POST['Username'];  
       $psw =  $_POST['Password']; 
       $str= $_POST['stream'];
       
       $dob=str_replace('/','-',$formdob);
       $newdob=date("Y-m-d",strtotime($dob));

       $query = "insert into stud values('$id','$name','$email','$newdob','$gender','$yos','$str','$username',md5('$psw'))";
       $data = mysqli_query($conn,$query); 
   
         
   if(!empty($data))
   { 
        echo "<script>alert('Entered data successfully\n');</script>"; 
       header('location:../collegestuff/index.html');
      
   } 
   else
   {
           echo "Error: " . $query . "<br>" . $conn->error;

     die('Could not enter data'.mysqli_error($conn)); 
     mysqli_close($conn); 
   }


  mysqli_close($conn)
      

?>