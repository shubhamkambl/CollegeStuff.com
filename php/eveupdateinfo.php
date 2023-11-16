<?php
include("dbconnect.php");
   $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';
     
       $oldusername=$_POST['oldusername'];

       $newid= $_POST['stid'];
       $newname = $_POST['Name'];   
       $newemail =  $_POST['E-mail']; 
       $newadd  =  $_POST['Address']; 
       $newusername =  $_POST['Username'];  
       $newpsw =  $_POST['Password']; 
       $newcon= $_POST['con'];
       $newstat= $_POST['type'];

$query="update eventmanager set org_id='$newid',organization_name='$newname',email='$newemail',address='$add',contact_no='$con',status='$stat',stream='$newstr',username='$newusername',password=md5('$newpsw') where username='$oldusername'";

$data=mysqli_query($conn,$query);


if($data)
{
   echo "Data Updated Successfully";   
    header('location:../collegestuff/evenman.html'); 
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

