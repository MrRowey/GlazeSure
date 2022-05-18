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
    password VARCHAR(255) NOT NULL
);

-- Adding Admin Account
INSERT INTO accounts (username,password,email) VALUES ('admin','$2y$10$293qWzaTcTGxye2BiW9p1eQaDhGK4yFg5pha15z0cNvcQJZmapxve');

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
    Notes VARCHAR(255)
);

-- Alter table

ALTER TABLE quotes RENAME COLUMN DoorsID TO Door_TypeID;
ALTER TABLE quotes RENAME COLUMN WindowsID TO Window_TypeID;


-- Quote Inserts
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (1,2,3,4,3,685,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (2,4,6,4,3,560,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (3,6,7,4,3,565,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (4,8,3,4,3,760,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (5,10,5,4,3,548,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (6,12,2,4,2,590,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (7,14,4,4,2,590,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (8,16,8,4,2,590,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (9,18,6,4,3,560,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (10,20,5,4,3,560,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (11,19,9,4,3,560,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (12,18,2,4,1,596,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (13,17,2,4,1,596,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (14,16,2,4,1,696,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (15,15,1,4,3,685,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (16,14,1,3,3,685,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (17,13,1,3,3,560,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (18,12,1,3,3,560,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (19,12,3,4,3,560,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (20,12,3,4,3,560,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (21,11,3,2,4,968,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (22,11,3,2,4,968,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (23,11,2,2,4,958,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (24,16,2,4,3,558,2,'');
INSERT INTO quotes (LeadID,Num_Of_Windows,Num_Of_Doors,Door_TypeID,Window_TypeID,Cost, CustomerID,Notes) VALUES (25,18,2,4,3,558,2,'');


-- Creating Leads Table
CREATE TABLE Leads (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    notes VARCHAR(255)
);

-- Lead Inserts
INSERT INTO leads (ID,notes) Value (1,'Onsite');
INSERT INTO leads (ID,notes) Value (2,'Marketing');
INSERT INTO leads (ID,notes) Value (3,'Call Center');
INSERT INTO leads (ID,notes) Value (4,'Marketing');
INSERT INTO leads (ID,notes) Value (5,'Marketing');
INSERT INTO leads (ID,notes) Value (6,'Call Center');
INSERT INTO leads (ID,notes) Value (7,'Marketing');
INSERT INTO leads (ID,notes) Value (8,'Marketing');
INSERT INTO leads (ID,notes) Value (9,'Call Center');
INSERT INTO leads (ID,notes) Value (10,'Marketing');
INSERT INTO leads (ID,notes) Value (11,'Call Center');
INSERT INTO leads (ID,notes) Value (12,'Call Center');
INSERT INTO leads (ID,notes) Value (13,'Marketing');
INSERT INTO leads (ID,notes) Value (14,'Marketing');
INSERT INTO leads (ID,notes) Value (15,'Onsite');
INSERT INTO leads (ID,notes) Value (16,'Marketing');
INSERT INTO leads (ID,notes) Value (17,'Marketing');
INSERT INTO leads (ID,notes) Value (18,'Call Center');
INSERT INTO leads (ID,notes) Value (19,'Call Center');
INSERT INTO leads (ID,notes) Value (20,'Marketing');
INSERT INTO leads (ID,notes) Value (21,'Marketing');
INSERT INTO leads (ID,notes) Value (22,'Marketing');
INSERT INTO leads (ID,notes) Value (23,'Onsite');
INSERT INTO leads (ID,notes) Value (24,'Onsite');
INSERT INTO leads (ID,notes) Value (25,'Marketing');


-- Creating Sales Table
CREATE TABLE Sales (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    quote_id INT NOT NULL,
    job_type_id INT NOT NULL,
    sale_completed VARCHAR(100),
    notes VARCHAR(255)
);

-- Sale Inserts

INSERT INTO sales (id, quote_id, job_type_id, sale_completed,notes) VALUES (1,1,1,3,'');
INSERT INTO sales (id, quote_id, job_type_id, sale_completed,notes) VALUES (2,3,2,2,'');
INSERT INTO sales (id, quote_id, job_type_id, sale_completed,notes) VALUES (3,5,1,1,'');
INSERT INTO sales (id, quote_id, job_type_id, sale_completed,notes) VALUES (4,7,2,3,'');
INSERT INTO sales (id, quote_id, job_type_id, sale_completed,notes) VALUES (5,9,1,2,'');
INSERT INTO sales (id, quote_id, job_type_id, sale_completed,notes) VALUES (6,11,2,1,'');
INSERT INTO sales (id, quote_id, job_type_id, sale_completed,notes) VALUES (7,13,1,3,'');
INSERT INTO sales (id, quote_id, job_type_id, sale_completed,notes) VALUES (8,15,2,2,'');
INSERT INTO sales (id, quote_id, job_type_id, sale_completed,notes) VALUES (9,17,1,1,'');
INSERT INTO sales (id, quote_id, job_type_id, sale_completed,notes) VALUES (10,19,2,3,'');
INSERT INTO sales (id, quote_id, job_type_id, sale_completed,notes) VALUES (11,21,1,2,'');

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

INSERT INTO customer (id,lastName,firstName,companyName,contactEmail,contactNumber,streetAddress,townID) VALUES (1,'Row','Josh','IT Systems LTD','JoshRow@gmail.com',01743247526,'17 Test Lane',2);
INSERT INTO customer (id,lastName,firstName,companyName,contactEmail,contactNumber,streetAddress,townID) VALUES (1,'Jones','Maddison','Accuse systems','MaddisonJones@gmail.com',017465847526,'25 Sky Road',1);
INSERT INTO customer (id,lastName,firstName,companyName,contactEmail,contactNumber,streetAddress,townID) VALUES (1,'Rowe','Kim','Eco Focus','dd92398@enhanceronly.com',01743247526,'37 Wilshaw Mill Road',4);
INSERT INTO customer (id,lastName,firstName,companyName,contactEmail,contactNumber,streetAddress,townID) VALUES (1,'Jones','James','Snared Services','1sfeom@isueir.com',01743247526,'380 Filton Avenue',2);
INSERT INTO customer (id,lastName,firstName,companyName,contactEmail,contactNumber,streetAddress,townID) VALUES (1,'Smith','Robert','Sanguine Services','hstpierr@tchoeo.com',01743247526,'22 Clemence Road',6);
INSERT INTO customer (id,lastName,firstName,companyName,contactEmail,contactNumber,streetAddress,townID) VALUES (1,'Williams','Mary','The Helping Hands','aops98@chantellegribbon.com',01743247526,'148 Queen Alexandra Road',4);
INSERT INTO customer (id,lastName,firstName,companyName,contactEmail,contactNumber,streetAddress,townID) VALUES (1,'Dacis','Linda','Random Repairs','denis3084@eetieg.com',01743247526,'3 Rhodes Drive',8);
INSERT INTO customer (id,lastName,firstName,companyName,contactEmail,contactNumber,streetAddress,townID) VALUES (1,'Johnson','Lisa','Refresh Random','jdiezmed@gmailvn.net',01743247526,'15 Cheddar Waye',3);


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
    WindowType VARCHAR(255)
);

-- Window Insers
Insert into windows (ID, TypeName) VALUES ('1','Casement');
Insert into windows (ID, TypeName) VALUES ('2','Bow & Bay');
Insert into windows (ID, TypeName) VALUES ('3','Sliding Sash');

-- Creating Doors Table
CREATE TABLE Doors (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    DoorType VARCHAR(255)
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
Insert into job_type (type) VALUES ('Supply & Install');

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