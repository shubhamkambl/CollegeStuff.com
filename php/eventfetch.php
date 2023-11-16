<!DOCTYPE html>
<html>
    <head>
        <style>
            body{background-image: url(css/board2.jpg);
                 background-repeat: no-repeat;
                -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
                
            }
        table tr td{
        border:1px solid black;
            color: white;
        }
        </style>
    </head>
<?php
include("dbconnect.php");
   $host = 'localhost'; 
   $Username = 'root'; 
   $Password = 'usbw';
   $db='collegestuff';

  $sql = 'SELECT * from eventmanager'; 

   $retval = mysqli_query($conn,$sql); 
    echo "<table width=100%>";
    echo "<tr>";
    echo "<td width=10% >Organization Id</td>";
    echo "<td width=10%>Organization Name</td>";
    echo "<td width=10%>contact_no</td>";
    echo "<td width=10%>Address</td>";
    echo "<td width=10%>E-mail</td>";
    echo "<td width=10%>Status</td>";
    echo "<td width=10%>Username</td>";
    echo "<td width=10%>Password</td>";
    echo "</tr>";
     while($row = mysqli_fetch_assoc($retval)) { 
         echo "<tr>";
         echo "<td width=10%>{$row['org_id']}</td>";
    echo "<td width=10%>{$row['organization_name']}</td>";
    echo "<td width=10%>{$row['contact_no']}</td>";
    echo "<td width=10%>{$row['address']}</td>";
    echo "<td width=10%>{$row['email']}</td>";
    echo "<td width=10%>{$row['status']}</td>";
    echo "<td width=10%>{$row['username']}</td>";
    echo "<td width=10%>{$row['password']}</td>";
    echo "</tr>";
     
       }
      echo "</table>";
    
    echo "<center>";
    echo "<a href='Delete.html'><input style='background-color:red;' type='button' value='Delete'></a>";
    echo "<a href='adminlog.html'><input style='background-color:red;' type='button' value='Ok'></a>";
    echo "</center>";
   
       if(!$retval)
       {
          die('Could not get data: ' . mysqli_error()); 
           echo "Error: " . $query . "<br>" . $conn->error;
           
       }  
   echo "Fetched data successfully\n"; 
   mysqli_close($conn); 
?>
</html>

