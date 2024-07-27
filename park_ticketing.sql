CREATE DATABASE park_ticketing;

USE park_ticketing;

-- Create a table for storing ticket information
CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ticket_number VARCHAR(50) NOT NULL UNIQUE,
    visitor_name VARCHAR(100) NOT NULL,
    visit_date DATE NOT NULL,
    amount DECIMAL(10, 2) NOT NULL
);

-- Create a table for storing user information (for authentication purposes)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
