<!DOCTYPE html>
<html>

<head>
    <title>Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional custom styles for responsiveness */
        .footer-column {
            margin-bottom: 20px;
        }

        /* Adjust styles for better responsiveness */
        @media (max-width: 768px) {
            /* Add specific styles for smaller devices */
        }
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>

<body>

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
?>
<!-- Include the header -->
    <div>
        <div>
            <!-- Header content -->
            <!-- Include the header.html file here -->
            <div>
                <!-- Header content -->
                <!-- Include the header.html file here -->
                <!-- Start of Header -->
                <header>
                    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                        <div class="container">
                            <a class="navbar-brand" href="index.php">Travelanza</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                <a class="btn btn-primary" data-toggle="modal" data-target="#registrationModal"
                                    href="#">Register</a>
                            </div>
                        </div>
                    </nav>
                </header>
                <!-- End of Header -->
            </div>
        </div>
    </div>
	
	<br>
	<br>
	<br>
	
    <!-- Main Content Section -->
    <div class="container mt-4" ng-app="paymentApp">
        <div class="text-center" ng-controller="PaymentController">
            <h2 class="text-center my-4 text-primary">Secure Payment with PayPal</h2>
            
            <div ng-init="productPrice = <?php echo isset($_GET['price']) ? $_GET['price'] : 0; ?>"></div>

            <form action="process_payment.php" method="post" ng-submit="submitPayment()" class="row g-3 needs-validation" novalidate>
                   
			<div class="col-md-6">
                <label for="name" class="form-label">Full Name:</label>
                <input type="text" id="name" ng-model="customerName" class="form-control" placeholder="Enter your full name" required>
            </div>
<br><br><br>
            <div class="col-md-6">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" id="email" ng-model="customerEmail" class="form-control" placeholder="Enter your email" required>
            </div>
<br><br><br>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="tel" id="phone" ng-model="customerPhone" class="form-control" placeholder="Enter your phone number" required>
            </div>
<br><br><br>
            <div class="col-md-6">
                <label for="booking" class="form-label">Booking Details:</label>
                <textarea id="booking" ng-model="bookingDetails" class="form-control" placeholder="Enter your booking details" required></textarea>
            </div>
<br><br><br><br><br>

            <div class="col-md-6">
                <label for="amount" class="form-label">Amount (USD):</label>
                <input type="number" id="amount" ng-model="amount" class="form-control" placeholder="Enter amount" required>
            </div>
<br><br><br>
            <div class="col-md-6">
                <label for="currency" class="form-label">Currency:</label>
                <select id="currency" ng-model="currency" class="form-select" required>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                    <option value="GBP">GBP</option>
                    <option value="JPY">JPY</option>
                    <!-- Add more currencies as needed -->
                </select>
            </div>
<br><br><br>
            <div class="col-md-6">
                <label for="travel-date" class="form-label">Travel Date:</label>
                <input type="date" id="travel-date" ng-model="travelDate" class="form-control" required>
            </div>
<br><br><br>
            <div class="col-md-6">
                <label for="package" class="form-label">Package Type:</label>
                <select id="package" ng-model="packageType" class="form-select" required>
                    <option value="standard">Standard</option>
                    <option value="premium">Premium</option>
                    <option value="deluxe">Deluxe</option>
                    <!-- Add more package types as needed -->
                </select>
            </div>

            <!-- Add more fields here for advanced travel and tour booking -->
<br><br><br>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms" ng-model="agreeTerms" required>
                    <label class="form-check-label" for="terms">
                        I agree to the <a href="#">terms and conditions</a>
                    </label>
                </div>
            </div>

            <!-- End of additional fields -->
<br><br><br>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Proceed to PayPal</button>
            </div>
        </form>
    </div>
	
	</div>
	</div>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<!-- Include the footer -->
    <div class="container-fluid" style="background-color: black; color: var(--white); padding: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-column">
                    <h3>Travelanza</h3>
                    <p>Where Excellence Takes Flight. With a strong commitment to customer satisfaction and a passion
                        for air travel, Travelanza Airlines offers exceptional service and seamless journeys.</p>
                    <p>From friendly smiles to state-of-the-art aircraft, we connect the world, ensuring safe, comfortable,
                        and unforgettable experiences.</p>
                </div>
                <div class="col-lg-4 col-md-6 footer-column">
                    <h4>INFORMATION</h4>
                    <p>Home</p>
                    <p>About</p>
                    <p>Offers</p>
                    <p>Seats</p>
                    <p>Destinations</p>
                </div>
                <div class="col-lg-4 col-md-6 footer-column">
                    <h4>CONTACT</h4>
                    <p>Support</p>
                    <p>Media</p>
                    <p>Socials</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 text-center text-md-left">
                    <p class="small">Copyright @ 2023 Web Design Mastery. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <a href="#" style="text-decoration: none; color: var(--white);"><i class="ri-facebook-fill"></i></a>
                    <a href="#" style="text-decoration: none; color: var(--white);"><i class="ri-twitter-fill"></i></a>
                    <a href="#" style="text-decoration: none; color: var(--white);"><i class="ri-instagram-line"></i></a>
                    <a href="#" style="text-decoration: none; color: var(--white);"><i class="ri-youtube-fill"></i></a>
                </div>
            </div>
        </div>
    </div>
	
	<!-- JavaScript Section -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script>
        angular.module('paymentApp', []).controller('PaymentController', function ($scope, $http) {
            $scope.customerName = "";
            $scope.customerEmail = "";
            $scope.customerPhone = "";
            $scope.bookingDetails = "";
            $scope.amount = "";
            $scope.currency = "USD";
            $scope.travelDate = "";
            $scope.packageType = "standard";
            $scope.agreeTerms = false;

            $scope.submitPayment = function () {
                if ($scope.agreeTerms) {
                    var paymentData = {
                        name: $scope.customerName,
                        email: $scope.customerEmail,
                        phone: $scope.customerPhone,
                        bookingDetails: $scope.bookingDetails,
                        amount: $scope.amount,
                        currency: $scope.currency,
                        travelDate: $scope.travelDate,
                        packageType: $scope.packageType
                    };

                    // Send the data to the server using AngularJS $http
                    $http({
                        method: 'POST',
                        url: 'process_payment.php', // Create this PHP file
                        data: paymentData
                    }).then(function (response) {
                        // Handle the response here (e.g., show success or error message)
                    }, function (error) {
                        // Handle the error here
                    });
                }
            };
        });
    </script>
	
</body>

</html>
