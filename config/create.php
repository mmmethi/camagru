<?php
$data_base = "CREATE DATABASE IF NOT EXISTS `camagru`;";

$utable = "CREATE TABLE `camagru`.`users` ( 
    `id` INT(11) NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(100) NOT NULL , 
    `email` VARCHAR(100) NOT NULL , 
    `password` VARCHAR(300) NOT NULL , 
    `verified` INT(1) DEFAULT 0,
    `key` Varchar(1024) NOT NULL DEFAULT 0
    PRIMARY KEY (`id`)) ENGINE = InnoDB;";

$user_img = "CREATE TABLE IF NOT EXISTS `camagru`.`imgs` (
    `Id` int(11) NOT NULL AUTO_INCREMENT,
    `Image` varchar(20000) NOT NULL,
    `user_id` INT NOT NULL,
    PRIMARY KEY (`Id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;"
?>