<?php
session_start();

// Include the database connection code here
$servername = "localhost"; // Your server name
$username = "id21380365_user"; // Your MySQL username
$password = "Harshil@2003"; // Your MySQL password
$dbname = "id21380365_travel"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Modify the SQL query to retrieve the user's information from the database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, now check the password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Authentication successful, create a session
            $_SESSION['username'] = $username;
            header("Location: index.php"); // Redirect to index.php after successful login
            exit();
        } else {
            // Authentication failed due to incorrect password
            echo "Incorrect password. Please try again.";
        }
    } else {
        // Authentication failed due to unknown username
        echo "User not found. Please register or check your username.";
    }
}

$conn->close();
?>
