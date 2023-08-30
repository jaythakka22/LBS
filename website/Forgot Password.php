<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body>
<header>
        <h2>Login</h2>
        <nav>
            <a href="./Home.php">Home</a>
            <br>
            <a href="./Guest User.php">Guest User</a>
            <br>
            <a href="./Sign Up.php">Sign-Up</a>
        </nav>
        <div class="logo">
            <img src="./images/lovely fay.jpg" class="logo" />
        </div>
    </header>
    <main>
        <form action="" method="post">
            <h3 align="center">Reset Password</h3>
            <table align="center">

                <tr>
                    <td>
                        <label>Email:</label>
                    </td>
                    <td>
                        <input type="text" name="uname" size="25" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>New Password:</label>
                    </td>
                    <td>
                        <input type="password" name="pass" size="25" required>
                    </td>
                </tr>
                <td>
                    <label> Confirm Password:</label>
                </td>
                <td>
                    <input type="password" name="pass" size="25" required>
                </td>
                </tr>
                <tr>
                    <td><button type="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </main>
</body>

</html>