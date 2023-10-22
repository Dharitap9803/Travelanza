<!DOCTYPE html>
<html lang="en" ng-app="bookingHistoryApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking History</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <style>
        /* Additional custom styles for responsiveness */
        .footer-column {
            margin-bottom: 20px;
        }

        /* Adjust styles for better responsiveness */
        @media (max-width: 768px) {
            /* Add specific styles for smaller devices */
        }
        .footer-text {
            color: #fff;
        }
    </style>

    <script>
        angular.module('bookingHistoryApp', []).controller('BookingHistoryController', function ($scope, $http) {
            // Sample booking history data, replace with your actual data fetched from the server
            $scope.bookings = [
                {
                    id: 1,
                    customerName: 'John Doe',
                    bookingDate: '2023-10-10',
                    amount: '$200',
                    status: 'Confirmed'
                },
                {
                    id: 2,
                    customerName: 'Jane Smith',
                    bookingDate: '2023-10-12',
                    amount: '$350',
                    status: 'Pending'
                }
                // Add more data as needed
            ];
        });
    </script>

</head>

<body ng-controller="BookingHistoryController">

    <!-- Include the header -->
    <div>
        <!-- Header content -->
        <!-- Include the header.html file here -->
        <!-- Start of Header -->
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

<div class="container my-5">
        <h2>Booking History</h2>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Customer Name</th>
                    <th>Booking Date</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- PHP code for fetching data from the database -->
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "id21380365_travel";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch data from the database
                $sql = "SELECT * FROM bookings";
                $result = $conn->query($sql);

                // Check if records exist
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['customer_name'] . "</td>";
                        echo "<td>" . $row['travel_date'] . "</td>";
                        echo "<td>" . $row['amount'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
                <!-- End of PHP code for fetching data -->
            </tbody>
        </table>
    </div>


    <!-- Include the footer -->
    <div class="container-fluid" style="background-color: black; color: white; padding: 20px;">
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
                    <a href="#" style="text-decoration: none; color: white;"><i class="ri-facebook-fill"></i></a>
                    <a href="#" style="text-decoration: none; color: white;"><i class="ri-twitter-fill"></i></a>
                    <a href="#" style="text-decoration: none; color: white;"><i class="ri-instagram-line"></i></a>
                    <a href="#" style="text-decoration: none; color: white;"><i class="ri-youtube-fill"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
