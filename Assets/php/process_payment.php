<?php
$servername = "localhost";
$username = "id21380365_user";
$password = "Harshil@2003";
$dbname = "id21380365_travel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = isset($_POST['customerName']) ? $_POST['customerName'] : '';
    $email = isset($_POST['customerEmail']) ? $_POST['customerEmail'] : '';
    $phone = isset($_POST['customerPhone']) ? $_POST['customerPhone'] : '';
    $booking_details = isset($_POST['bookingDetails']) ? $_POST['bookingDetails'] : '';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
    $currency = isset($_POST['currency']) ? $_POST['currency'] : '';
    $travel_date = isset($_POST['travelDate']) ? $_POST['travelDate'] : '';
    $package_type = isset($_POST['packageType']) ? $_POST['packageType'] : '';
    $status = 'status'; // Update with the actual status value

    // Insert data into the database using prepared statement
    $stmt = $conn->prepare("INSERT INTO bookings (customer_name, email, phone, booking_details, amount, currency, travel_date, package_type, status) 
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssss", $customer_name, $email, $phone, $booking_details, $amount, $currency, $travel_date, $package_type, $status);

    if ($stmt->execute()) {
        // Data inserted successfully
        echo "<script>alert('Payment successful.');</script>";
        echo "<script>window.location.href = 'bookinghistory.php';</script>";
    } else {
        // Generic error message
        echo "Payment failed. Please try again later.";
    }

    $stmt->close();
}

$conn->close();
?>
