<?php
$data_base = "CREATE DATABASE IF NOT EXISTS `camagru`;";

$utable = "CREATE TABLE `camagru`.`users` ( 
    `id` INT(11) NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(100) NOT NULL , 
    `email` VARCHAR(100) NOT NULL , 
    `password` VARCHAR(300) NOT NULL , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB;";
?>