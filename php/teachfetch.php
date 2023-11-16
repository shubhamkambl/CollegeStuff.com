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
            input[type=button]{
                 border-radius: 4px;
  background-color:green;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 15px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
                
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

  $sql = 'SELECT id,name,email,birthdate,gender,designation,department from teacher'; 

   $retval = mysqli_query($conn,$sql); 
    echo "<table width=100%>";
    echo "<tr>";
    echo "<td width=10% >Id</td>";
    echo "<td width=10%>Name</td>";
    echo "<td width=10%>E-mail</td>";
    echo "<td width=10%>Birthdate</td>";
    echo "<td width=10%>Gender</td>";
    echo "<td width=10%>Designation</td>";
    echo "<td width=10%>Department</td>";
    echo "</tr>";
     while($row = mysqli_fetch_assoc($retval)) { 
         echo "<tr>";
         echo "<td width=10%>{$row['id']}</td>";
    echo "<td width=10%>{$row['name']}</td>";
    echo "<td width=10%>{$row['email']}</td>";
    echo "<td width=10%>{$row['birthdate']}</td>";
    echo "<td width=10%>{$row['gender']}</td>";
    echo "<td width=10%>{$row['designation']}</td>";
    echo "<td width=10%>{$row['department']}</td>";
    echo "</tr>";
    
     
       }
      echo "</table>";
    echo "<center>";
    echo "<form>";
    echo "<a href='adminlog.html'>";
    echo "<input type='button' value='Ok'>";
    echo "</a>";
    echo "</form>";
    echo "</center>";
   
       if(!$retval)
       {
          die('Could not get data: ' . mysqli_error($conn)); 
           echo "Error: " . $query . "<br>" . $conn->error;
           
       }  
   echo "Fetched data successfully\n"; 
   mysqli_close($conn); 
?>
</html>

