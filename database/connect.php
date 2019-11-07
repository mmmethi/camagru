<?php
$DB_DSN = "mysql:dbname=camagru;host=localhost;";
$DB_USER = "root";
$DB_PASSWORD = "malaZAR123";

require_once("../database/create.php");
try{
    $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $err){
    echo "Connection failed: " . $err->getMessage();
}
?>