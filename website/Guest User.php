<!DOCTYPE html>
<html>
  <head>
    <title>Guest User</title>
    <link type="text/css" rel="stylesheet" href="style1.css" />
  </head>
  <body>
     <header>
      <h2>Guest User</h2>
      <nav>
        <a href="./Home.php">Home</a>
        <br>
        <a href="./Login.php">Login</a>
        <br>
        <a href="./Sign Up.php">Sign-Up</a>
      </nav>
        <div class="logo">
        <img src="./images/lovely fay.jpg" class="logo"/>
      </div>
      </header>
      <main>
        <h3 align="center"class="heading">Guest User Details</h3>
    <form id="contact-form"action="" method="post" >
    <table align="center">
          <tr>
            <td>
              <label for="email">E-mail:</label>
            </td>
            <td>
              <input type="text" name="e-mail" size="25" required />
            </td>
          </tr>
          <tr>
            <td>
              <label for="fname">First Name:</label>
            </td>
            <td>
              <input type="text" name="fname" size="25" required />
            </td>
          </tr>
          </tr>
          <tr>
            <td>
              <label> Last Name: </label>
            </td>
            <td>
              <input type="text" name="lname" size="25" required />
            </td>
          </tr>
          <tr>
            <td>
              <label>Phone No:</label>
            </td>
            <td>
              <div class="iti-flag ke"></div>
              <input type="int" name="PhoneNo" size="25" required />
            </td>
          </tr>
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
         <td><button type="submit">Complete Order</button></td>
          </tr>
        </table>
      </form>
      </main>
  </body>
</html>