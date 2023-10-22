<?php
$con = mysqli_connect("localhost", "id21380365_user", "Harshil@2003", "id21380365_travel") or die(mysqli_error($con));
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize data from the form
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $pincode = mysqli_real_escape_string($con, $_POST['pincode']);

    // Insert data into the database using prepared statement
    $stmt = $con->prepare("INSERT INTO users (username, email, password, dob, city, state, country, pincode) 
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssss", $username, $email, $password, $dob, $city, $state, $country, $pincode);

    if ($stmt->execute()) {
        // Data inserted successfully
        echo "<script>alert('Registration successful. Your username is: $username');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    } else {
        // Generic error message
        echo "Registration failed. Please try again later.";
    }

    $stmt->close();
}

$con->close();
?>
