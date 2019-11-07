<?php 
include("config/database.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if (isset($_POST['submit'])){
	if ($_POST['password'] == $_POST['password2']){
		$user = $_POST['Username'];
		$email = $_POST['email'];
		$passwd1 = md5($_POST['password']);
		
		$check_user = "SELECT * FROM `camagru`.`users` WHERE (username = ? AND email = ?);";
		$queryt = $pdo->prepare($check_user);
		$queryt->bindParam(1, $user);
		$queryt->bindParam(2, $email);
		$queryt->execute();
		$queryt->SetFetchMode(PDO::FETCH_ASSOC);
       	$row = $queryt->fetch();


		if ($row > 0){
			echo "Username or email already exists, please try again";
		}

		else {
			$mysql = "INSERT INTO camagru . users (username, email, password) VALUES(?, ?, ?);";	
			$queryt = $pdo->prepare($mysql);

			$queryt->bindParam(1, $user);
			$queryt->bindParam(2, $email);
			$queryt->bindParam(3, $passwd1);
			$queryt->execute();
			$lastInsertedID = $pdo->lastInsertId();

			if ($lastInsertedID){
				echo "You have signed up Successfully!";
			}
			else{
				echo "OOOPS, Something went wrong, please try again!";
			}
		}
		// header("location: index.php");
	}
	else{
		echo "The two password don't match";
	}
}
?>