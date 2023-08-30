<!DOCTYPE html>
<html>
  <head>
    <title>Profile Settings</title>
    <link type="text/css" rel="stylesheet" href="style1.css" />
  </head>
  <body>
     <header>
      <h2>Change Password</h2>
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
        <h3 align="center"class="heading">Change Password</h3>
    <form id="contact-form"action="Account Page.php" method="post" >
    <table align="center">
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
              <label>Re-Type Password:</label>
            </td>
            <td>
              <input type="pass" name="rtpass" size="25" required/> 
            </td>
          </tr>
           <tr>
         <td><button type="submit">Save Changes!</button></td>
          </tr>
        </table>
      </form>
      </main>
  </body>
</html>
