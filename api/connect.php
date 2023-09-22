<?php

$connect = mysqli_connect("localhost:3306","root","","voting") or die("connection failed in connect file");

if($connect)
{
    echo "connected!";
}
else{
    echo "not connected!";
}


?>