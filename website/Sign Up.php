<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <link type="text/css" rel="stylesheet" href="style1.css" />
  </head>
  <body>
     <header>
      <h2>Sign Up</h2>
      <nav>
        <a href="./Home.php">Home</a>
        <a href="./Gallery.php">Gallery</a>
         <a href="./Guest User.php">Guest User</a>
        <a href="./Login.php">Login</a>
      </nav>
        <div class="logo">
        <img src="./images/lovely fay.jpg" class="logo"/>
      </div>
      </header>
      <main>
        <h3 align="center"class="heading">New User Details</h3>
    <form id="contact-form"action="Login.php" method="post" >
    <table align="center">
          <tr>
            <td>
              <label for="fname">First Name:</label>
            </td>
            <td>
              <input type="text" name="fname" size="25" required />
            </td>
          </tr>
          <tr>
            <td>
              <label for="lname">Last Name:</label>
            </td>
            <td>
              <input type="text" name="lname" size="25" required />
            </td>
          </tr>
          </tr>
          <tr>
            <td>
              <label>Email: </label>
            </td>
            <td>
              <input type="text" name="email" size="25" required />
            </td>
          </tr>
          <tr>
            <td>
              <label>Phone No:</label>
            </td>
            <td>
              <input type="text" name="PhoneNo" size="25" required />
            </td>
          </tr>
          <tr>
            <td>
              <label>Gender:</label>
            </td>
            <td>
              <input type="radio" name="gender" id="male" /> Male
              <input type="radio" name="gender" id="female" /> Female<br />
            </td>
          </tr>
          <tr>
            <td>
              <label>Username:</label>
            </td>
            <td>
              <input type="text" name="uname" size="25" required>
            </td>
          </tr>
          <tr>
            <td>
              <label>Password:</label>
            </td>
            <td>
              <input type="password" name="pass" size="25" required>
            </td>
          </tr>
          <tr>
            <td>
              <label> Re-Type Password:</label>
            </td>
            <td>
              <input type="rpassword" name="pass" size="25" required>
            </td>
          </tr>
          <tr>
         <td><button type="submit">Create Account</button></td>
          </tr>
        </table>
      </form>
      </main>
  </body>
</html>
