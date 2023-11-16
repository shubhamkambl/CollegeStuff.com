<?php

$username=$_POST['username'];
$pass=$_POST['password'];

if(strcmp($username,'admin')==0 and strcmp($pass,'devshreshubh@admin')==0)
{
    header('location:../collegestuff/adminlog.html');
}

else{
    echo "Invalid Credntials";
}

?>
