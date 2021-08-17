create database teste;

use teste;

CREATE TABLE `DQCMODEL` (
	`Id` INT,
	`MOdel` VARCHAR(10),
	PRIMARY KEY (`Id`)
);

CREATE TABLE `DQC84` (
	`Id` INT,
	`Model` INT,
	'FAT_PART_NO'VARCHAR(10),
	'TOTAL_LOCATION' INT,
	'UPDATE_DT'timestamp,
	'CREATE_DT' timestamp,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `DQC841` (
	`Id` INT,
	`FAT_PART_NO` INT,
	'PARTS_NO' VARCHAR(15),
	'UNT_USG' INT,
	'DESCRIPTOON' longtext,
	'REF__DESIGNATOR' longtext,
	'UPDATE_DT' timestamp,
	'CREATE_DT' tiraram,
	PRIMARY KEY (`Id`)
);
