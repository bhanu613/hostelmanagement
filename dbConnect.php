<?php
$conn= mysqli_connect('localhost','root','','hms') ;
if(!$conn)
{
die("Connection failed:" .mysqli_connect_error());
}
else{
echo "connection sucess";
}
return $conn;

 ?>
