CREATE DATABASE crud_tutorial;
use crud_tutorial;

CREATE TABLE  `customers` (
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`name` VARCHAR( 100 ) NOT NULL ,
		`email` VARCHAR( 100 ) NOT NULL ,
		`mobile` VARCHAR( 100 ) NOT NULL
		) ENGINE = INNODB;


