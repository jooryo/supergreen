DROP DATABASE IF EXISTS Admins;

CREATE DATABASE Admins;

USE Admins;

CREATE TABLE Admins
(
   ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   username varchar(20),
   password varchar(30),
Email varchar(20),
   phone varchar(30),
  address varchar(30)   
);

INSERT INTO Admins (username,password,Email,phone,address) VALUES ('Sirin','443007769','443007769@pnu.edu.sa','0554433332','Riyadh');
INSERT INTO Admins (username,password,Email,phone,address) VALUES ('Judy','443007810','443007810@pnu.edu.sa','0554433333','Riyadh');
INSERT INTO Admins (username,password,Email,phone,address) VALUES ('Joory','443004030','443004030@pnu.edu.sa','0554433334','Riyadh');
INSERT INTO Admins (username,password,Email,phone,address) VALUES ('Norah','443007795','443007795@pnu.edu.sa','0554433335','Riyadh');