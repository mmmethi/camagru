<?php
session_start();
include("config/database.php");

try  
 {    
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                // $message = '<label>All fields are required</label>'; 
                echo "All fields are required"; 
           }  
           else  
           {  
                $query = "SELECT * FROM `camagru` . `users` WHERE username = :username AND password = :password";  
                $queryt = $pdo->prepare($query);  
                // $queryt->execute(  
                //      array(  
                //           'username'     =>     $_POST["username"],  
                //           'password'     =>     $_POST["password"]  
                //      )  
                // );  
                $queryt->bindParam(":username", $_POST['username']);
                $queryt->bindParam(":password", $_POST['password']);
                $queryt->execute();
                $queryt->SetFetchMode(PDO::FETCH_ASSOC);
       	      $row = $queryt->fetch();
                // $row = $queryt->rowCount();  
                if($row == 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location: index.php");  
                }  
                else  
                {  
                    //  $message = '<label>Wrong Data</label>';
                    echo "Wrong data";  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      // $message = $error->getMessage(); 
      echo "Error: " . $error->getMessage(); 
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Camagru | Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover"><a href="signup.php"> Sign Up </a></h2>

    <div class="fadeIn first">
      <!-- <img src="images/logo.png" id="icon" alt="User Icon" /> -->
    </div>

    <form method="post" action="">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="login" value="Log In">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>