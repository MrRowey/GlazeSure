--#############################################################################################
--## Title: Database for GlazeSure                                                           ##
--## Version: 0.2                                                                            ##
--## Date: 12/04/2022                                                                        ##
--## Server: MySQL via UniServerZ                                                            ##
--## Database:                                                                               ##
--##                                                                                         ##
--##   Users:                                                                                ##
--##                                                                                         ##
--##    Tables: sales, quotes, customer,doors, doors_to_quote, windows, windows_to_quote     ##
--##                                                                                         ##
--#############################################################################################

-- Drop all tables
DROP DATABASE Glazesure;




-- Creating GlazeSure & Selecting Database
CREATE DATABASE GlazeSure;
USE GlazeSure;

-- Creating Accounts Table
CREATE TABLE accounts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

-- Adding Admin Account
INSERT INTO accounts (username,password,email) VALUES ('admin','$2y$10$293qWzaTcTGxye2BiW9p1eQaDhGK4yFg5pha15z0cNvcQJZmapxve','admin@glazesure.com');


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

-- Quote Inserts





-- Creating Leads Table
CREATE TABLE Leads (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    LeadType VARCHAR(100)
);

-- Lead Inserts





-- Creating Sales Table
CREATE TABLE Sales (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    QuoteID INT NOT NULL,
    Job_TypeID INT NOT NULL,
    Sale_Completed VARCHAR(100),
    Notes VARCHAR(255)
);

-- Sale Inserts






-- Creating Customer Table
CREATE TABLE Customer (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    lastName VARCHAR(255) NOT NULL,
    firstName VARCHAR(255) NOT NULL,
    companyName VARCHAR(255),
    contactEmail VARCHAR(255) NOT NULL,
    contactNumber INT NOT NULL,
    streetAddress VARCHAR(255) NOT NULL,
    townID INT NOT NULL
);

-- Customer Insters






-- Creating town Table
CREATE TABLE Town (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255)
)

-- Town Inserts
Insert into Town (ID, Name) VALUES ('1','Ludlow');
Insert into Town (ID, Name) VALUES ('2','Shrewsbury');
Insert into Town (ID, Name) VALUES ('3','Church Stretton');
Insert into Town (ID, Name) VALUES ('4','Oswestry');
Insert into Town (ID, Name) VALUES ('5','Much Wenlock');
Insert into Town (ID, Name) VALUES ('6','Market Drayton');
Insert into Town (ID, Name) VALUES ('7','Craven Arms');
Insert into Town (ID, Name) VALUES ('8',"Bishop's Castle");

-- Creating Windows Table
CREATE TABLE Windows (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    TypeName VARCHAR(255)
);

-- Window Insers
Insert into windows (ID, TypeName) VALUES ('1','Casement');
Insert into windows (ID, TypeName) VALUES ('2','Bow & Bay');
Insert into windows (ID, TypeName) VALUES ('3','Sliding Sash');

-- Creating Doors Table
CREATE TABLE Doors (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    TypeName VARCHAR(255)
);

-- Door Inserts
Insert into doors (ID, TypeName) VALUES ('1','Residential');
Insert into doors (ID, TypeName) VALUES ('2','Composite');
Insert into doors (ID, TypeName) VALUES ('3','French');
Insert into doors (ID, TypeName) VALUES ('4','Patio');
Insert into doors (ID, TypeName) VALUES ('5','Bifold');
Insert into doors (ID, TypeName) VALUES ('6','Patio Sliding');

-- Creating job_type
CREATE TABLE job_type (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    type VARCHAR(100)
);

-- Job_type Inserts
Insert into job_type (type) VALUES ('Supply');
Insert into job_type (type) VALUES ('Supplu & Install');

-- creating sale_completed
CREATE TABLE sale_completed (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    completed VARCHAR(100)
);

-- Insert Sale_completed 
Insert into sale_completed (completed) VALUES ('Canceled');
Insert into sale_completed (completed) VALUES ('In-Progress');
Insert into sale_completed (completed) VALUES ('Completed');

-- Table Alters

ALTER TABLE windows RENAME COLUMN TypeName TO WindowType;
ALTER TABLE doors RENAME COLUMN TypeName TO DoorType;
