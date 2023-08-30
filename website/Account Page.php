<!DOCTYPE html>
<html>

<head>
    <title>Account</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
</head>
<body>
   <header>
      <h2>Account Page </h2>
      <nav>
        <a href="./Profile Settings.php">Account Information</a>
        <br>
        <a href="./Change Password.php">Change Password</a>
      </nav>
        <div class="logo">
        <img src="./images/lovely fay.jpg" class="logo"/>
      </div>
      </header> 
 <main>
        <h3 align="center"class="heading">Book Laundry Appointment</h3>
    <form id="contact-form"action="Login.php" method="post" >
    <table align="center">
          <tr>
            <td>
              <label>Date & Time:</label>
            </td>
            <td>
              <input type="datetime-local" size="25" required />
            </td>
          </tr>
          <tr>
            <td>
              <label for="Crate Number">Crate Number of Clothes </label>
            </td>
            <td>
              <select name="Number of Crates" id="dog-names">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="More">More</option>
             </select>
            </td>
          </tr>
          <tr>
         <td><button type="submit">Book!</button></td>
          </tr>
        </table>
      </form>
      </main>
</body>

</html>