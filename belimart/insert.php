<?php
include "db.php";
$un=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$pwd=$_POST['password'];
$sql="insert into register(name,email,phoneno,password) values('$un','$email','$phoneno','$pwd') ";
$result=mysqli_query($con,$sql);
if($result){
    header("location:login.php?mess=<p style=' text-align:center;'>Successfully sign in </p>");
}
else
{
    echo "error";
}
?>