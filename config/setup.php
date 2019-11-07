<?php
require_once("database.php");
try {
    $db = $pdo->prepare($data_base);
    $db->execute();
} 
catch (PDOException $e ) {
    echo "Database Creation failed: " . $e->getMessage();
}

try {
    $db = $pdo->prepare($utable);
    $db->execute();
} 
catch (PDOException $e ) {
    echo "Error creating table: " . $e->getMessage();
}
?>