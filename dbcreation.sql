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

-- Creating Sales Table
CREATE TABLE sales (
    sale_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    quote_id INT NOT NULL,
    job_type_id INT NOT NULL,
    sale_completed VARCHAR(100),
    notes VARCHAR(255)
);

-- Creating Quotes Table
CREATE TABLE quote (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    num_of_windows INT,
    num_of_doors INT,
    window_type_id INT,
    door_type_id INT,
    cost INT,
    customer_id INT NOT NULL,
    sale_id INT NOT NULL,
    notes VARCHAR(255)
);

-- Creating Customer Table
CREATE TABLE customer (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    company VARCHAR(255),
    location_id INT NOT NULL
);

-- Creating location Table
CREATE TABLE location (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    address VARCHAR(255) NOT NULL,
    town_id INT NOT NULL
);

-- Creating town Table
CREATE TABLE town (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
)

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


-- Create Admin Login

