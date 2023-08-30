<?php
require_once('Connect.php');
session_start();
// ถ้ากด submit
if (isset($_POST['signInSubmit']))
{
    $l_user = trim($_POST['uname']);
    $l_pass = md5(trim($_POST['pass']));

    if ($l_user != "" && $l_pass != "")
    {
        // NOT use
        // $q = "SELECT * FROM user " .
        // " WHERE USER_NAME='".$l_user."' AND USER_PASSWD = '".$l_pass."' ";

        $q=SELECT * FROM account login WHERE uname = "Username" AND pass = "Password";
        require_once('Connect.php');
        if ($res = $mysqli->query($q))
        {
            if (mysqli_num_rows($res) == 1)
            {
                $row = $res->fetch_array();
                //var_dump($row);
                $_SESSION['userId'] = $row['userStaff'];
                $_SESSION['userFirstName'] = $row['firstName'];
                // if staff go
                header("Location: management.php");
                // if member go
                // ....
            }
            if (mysqli_num_rows($res) == 0)
            {
              header("Refresh: 2; url=staffsignin.php");
              echo '<h1 style="text-align: center; font-family: monospace;">INVALID USERNAME OR PASSWORD!!<h1>';
            }
        }
    }
    else{
      header("Refresh: 2; url=staffsignin.php");
      echo '<h1 style="text-align: center; font-family: monospace;">USERNAME OR PASSWORD CANNOT BE BLANK!!<h1>';
    }
}
?>
