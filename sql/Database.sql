Create Database If Not Exists Vrosky;

Create Table If Not Exists Vrosky.Users
(
    ID        Int          NOT NULL AUTO_INCREMENT,
    Username  Varchar(50)  Not Null UNIQUE,
    Password  Varchar(255) Not Null,
    Create_At DATETIME DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (ID)
);

INSERT INTO Vrosky.Users (Username, Password)
VALUES ('Andres6936', 'PassNotNull');