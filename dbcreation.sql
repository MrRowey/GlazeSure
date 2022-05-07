/*================================================= 
Title: Database for GlazeSure
Version: 0.2
Date: 12/04/2022
Server: MySQL via UniServerZ
Database:

    Users: sale_rep

    Tables: sales, quotes, customer,doors, doors_to_quote, windows, windows_to_quote
=================================================*/

-- Creating GlazeSure Database
CREATE DATABASE GlazeSure;

-- Selecting the Database
USE GlazeSure;

-- Creating Database user

-- Creating SaleManager PW: 77!v(ZOzVlLSIAX1
CREATE USER 'SaleManager'@'%' IDENTIFIED WITH mysql_native_password BY '77!v(ZOzVlLSIAX1';GRANT USAGE ON *.* TO 'SaleManager'@'%';ALTER USER 'SaleManager'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; 
GRANT ALL PRIVILEGES ON `glazesure`.* TO 'SaleManager'@'%'; ALTER USER 'SaleRep'@'%' ; 

-- Creating Accounts Table
CREATE TABLE accounts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

-- Creating Quotes Table
CREATE TABLE Quotes (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    LeadID INT,
    Num_Of_Windows INT,
    Num_Of_Doors INT,
    WindowsID INT,
    DoorsID INT,
    Cost INT,
    CustomerID INT,
    SaleID INT,
    Notes VARCHAR(255)
);

-- Creating Leads Table
CREATE TABLE Leads (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    LeadType VARCHAR(100)
);

-- Creating Sales Table
CREATE TABLE Sales (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    QuoteID INT NOT NULL,
    Job_TypeID INT NOT NULL,
    Sale_Completed VARCHAR(100),
    Notes VARCHAR(255)
);

-- Creating Customer Table
CREATE TABLE Customer (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255),
    Company VARCHAR(255),
    LocationID INT NOT NULL
);

-- Creating location Table
CREATE TABLE Location (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Address VARCHAR(255) NOT NULL,
    TownID INT NOT NULL
);

-- Creating town Table
CREATE TABLE Town (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255)
)

-- Creating Windows Table
CREATE TABLE Windows (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    TypeName VARCHAR(255)
);

-- Creating Doors Table
CREATE TABLE Doors (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    TypeName VARCHAR(255)
);


-- Insert Statemenst

-- Window Types
Insert into windows (ID, TypeName) VALUES ('1','Casement');
Insert into windows (ID, TypeName) VALUES ('2','Boy & Bay');
Insert into windows (ID, TypeName) VALUES ('3','Sliding Sash');

-- Door Types
Insert into doors (ID, TypeName) VALUES ('1','Residential');
Insert into doors (ID, TypeName) VALUES ('2','Composite');
Insert into doors (ID, TypeName) VALUES ('3','French');
Insert into doors (ID, TypeName) VALUES ('4','Patio');
Insert into doors (ID, TypeName) VALUES ('5','Bifold');
Insert into doors (ID, TypeName) VALUES ('6','Patio Sliding');

-- Towns
Insert into Town (ID, Name) VALUES ('1','Ludlow');
Insert into Town (ID, Name) VALUES ('2','Shrewsbury');
Insert into Town (ID, Name) VALUES ('3','Church Stretton');
Insert into Town (ID, Name) VALUES ('4','Oswestry');
Insert into Town (ID, Name) VALUES ('5','Much Wenlock');
Insert into Town (ID, Name) VALUES ('6','Market Drayton');
Insert into Town (ID, Name) VALUES ('7','Craven Arms');
Insert into Town (ID, Name) VALUES ('8',"Bishop's Castle");


