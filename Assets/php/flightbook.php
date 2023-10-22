<!DOCTYPE html>
<html ng-app="flightBookingApp">

<head>
    <title>Flight Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional custom styles for responsiveness */
        .footer-column {
            margin-bottom: 20px;
        }

        .custom-img-height {
            height: 300px; /* Adjust the height as per your requirement */
            object-fit: cover; /* Maintain the image's aspect ratio and cover the entire container */
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script>
        angular.module('flightBookingApp', []).controller('FlightBookingController', function ($scope, $http) {
            $scope.productPrice = 200; // Replace with your actual product price
            $scope.redirectToPayment = function () {
                $window.location.href = 'payment.php?price=' + $scope.productPrice;
            };
        });
    </script>
</head>

<body ng-controller="FlightBookingController">

    <!-- Include the header -->
    <div>
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

    </div>

        <!-- Main Content of the Webpage -->
    <div class="container mt-4">
        <!-- Your main content here -->
        <div class="text-center">
            <h1>Welcome to Travelanza!</h1>
            <p>Enjoy a seamless travel experience with us.</p>
        </div>

        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">VISTARA</h5> <!-- Added title above the image -->
            <img src="fl1.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">
				Indulge in a world-class travel experience right from the start, as Vistara's user-friendly booking process sets the tone for a remarkable journey ahead.
				</p>
				<p>250 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 2 mins ago</small></p>
                                <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">AIR INDIA</h5> <!-- Added title above the image -->
            <img src="fl2.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">
				Embark on a seamless journey with Air India's user-friendly booking interface, where every click feels like a step closer to your dream destination.
				</p>
				<p>200 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 3 hours ago</small></p>
                                <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">INDIGO</h5> <!-- Added title above the image -->
            <img src="fl3.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">
				Indigo's user-friendly interface ensures that booking your ticket is not just a transaction, but the start of an exciting exploration filled with comfort and convenience.
				</p>
				<p>300 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 30 minutes ago</small></p>
                                <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">SPICEJET</h5> <!-- Added title above the image -->
            <img src="fl4.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">
				Seize the day with SpiceJet's user-centric ticket booking, where every moment spent planning is as thrilling as the trip itself. Get ready for an adventure that begins right at your fingertips!
				</p>
				<p>280 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
                             <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">AKASA AIRLINES</h5> <!-- Added title above the image -->
            <img src="fl5.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">
				Let Akasa Airlines pave the way for your smooth travel experience from the very first step. With our intuitive booking system, planning your trip becomes a delightful and hassle-free affair.
				</p>
				<p>320 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
                <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
		
		<div class="card mb-3">
            <h5 class="card-title text-center mt-3">VISTARA</h5> <!-- Added title above the image -->
            <img src="fl6.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">
				Indulge in a world-class travel experience right from the start, as Vistara's user-friendly booking process sets the tone for a remarkable journey ahead.
				</p>
				<p>250 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 2 mins ago</small></p>
                                <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">AIR INDIA</h5> <!-- Added title above the image -->
            <img src="fl7.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">
				Embark on a seamless journey with Air India's user-friendly booking interface, where every click feels like a step closer to your dream destination.
				</p>
				<p>200 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 3 hours ago</small></p>
                                <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">INDIGO</h5> <!-- Added title above the image -->
            <img src="fl8.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">
				Indigo's user-friendly interface ensures that booking your ticket is not just a transaction, but the start of an exciting exploration filled with comfort and convenience.
				</p>
				<p>300 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 30 minutes ago</small></p>
                                <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">SPICEJET</h5> <!-- Added title above the image -->
            <img src="fl9.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">
				Seize the day with SpiceJet's user-centric ticket booking, where every moment spent planning is as thrilling as the trip itself. Get ready for an adventure that begins right at your fingertips!
				</p>
				<p>280 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
                             <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>   
        </div>
        <div class="card mb-3">
            <h5 class="card-title text-center mt-3">AKASA AIRLINES</h5> <!-- Added title above the image -->
            <img src="fl10.jpg" class="card-img-top custom-img-height" alt="...">
            <div class="card-body d-flex flex-column">
                <p class="card-text">
				Let Akasa Airlines pave the way for your smooth travel experience from the very first step. With our intuitive booking system, planning your trip becomes a delightful and hassle-free affair.
				</p>
				<p>320 USD</p>
                <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
                <form action="payment.php">
				<div class="mt-auto text-right"> <!-- 'Book Now' button at the right bottom side -->
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
				</form>
            </div>   
        </div>
            
    </div>

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
