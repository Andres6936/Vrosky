Create Database If Not Exists Vrosky;

Create Table If Not Exists Vrosky.Users
(
    User_ID   Int         NOT NULL AUTO_INCREMENT,
    User_Name Varchar(20) Not Null,
    User_Pass Varchar(80) Not Null,

    PRIMARY KEY (User_ID)
);

INSERT INTO Vrosky.Users (User_Name, User_Pass)
VALUES ('Andres6936', 'PassNotNull');