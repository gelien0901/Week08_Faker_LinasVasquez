# Week08_Faker_LinasVasquez
#Database

CREATE DATABASE Employee;

USE Employee;

CREATE TABLE employee (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lastname VARCHAR(255),
    firstname VARCHAR(255),
    office_id INT,
    address TEXT
);

CREATE TABLE office (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    contactnum VARCHAR(50),
    email VARCHAR(255),
    address TEXT,
    city VARCHAR(255),
    country VARCHAR(255),
    postal VARCHAR(20)
);

CREATE TABLE transaction (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employee_id INT,
    office_id INT,
    datelog DATETIME,
    action VARCHAR(255),
    remarks TEXT,
    documentcode VARCHAR(10)
);
