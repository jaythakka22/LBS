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

$sql = "INSERT INTO `account login`(`uname`, `pass`) VALUES ('','')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body>
    <header>
        <h2>Login</h2>
        <nav>
            <a href="./Home.php">Home</a>
            <a href="./Gallery.php">Gallery</a>
            <a href="./Guest User.php">Guest User</a>
            <a href="./Sign Up.php">Sign-Up</a>
        </nav>
        <div class="logo">
            <img src="./images/lovely fay.jpg" class="logo" />
        </div>
    </header>
    <main>
        <form action="Account Page.php" method="post" onclick="getInfo()">
            <h3 align="center">Existing User</h3>
            <table align="center">
                <tr>
                    <td>
                        <label>Username:</label>
                    </td>
                    <td>
                        <input type="text" name="uname" size="25" id="username" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password:</label>
                    </td>
                    <td>
                        <input type="password" name="pass" id="password" size="25" required>
                    </td>
                </tr>
                <tr>
                    <td><input class="form-check-input" type="checkbox" id="checkbox-signin" checked=""></td>
                    <td> <label class="form-check-label" for="checkbox-signin">
                            <p>Remember me</p>
                        </label></td>
                </tr>
                <tr>
                    <td><button type="submit">Sign In</button></td>
                </tr>
            </table>
            <br>
            <table align="center">
                <tr>
                    <td> <u><b><a href="./Forgot Password.php">Forgot Password?</a></b></u> </td>
                </tr>
            </table>
        </form>
    </main>
</body>

</html>