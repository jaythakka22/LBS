<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "lf details";

// Create connection
$conn = new mysqli($host, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `account login`(`uname`, `pass`) VALUES ('dbsdsjd','sdbsjdbs')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html>
<body
<form action="Account Page.php">
</form>
</body>
</html>
