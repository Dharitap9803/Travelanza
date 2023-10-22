<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Policy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .cookies-container {
            background-color: #fff;
            padding: 60px 0;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .cookies-header {
            font-size: 36px;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 20px;
        }

        .services {
            font-size: 18px;
            color: #333;
            margin-bottom: 30px;
            text-align: left;
        }

        .btn-home {
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-home:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
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
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="cookies-container">
                    <h1 class="cookies-header">Cookies Policy</h1>
                    <p>We use cookies to ensure you get the best experience on our website. By continuing to use our site, you agree to our use of cookies.</p>
                    <div class="services">
                        <h3>Our Tourism Services:</h3>
                        <ul>
                            <li>Bookings of Transportation</li>
                            <li>Accommodation Reservations</li>
                            <li>Guided Tours and Activities</li>
                            <li>Customized Travel Packages</li>
                        </ul>
                    </div>
                    <a href="index.php" class="btn btn-home">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
    <section class="footer-section">
        <p>&copy; 2023 Your Company. All rights reserved.</p>
        <div>
            <a href="https://www.facebook.com/"><i class="fa fa-facebook">Facebook</i></a>
            <a href="https://twitter.com/"><i class="fa fa-twitter">Twitter</i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram">Instagram</i></a>
            <!-- Add more social media links here -->
        </div>
        <ol class="footer-list">
            <li><a href="about.php">About Us</a></li>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="cookies.php">Cookies Use</a></li>
            <li><a href="terms.php">Terms and Conditions</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ol>
    </section>
</footer>
</body>
</html>
