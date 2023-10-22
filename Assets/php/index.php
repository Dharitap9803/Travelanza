<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
   <!-- Bootstrap CSS and JavaScript -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- AngularJS for the digital clock -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

    <style>

        /* Background gradient and global styles */
        body {
            
            background: linear-gradient(120deg, #087ac7, #13047e);
            font-family: 'Open Sans', sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
			overflow-x:hidden;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        /* Additional styling */
        .section__container {
            padding: 5rem 1rem;
            max-width: 1200px;
            margin: auto;
            text-align: center;
        }

        .section__subtitle {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .journey__grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .country__card {
            background-color: #fff;
            padding: 0;
            border-radius: 5px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 1rem;
            overflow: hidden;
            position: relative;
        }

        .country__card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        img {
            max-width: 100%;
        }

        .country__image {
            overflow: hidden;
            position: relative;
            height: 300px; /* Adjust the height as needed */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .country__image img {
            max-width: 100%;
            max-height: 100%;
        }

        .country__name {
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            font-size: 1.2rem;
            margin-top: 1rem;
        }

        .country__title {
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            font-size: 1.4rem;
            margin-top: 1rem;
            color: black; /* Add text color */
        }

        /* Carousel styling */
        /* Increase the size of the .carousel-caption element */
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px; /* Increase padding for more space */
            border-radius: 5px;
            width: 120%; /* Increase the width as desired, e.g., 120% */
            left: 50%;
            transform: translateX(-50%);
            bottom: 20px; /* Move it up from the bottom as needed */
        }

        /* Adjust other styles as needed */
        .carousel-caption h5,
        .carousel-caption p {
            color: #fff;
        }

        .destination-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            overflow-x: auto;
            white-space: nowrap;
            scroll-snap-type: x mandatory;
        }

        .destination {
            flex: 0 0 auto;
            scroll-snap-align: start;
            margin-right: 20px;
            display: inline-block;
            text-align: center;
            margin: 10px;
        }

        .destination img {
            margin-right: 10px;
        }

        .travel_container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            overflow-x: auto;
            white-space: nowrap;
            scroll-snap-type: x mandatory;
        }

        .travel {
            flex: 0 0 auto;
            scroll-snap-align: start;
            margin-right: 20px;
            display: inline-block;
            text-align: center;
            margin: 10px;
        }

        .travel img {
            margin-right: 10px;
        }

        .booking__type {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-auto-flow: column;
            grid-gap: 40px;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .image-item {
            text-align: center;
            width: 250px;
            height: auto;
            margin: 5px;
        }

        .image-item img {
            margin-right: 5px;
            padding: 0;
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
        }

        .image-item p {
            margin: 0;
            padding: 5px;
            font-size: 15px;
        }

        .h2 {
            text-align: center;
            font-family: 'Lucida Sana';
        }


        @media (max-width: 768px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* Display 3 */
@media (min-width: 768px) {
    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
        transform: translateX(33.333%);
    }

    .carousel-inner .carousel-item-left.active,
    .carousel-inner .carousel-item-prev {
        transform: translateX(-33.333%);
    }
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left {
    transform: translateX(0);
}

.modal-header {
            background-color: #087ac7;
            color: #fff;
        }

        .modal-content {
            background-color: #fff;
            border-radius: 10px;
        }

        .modal-footer {
            justify-content: center;
        }

/* Clock styling */
.clock {
    position: absolute;
    top: 0;
    right: 0;
    background: url('your-clock-background.svg') no-repeat;
    background-size: cover;
    width: 200px; /* Adjust the width as needed */
    height: 60px; /* Adjust the height as needed */
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 18px; /* Adjust font size as needed */
    font-weight: bold;
}


</style>
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





        <div class="container mt-5">
            <h1>Welcome to Travelanza</h1>
            <p>Your Ultimate Destination for Thrilling Adventures and Unforgettable Memories</p>
        </div>

        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4" class="active"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
			<img src="image1.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-md-block">
            <h5>First slide label</h5>
            <p>Voyager, c'est naître et mourir à chaque instant.</p>
			</div>
			</div>
            <div class="carousel-item">
            <img src="image2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
            <h5>Second slide label</h5>
            <p>Better than my wildest dreams,an adventure a day keeps the doctor away.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="image3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
            <h5>Third slide label</h5>
            <p>In London everyone is different and that means anyone can fit in</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="image4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
            <h5>Fourth slide label</h5>
            <p>Witnessing the symbol of eternal love.Taj Mahal</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="image5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
            <h5>Fifth slide label</h5>
            <p>A Journey of a thousand miles begins with a single step</p>
            </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            </div>
            </div>
            <br>
            <br>
            <br>

        <!-- Additional Sections -->
	<div class="clock">
    <div class="clock-background">
        <!-- You can replace this with your own background image or design -->
    </div>
    <div class="clock-display" ng-app="DigitalClockApp" ng-controller="DigitalClockController">
        {{ currentTime | date: 'hh:mm:ss a' }}
    </div>
</div>

<section>
    <h2 style="text-align:center;">EXPLORE DIFFERENT BOOKING TYPES.</h2>
    <div class="row">
    <div class="booking__type">
    <div class="image-item">
    <img src="booking-type1.jpg" alt="Booking Type 1" style="width:250px; height:200px;">
    <p>Booking Type 1</p>
	</div>
    <div class=" image-item">
    <img src="booking-type2.jpg" alt="Booking Type 2" style="width:250px; height:200px">
    <p>Booking Type 2</p>
    </div>
    <div class=" image-item">
    <img src="booking-type3.jpg" alt="Booking Type 3" style="width:250px; height:200px">
    <p>Booking Type 3</p>
    </div>
    <div class=" image-item">
    <img src="booking-type4.jpg" alt="Booking Type 4" style="width:250px; height:200px">
    <p>Booking Type 4</p>
    </div>
    <div class=" image-item">
    <img src="booking-type5.jpg" alt="Booking Type 5" style="width:250px; height:200px">
    <p>Booking Type 5</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    
    <div class="container text-center my-3">
        <h2 class="font-weight-light">Trending Destinations</h2>
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="newdelhi.webp">
                                <a href="https://www.travelanza.com/search?destination=New+Delhi,+India"><br>Book New Delhi,<br>India on Travelanza<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="banglore.jpg">
                                <a href="https://www.travelanza.com/search?destination=Bangalore,+India"><br>Book Bangalore,<br>India on Travelanza<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="mumbai.webp" >
                                <a href="https://www.travelanza.com/search?destination=Mumbai,+India"><br>Book Mumbai,<br>India on Travelanza<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="chennai.webp">
                                <a href="https://www.travelanza.com/search?destination=Chennai,+India"><br>Book Chennai,<br> India on Travelanza<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="hyderabad.jpg">
                                <a href="https://www.travelanza.com/search?destination=Hyderabad,+India"><br>Book Hyderabad,<br> India on Travelanza<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="jaipur.webp">
                                <a href="https://www.travelanza.com/search?destination=Jaipur,+India"><br>Book Jaipur, <br>India on Travelanza<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="mussoorie.jpg">
                                <a href="https://www.travelanza.com/search?destination=Mussoorie,+India"><br>Book Mussoorie, <br>India on Travelanza<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="ooty.jpg">
                                <a href="https://www.travelanza.com/search?destination=Ooty,+India"><br>Book Ooty, <br>India on Travelanza<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="puducherry.jpg">
                                <a href="https://www.travelanza.com/search?destination=Puducherry,+India"><br>Book Puducherry, <br>India on Travelanza<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="ranthambore.jpg">
                                <a href="https://www.travelanza.com/search?destination=Ranthambore,+India"><br>Book Ranthambore, <br>India on Travelanza<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="gujarat.jpg">
                                <a href="https://www.travelanza.com/search?destination=Gujarat,+India"><br>Book Gujarat, <br>India on Travelanza<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <img class="img-fluid" src="goa.jpg">
                                <a href="https://www.travelanza.com/search?destination=Goa,+India"><br>Book Goa, <br>India on Travelanza<br></a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <h5 class="mt-2">Advances one slide at a time</h5>
    </div>
    


    <br>
    <br>
    <br>
    <h1 style="text-align:center; text-transform:uppercase; color:beige;">Handpicked Collections for you</h1>
    <div class="travel_container">
    <div class="travel">
    <img src="i1.jpg" alt="place" style="width:300px; height:200px;">
    <p><br>Stays in & Around Delhi for<br> a Weekend<br><p>
    </div>
    <div class="travel">
    <img src="i2.webp" alt="place" style="width:300px; height:200px;">
    <p><br>Stays in & Around Mumbai <br>for a Weekend<br><p>
    </div>
    <div class="travel">
    <img src="i3.jpg" alt="place" style="width:300px; height:200px;">
    <p><br>Stays in & Around Bangalore <br>for a Weekend<br><p>
    </div>
    <div class="travel">
    <img src="i4.jpg" alt="place" style="width:300px; height:200px;">
    <p><br><br>Beach destination<br><p>
    </div>
    <div class="travel">
    <img src="i5.jpg" alt="place" style="width:300px; height:200px;">
    <p><br>Weekend Gateway<br><p>
    </div>
    <div class="travel">
    <img src="i6.jpg" alt="place" style="width:300px; height:200px;">
    <p><br>Hill Stations<br><p>
    </div>
    <div class="travel">
    <img src="i7.jpg" alt="place" style="width:300px; height:200px;">
    <p><br>Adventure Destinations<br><p>
    </div>
    <div class="travel">
    <img src="i8.jpg" alt="place" style="width:300px; height:200px;">
    <p><br>Heritage Destinations<br><p>
    </div>
    <div class="travel">
    <img src="i9.jpg" alt="place" style="width:300px; height:200px;">
    <p><br>Pilgrimage Destinations<br><p>
    </div>
    <div class="travel">
    <img src="i10.jpg" alt="place"style="width:300px; height:200px;">
    <p><br>Relaxation Destinations<br><p>
    </div>
    </div>
    
    
    </section>
    
    <!-- Additional Sections -->
    <section class="services__section">
    <div class="section__container">
    <h2 class="services__title">Our Services</h2>
    <div class="services__grid">
    <div class="service__card">
    <h3>Trending Bookings</h3>
    <p>Discover the latest and most popular travel packages.</p>
    </div>
    <div class="service__card">
    <h3>Special Offers</h3>
    <p>Explore exclusive deals and discounts for your next adventure.</p>
    </div>
    <div class="service__card">
    <h3>Customer Reviews</h3>
    <p>Hear what our travelers have to say about their unforgettable experiences.</p>
    </div>
    </div>
    </div>
    </section>


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
    <script>
        angular.module('DigitalClockApp', [])
            .controller('DigitalClockController', function ($scope, $interval) {
                function updateTime() {
                    $scope.currentTime = new Date();
                }

                // Update the time every second
                $interval(updateTime, 1000);

                // Initialize the time
                updateTime();
            });
    </script>
	
<!-- Registration Modal -->
<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registrationModalLabel">
                    <img src="tourism-logo.svg" alt="Tourism Logo" class="logo"> Register for an Adventure
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your registration form content goes here -->
                <!-- Include form fields for user registration -->
                <form ng-app="registrationApp" name="registrationForm" ng-submit="submitForm()" novalidate action="submit_registration.php" method="POST">
    <!-- Username Field -->
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" ng-model="user.username" ng-minlength="5" ng-maxlength="20" required placeholder="Enter username">
        <span class="error" ng-show="registrationForm.username.$error.required && submitted">Username is required.</span>
        <span class="error" ng-show="registrationForm.username.$error.minlength && submitted">Username is too short.</span>
        <span class="error" ng-show="registrationForm.username.$error.maxlength && submitted">Username is too long.</span>
    </div>

    <!-- Email Field -->
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" ng-model="user.email" required placeholder="Enter email">
        <span class="error" ng-show="registrationForm.email.$error.required && submitted">Email is required.</span>
        <span class="error" ng-show="registrationForm.email.$error.email && submitted">Invalid email format.</span>
    </div>

    <!-- Password Field -->
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" ng-model="user.password" ng-minlength="8" required placeholder="Password">
        <span class="error" ng-show="registrationForm.password.$error.required && submitted">Password is required.</span>
        <span class="error" ng-show="registrationForm.password.$error.minlength && submitted">Password is too short.</span>
    </div>

    <!-- Date of Birth Field -->
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob" ng-model="user.dob" required>
        <span class="error" ng-show="registrationForm.dob.$error.required && submitted">Date of Birth is required.</span>
    </div>

    <!-- City Field -->
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" name="city" ng-model="user.city" required placeholder="Enter city">
        <span class="error" ng-show="registrationForm.city.$error.required && submitted">City is required.</span>
    </div>

    <!-- State Field -->
    <div class="form-group">
        <label for="state">State</label>
        <input type="text" class="form-control" id="state" name="state" ng-model="user.state" required placeholder="Enter state">
        <span class="error" ng-show="registrationForm.state.$error.required && submitted">State is required.</span>
    </div>

    <!-- Country Field -->
    <div class="form-group">
        <label for "country">Country</label>
        <input type="text" class="form-control" id="country" name="country" ng-model="user.country" required placeholder="Enter country">
        <span class="error" ng-show="registrationForm.country.$error.required && submitted">Country is required.</span>
    </div>

    <!-- Pincode Field -->
    <div class="form-group">
        <label for="pincode">Pincode</label>
        <input type="text" class="form-control" id="pincode" name="pincode" ng-model="user.pincode" ng-pattern="/^[0-9]{6}$/" required placeholder="Enter pincode">
        <span class="error" ng-show="registrationForm.pincode.$error.required && submitted">Pincode is required.</span>
        <span class="error" ng-show="registrationForm.pincode.$error.pattern && submitted">Invalid pincode format (should be 6 digits).</span>
    </div>

    <!-- Canvas Element -->
    <canvas id="tourismCanvas" width="400" height="200"></canvas>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div ng-app="myApp" ng-controller="PopupController">
    <!-- Modal for displaying registration success message -->
    <div class="modal fade" id="registrationSuccessModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>You have successfully registered</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var app = angular.module('myApp', []);

    app.controller('PopupController', function ($scope, $timeout) {
        // Show the registration success modal
        $('#registrationSuccessModal').modal('show');

        // Hide the modal after 10 seconds
        $timeout(function () {
            $('#registrationSuccessModal').modal('hide');
        }, 10000); // 10,000 milliseconds = 10 seconds
    });
</script>


<script>
    angular.module('registrationApp', []).controller('RegistrationController', function ($scope, $http) {
        $scope.user = {};
        $scope.submitted = false;

        $scope.submitForm = function () {
            $scope.submitted = true;

            if ($scope.registrationForm.$valid) {
                // Gather form data
                var formData = {
                    username: $scope.user.username,
                    email: $scope.user.email,
                    password: $scope.user.password,
                    dob: $scope.user.dob,
                    city: $scope.user.city,
                    state: $scope.user.state,
                    country: $scope.user.country,
                    pincode: $scope.user.pincode
                };

                // Send the data to the server using AngularJS $http
                $http({
                    method: 'POST',
                    url: 'submit_registration.php', // Create this PHP file
                    data: formData
                }).then(function (response) {
                    // Handle the response here (e.g., show success or error message)
                }, function (error) {
                    // Handle the error here
                });
            }
        };
    });
</script>



    
    <script>
        // JavaScript for registration form popup
        $(document).ready(function() {
            $("#registerButton").click(function() {
                $("#registrationModal").modal();
            });
        });

        $(document).ready(function() {
            // Function to check if the user has scrolled to the right
            function isScrolledToRight(element) {
                return element.scrollLeft + element.clientWidth >= element.scrollWidth;
            }

            // Handle scroll event
            $('.destination-container').scroll(function() {
                // Check if the user has scrolled to the right
                if (isScrolledToRight(this)) {
                    // Add new cities when scrolled to the right
                    $(this).append(`
                        <div class="destination">
                            <img src="newcity.jpg" alt="New City Image" style="width:200px; height:130px;">
                            <a href="https://www.travelanza.com/search?destination=New+City,+Country"><br>Book New City,<br>Country on Travelanza<br></a>
                        </div>
                    `);
                }
            });
        });

        $(document).ready(function () {
            $('#recipeCarousel').carousel({
                interval: 10000
            });

            $('.carousel .carousel-item').each(function () {
                var minPerSlide = 3;
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i = 0; i < minPerSlide; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }
                    next.children(':first-child').clone().appendTo($(this));
                }
            });
        });
    </script>

</body>
</html>