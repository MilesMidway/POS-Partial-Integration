<?php

// Connect to your MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create admins table
$sql = "CREATE TABLE admins (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table admins created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Create products table
$sql = "CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_category VARCHAR(255) NOT NULL,
    product_price DECIMAL(10, 2) NOT NULL,
    product_quantity INT NOT NULL,
    product_status VARCHAR(255) NOT NULL,
    product_image VARCHAR(255)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table products created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Create employee_management table
$sql = "CREATE TABLE employee_management (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,
    employee_name VARCHAR(255) NOT NULL,
    employee_username VARCHAR(255) NOT NULL,
    employee_password VARCHAR(255) NOT NULL,
    employee_image BLOB
)";
if ($conn->query($sql) === TRUE) {
    echo "Table employee_management created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Create orders table
$sql = "CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    product_quantity INT NOT NULL,
    product_expense DECIMAL(10, 2) NOT NULL,
    order_date DATE NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(product_id) ON DELETE RESTRICT
)";
if ($conn->query($sql) === TRUE) {
    echo "Table orders created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
