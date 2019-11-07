<?php
$DB_SERVER = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "malaZAR123";
$DB_database = "CAMAGRU";

require_once("create.php");
try {
    $pdo = new PDO("mysql:$DB_SERVER", $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $err){
    echo "Error connecting to database: " . $err->getMessage();
}
?>