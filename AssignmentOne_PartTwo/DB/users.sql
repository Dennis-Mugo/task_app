CREATE DATABASE IF NOT EXISTS `Users`;

use `Users`;
SELECT DATABASE();

drop table if exists `Users`;
CREATE TABLE IF NOT EXISTS `Users` (
    `id` int(3) NOT NULL AUTO_INCREMENT,
	`Username` varchar(15),
    `FullName` varchar(70),
    `Email` varchar(80),
    `Passwords` varchar(255),
    `is_admin` tinyint(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
);
--admin
INSERT Users (Username, FullName, Passwords, Email, `is_admin`) values ('Cheese', 'Jerry', '$2y$10$Jr01rJA3zPPDC4ez0xzySO0U0MSn2toU3t/7wPaHhcCbI04c1/qlu', 'JerryMouse@cheese.com', 1); 

SELECT * FROM Users;

DROP TABLE IF EXISTS `keys`;
CREATE TABLE IF NOT EXISTS `keys` (
    `id` int(3) NOT NULL AUTO_INCREMENT,
    `key` varchar(100),
    `user_id` int(3),
    PRIMARY KEY (`id`)
);

INSERT into `keys` (`key`, `user_id`) values ('1234567890', 1);

SELECT * FROM keys;