<?php
include("dbconnect.php");
   $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';
     
       $oldusername=$_POST['oldusername'];

       $newid= $_POST['stid'];
       $newname = $_POST['Name']; 
       $newyos =  $_POST['year_of_study'];  
       $newemail =  $_POST['E-mail']; 
       $newformdob  =  $_POST['Date_of_Birth']; 
       $newgender =  $_POST['gender']; 
       $newusername =  $_POST['Username'];  
       $newpsw =  $_POST['Password']; 
       $newstr= $_POST['stream'];
       
       $newdob=str_replace('/','-',$formdob);
       $updnewdob=date("Y-m-d",strtotime($dob));


$query="update stud set id='$newid',name='$newname',email='$newemail',birthdate='$updnewdob',gender='$newgender',year_of_study='$newyos',stream='$newstr',username='$newusername',password=md5('$newpsw') where username='$oldusername'";

$data=mysqli_query($conn,$query);


if($data)
{
   echo "Data Updated Successfully";   
    header('location:../collegestuff/studlog.html'); 
}
else
{
    echo"<script>";
    echo"alert ('Could Not update data');";
    echo"</script>";
    header('location:../collegestuff/studlog.html');
        
}

mysqli_close($conn);
?>

