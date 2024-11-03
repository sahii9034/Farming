<?php
$con = mysqli_connect("localhost","root","","mydb");
if (!$con)
  {
  die('Could not connect: ');
  }

$sql="INSERT INTO  FARMER(name,phone,aadhar,area,address,city,password,role) 
   VALUES  ('$_POST[name]','$_POST[phone]','$_POST[aadhar]','$_POST[area]','$_POST[address]','$_POST[city]','$_POST[password]','$_POST[role]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ');
  }
else
echo "Registered succesfully, Click<a href='login.html'>Login</a>";

mysqli_close($con);
?>
