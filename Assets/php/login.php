<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(120deg, #a75d09, #c7386c);
            font-family: 'Open Sans', sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        /* Login Container Styles */
        .login-container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin: 0 auto; /* Center the container horizontally */
            margin-top: 100px; /* Adjust this value for vertical alignment */
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #fff;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            font-weight: bold;
            color: #fff;
        }

        .form-control {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #fff;
            border-radius: 0;
            color: #fff;
            padding: 10px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #3498db;
        }

        .btn-login {
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #2980b9;
        }

        .btn-redirect {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #fff;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        .btn-redirect:hover {
            opacity: 0.8;
        }

        .sign-up-link {
            display: block;
            margin-top: 10px;
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .sign-up-link:hover {
            color: #3498db;
        }

        .policy-links {
            margin-top: 20px;
            font-size: 14px;
        }

        .policy-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .policy-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
session_start();

// Include the database connection code here
$servername = "localhost"; // Your server name
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
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

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            header("Location: index.php"); // Redirect to index.php after successful login
            exit();
        } else {
            $error_message = "Incorrect password. Please try again.";
        }
    } else {
        $error_message = "User not found. Please register or check your username.";
    }
}

$conn->close();
?>

<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Travelanza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bookings
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="flights.php">Flights</a>
                            <a class="dropdown-item" href="hotels.php">Hotels</a>
                            <a class="dropdown-item" href="trainsindex.php">Trains</a>
                            <a class="dropdown-item" href="buses.php">Buses</a>
                            <a class="dropdown-item" href="cabs.php">Cabs</a>
                            <a class="dropdown-item" href="attractions.php">Attractions</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                </ul>
            </div>
            <div class="ml-auto">
                <a class="btn btn-light" href="login.php">Login</a>
                <a class="btn btn-primary" data-toggle="modal" data-target="#registrationModal" href="#">Register</a>
            </div>
        </div>
    </nav>
</header>

<div class="login-container" ng-app="loginApp" ng-controller="LoginController">
    <h2>Welcome Back</h2>
    <form name="loginForm" ng-submit="submitForm()" action="login_process.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" ng-model="user.username" required placeholder="Enter your username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" ng-model="user.password" required placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-login">Login</button>
    </form>
    <?php if (isset($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } ?>
    <p class="policy-links">
        <a href="privacy.php">Privacy Policy</a>
        <span> | </span>
        <a href="terms.php">Terms and Conditions</a>
    </p>
    <a href="index.php" class="btn-redirect">Back to Home</a>
    <a href="register.php" class="sign-up-link">Not registered? Register here.</a>
</div>
<br>
<br>
<br>
<br>
<br>
<div style="background-color: black; color: var(--white); padding: 20px; display: flex; flex-direction: column; align-items: flex-start; justify-content: space-between; min-height: 400px;">

    <div style="padding: 20px; display: flex; flex-wrap: wrap; justify-content: space-between; gap: 20px; max-height: 300px; overflow: auto;">

        <div style="flex: 1;">
            <h3 style="font-size: 1.5rem; font-weight: 500; margin-bottom: 1rem;">Travelanza</h3>
            <p style="margin-bottom: 1rem; cursor: pointer; transition: 0.3s;">Where Excellence Takes Flight. With a strong commitment to customer satisfaction and a passion for air travel, Travelanza Airlines offers exceptional service and seamless journeys.</p>
            <p style="margin-bottom: 1rem; cursor: pointer; transition: 0.3s;">From friendly smiles to state-of-the-art aircraft, we connect the world, ensuring safe, comfortable, and unforgettable experiences.</p>
        </div>

        <div style="flex: 1;">
            <h4 style="font-size: 1.5rem; font-weight: 500; margin-bottom: 1rem;">INFORMATION</h4>
            <p style="margin-bottom: 1rem; cursor: pointer; transition: 0.3s;">Home</p>
            <p style="margin-bottom: 1rem; cursor: pointer; transition: 0.3s;">About</p>
            <p style="margin-bottom: 1rem; cursor: pointer; transition: 0.3s;">Offers</p>
            <p style="margin-bottom: 1rem; cursor: pointer; transition: 0.3s;">Seats</p>
            <p style="margin-bottom: 1rem; cursor: pointer; transition: 0.3s;">Destinations</p>
        </div>

        <div style="flex: 1;">
            <h4 style="font-size: 1.5rem; font-weight: 500; margin-bottom: 1rem;">CONTACT</h4>
            <p style="margin-bottom: 1rem; cursor: pointer; transition: 0.3s;">Support</p>
            <p style="margin-bottom: 1rem; cursor: pointer; transition: 0.3s;">Media</p>
            <p style="margin-bottom: 1rem; cursor: pointer; transition: 0.3s;">Socials</p>
        </div>
    </div>

    <div style="display: flex; align-items: center; justify-content: space-between; padding: 10px;">

        <p style="font-size: 0.9rem; color: var(--extra-light); margin: 0;">Copyright @ 2023 Web Design Mastery. All rights reserved.</p>
        
        <div style="display: flex; align-items: flex-end; gap: 10px;">
            <a href="#" style="text-decoration: none; color: var(--white);"><i class="ri-facebook-fill"></i></a>
            <a href="#" style="text-decoration: none; color: var(--white);"><i class="ri-twitter-fill"></i></a>
            <a href="#" style="text-decoration: none; color: var(--white);"><i class="ri-instagram-line"></i></a>
            <a href="#" style="text-decoration: none; color: var(--white);"><i class="ri-youtube-fill"></i></a>
        </div>
    </div>
</div>	

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<!-- Add your JavaScript and AngularJS script links here -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="login_validation.js"></script>
	
</body>
</html>
