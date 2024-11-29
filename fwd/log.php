<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $gmail = $_POST['mail'];
      $password = $_POST['pass'];

      if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
      {
        $query = "select * from form where email = '$gmail' limit 1 ";
        $result = mysqli_query($con, $query);

        if($result)
        {
          if($result && mysqli_num_rows($result) > 0)
          {
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['pass'] == $password)
            {
              header("location: index.php");
              die;
            }
          }
        }
        echo"<script type = 'text/javascript'> alert('wrong username or password')<script>";
      }
      else
      {
        echo"<script type = 'text/javascript'> alert('wrong username or password')<script>";
      }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="sty.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="POST">
        <div class="txt_field">
          <input type="email" name="mail"required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pass"required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <button class="button_link" type="submit">Login</button>
        <div class="signup_link">
          Not a member? <a href="sign_up.php">Signup</a>
        </div>
      </form>
    </div>
  </body>
</html>