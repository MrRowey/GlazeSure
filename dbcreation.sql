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

-- Creating SaleRep PW: _/d6sBi!FHo@s[Lp
CREATE USER 'SaleRep'@'%' IDENTIFIED WITH mysql_native_password BY '_/d6sBi!FHo@s[Lp';GRANT USAGE ON *.* TO 'SaleRep'@'%';ALTER USER 'SaleRep'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; 

-- Creating SaleManager PW: 77!v(ZOzVlLSIAX1
CREATE USER 'SaleManager'@'%' IDENTIFIED WITH mysql_native_password BY '77!v(ZOzVlLSIAX1';GRANT USAGE ON *.* TO 'SaleManager'@'%';ALTER USER 'SaleManager'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; 

-- Creating SaleAdmin PW: 1*dH.9HN[Z9Rw.Qo
CREATE USER 'SaleAdmin'@'%' IDENTIFIED WITH mysql_native_password BY '1*dH.9HN[Z9Rw.Qo';GRANT USAGE ON *.* TO 'SaleAdmin'@'%';ALTER USER 'SaleAdmin'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; 

-- Setting User Database Accses

-- SaleAdmin
GRANT ALL PRIVILEGES ON `glazesure`.* TO 'SaleAdmin'@'%'; ALTER USER 'SaleAdmin'@'%' ; 
-- SaleRep
GRANT SELECT, INSERT, UPDATE ON `glazesure`.* TO 'SaleRep'@'%'; ALTER USER 'SaleRep'@'%' ; 
-- SaleManager
GRANT SELECT, INSERT, UPDATE, DELETE ON `glazesure`.* TO 'SaleManager'@'%'; ALTER USER 'SaleManager'@'%' ; 

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
    Window_TypeID INT,
    Door_TypeID INT,
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

-- Creating Windows_to_quote Table
CREATE TABLE Windows_To_Quote (
   ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   TypeName VARCHAR(255)
);

-- Creating Doors_to_quote Table
CREATE TABLE Doors_To_Quote (
   ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   TypeName VARCHAR(255)
);


-- Create Admin Login

