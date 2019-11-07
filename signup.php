<?php include("register.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Camagru | Sign up</title>
    <!-- <link rel="stylesheet" href="css/login.css"> -->
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
      <h2 class="active"> Sign Up </h2>
      <h2 class="inactive underlineHover"><a href="login.php"> Sign In </a></h2>

    <div class="fadeIn first">
      <!-- <img src="images/logo.png" id="icon" alt="User Icon" /> -->
    </div>
 
    <form method="post" action="">
      <input type="text" id="login" class="fadeIn second" name="Username" placeholder="Username" required>
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email" required>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
      <input type="password" id="passward" class="fadeIn third" name="password2" placeholder="Confirm Password" required>
      <input type="submit" class="fadeIn fourth" name="submit" value="Sign Up">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>