<?php 
     $host = "localhost";
     $user = "root";
     $password = "";
     $database = "lf details";
   
//$connect = newsqli($host, $user, $password, $database)
 
//if(connect->error)
//die("Failed to connect with database");

//echo "Database connected!"; 
//connect ->close();

$connect = mysqli_connect($host,$user,$password, $database);
if(!$connect)
die("Failed to connect with database!");

echo "Database connected!";
mysqli_close($connect);

?>