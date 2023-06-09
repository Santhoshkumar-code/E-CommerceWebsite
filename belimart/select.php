
<?php
  
include "db.php";
$un=$_POST['name'];
$pwd=$_POST['password'];
$sql="select * from register where name='$un' and password='$pwd'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0){
    header("location:home.php?mes=<p style=' text-align:center;'>Successfully sign in </p>");

}
else{
  header("location:login.php?mes=<p style=' text-align:center;'>Invalid username or password</p>");
    

}


?>