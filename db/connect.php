<?php

/*
 * CREATE TABLE `comments` (
	`id` INT(255) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`email` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci',
	`homepage` VARCHAR(150) NOT NULL COLLATE 'utf8_general_ci',
	`text` TEXT(65535) NOT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

 * */

// Connecting to DataBase
$mysql = new mysqli('localhost', 'root', 'root', 'guest-book');
