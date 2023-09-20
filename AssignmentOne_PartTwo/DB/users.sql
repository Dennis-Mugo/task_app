CREATE DATABASE IF NOT EXISTS `Users`;

drop table if exists `Users`;
CREATE TABLE IF NOT EXISTS `Users` (
    `id` int(3) NOT NULL AUTO_INCREMENT,
	`Username` varchar(15),
    `FullName` varchar(70),
    `Email` varchar(80),
    `Passwords` varchar(20),
    `is_admin` tinyint(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
);

--user
INSERT Users (Username, FullName, Passwords, Email) values ('Cheese', 'Jerry', 'pass', 'JerryMouse@cheese.com'); 
--admin
INSERT Users (Username, FullName, Passwords, Email, `is_admin`) values ('Cheese', 'Jerry', 'pass', 'JerryMouse@cheese.com', 1); 

SELECT * FROM Users;