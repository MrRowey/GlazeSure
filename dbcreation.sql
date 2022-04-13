/*================================================= 
Title: Database for GlazeSure
Version: 0.1
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

CREATE USER 'sale-rep'@'localhost' IDENTIFIED BY 'Jqv*HIqhhQS_G8a7';

-- Creating Sales Table
CREATE TABLE sales (
    sale_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    quote_id INT NOT NULL,
    job_type_id INT NOT NULL,
    sale_completed VARCHAR(100),
    customer_id INT NOT NULL,
    notes VARCHAR(255)
);

-- Creating Quotes Table
CREATE TABLE quotes (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    num_of_windows INT,
    num_of_doors INT,
    window_type_id INT,
    door_type_id INT,
    cost INT,
    notes VARCHAR(255)
);

-- Creating Customer Table
CREATE TABLE customer (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cus_name VARCHAR(255),
    company VARCHAR(255)
);

-- Creating Windows Table
CREATE TABLE windows (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    type_name VARCHAR(255)
);

-- Creating Doors Table
CREATE TABLE doors (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    type_name VARCHAR(255)
);

-- Creating Windows_to_quote Table
CREATE TABLE windows_to_quote (
   id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   type_name VARCHAR(255)
);

-- Creating Doors_to_quote Table
CREATE TABLE doors_to_quite (
   id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   type_name VARCHAR(255)
);