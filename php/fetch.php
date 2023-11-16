<?php 
   $dbhost = 'localhost'; 
   $dbuser = 'root'; 
   $dbpass = 'usbw'; 
   $conn = mysql_connect($dbhost, $dbuser, $dbpass); 
    
   if(! $conn ) { 
      die('Could not connect: ' . mysql_error()); 
   } 
    
   
 
   mysql_select_db('collegestuff'); 

$sql = 'SELECT * from stud'; 

   $retval = mysql_query( $sql, $conn ); 
    
   if(! $retval ) { 
      die('Could not get data: ' . mysql_error()); 
   } 
      while($row = mysql_fetch_assoc($retval)) { 
      echo "StudentID :{$row['id']}  <br> ". 
         "Name: {$row['name']} <br> ". 
         ": {$row['tutorial_author']} <br> ". 
         "Submission Date : {$row['submission_date']} <br> ". 
         "--------------------------------<br>"; 
   }  
   echo "Fetched data successfully\n"; 
   mysql_close($conn);
?>