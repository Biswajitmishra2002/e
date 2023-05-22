<?php
$connect= mysqli_connect("localhost","root","","e_voteing") or die("connection failed");

if($connect){
    echo "connected";
}

else{
    echo "not connected";
}
?>