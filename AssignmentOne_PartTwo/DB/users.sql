CREATE DATABASE IF NOT EXISTS `Users`;

CREATE TABLE IF NOT EXISTS `Users` (
	`Username` varchar(15) primary key,
    `FullName` varchar(70),
    `Email` varchar(80),
    `Passwords` varchar(20)
);

INSERT Users (Username, FullName, Passwords, Email) values ('Cheese', 'Jerry', 'pass', 'JerryMouse@cheese.com');

SELECT * FROM Users;