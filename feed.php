<?php
$con = mysqli_connect("localhost","root","","mydb");
if (!$con)
  {
  die('Could not connect: ');
  }

$sql="INSERT INTO  feed(name,rating,message) 
   VALUES  ('$_POST[name]','$_POST[rating]','$_POST[message]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ');
  }
else
echo "<script>alert('Thank you for your feedback');</script>";
mysqli_close($con);
?>