<?php
include("connect.php");

$name= $_POST['name'];
$mobile= $_POST['mobile'];
$mail= $_POST['mail'];
$password= $_POST['password'];
$cpassword= $_POST['cpassword'];
$address= $_POST['address'];
$image= $_FILES['photo'] ['name'] ;
$tmp_name=$_FILES ['photo'] ['tmp_name'];
$role= $_POST['role'];



if($cpassword==$password){

    move_uploaded_file($tmp_name,"../uploads/$image");
    $insert = mysqli_query($connect, "insert into user (name, mobile, mail, password, address, photo, role, status, votes) values('$name', '$mobile','$mail', '$password', '$address', '$image', '$role',0,0) ");
    if($insert){
        echo 
        '<script>
                alert("Registration successfull!");
                window.location = "../Routes/index.html";
        </script>';
    }
     else{
       echo '<script>
       alert("Some error occers!");
       window.location = "../Routes/registration.html";
       </script>
        ';
        }
} 
 else{
 echo '<script>
 alert("Passwords do not match!");
 window.location = "../Routes/registration.html";
 </script>';}

?>