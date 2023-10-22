<?php
$servername = "localhost";
$username = "id21380365_user"; // Your MySQL username
$password = "Harshil@2003"; // Your MySQL password
$dbname = "id21380365_travel"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customerName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    bookingDetails TEXT NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    currency VARCHAR(3) NOT NULL,
    travelDate DATE NOT NULL,
    packageType VARCHAR(50) NOT NULL,
    bookingDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === true) {
    echo "Table bookings created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
