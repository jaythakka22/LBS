<!DOCTYPE html>
<html>
  <head>
    <title>Profile Settings</title>
    <link type="text/css" rel="stylesheet" href="style1.css" />
  </head>
  <body>
     <header>
      <h2>Profile Settings</h2>
      <nav>
        <a href="./Home.php">Home</a>
        <br>
        <a href="./Guest User.php">Guest User</a>
        <br>
        <a href="./Login.php">Login</a>
      </nav>
        <div class="logo">
        <img src="./images/lovely fay.jpg" class="logo"/>
      </div>
      </header>
      <main>
        <h3 align="center"class="heading">Change User Details</h3>
    <form id="contact-form"action="Login.html" method="post" >
    <table align="center">
          <tr>
            <td>
              <label for="cuname">Current Username:</label>
            </td>
            <td>
              <input type="text" name="cuname" size="25" required />
            </td>
          </tr>
          <tr>
            <td>
              <label for="nuname">New Username:</label>
            </td>
            <td>
              <input type="text" name="nuname" size="25" required />
            </td>
          </tr>
          </tr>
          <tr>
            <td>
              <label>Current Password:</label>
            </td>
            <td>
              <input type="pass name="cpass" size="25" required />
            </td>
          </tr>
          <tr>
            <td>
              <label>New Password:</label>
            </td>
            <td>
              <input type="pass" name="npass" size="25" required />
            </td>
          </tr>
          <tr>
            <td>
              <label>Gender:</label>
            </td>
            <td>
              <input type="radio" name="gender" id="male" /> Male
              <input type="radio" name="gender" /> Female<br />
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
         <td><button type="submit">Save Changes</button></td>
          </tr>
        </table>
      </form>
      </main>
  </body>
</html>
