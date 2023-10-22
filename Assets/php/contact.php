<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f2f2f2;
            color: #333;
        }

        .contact-container {
            background-color: #fff;
            padding: 60px 0;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-header {
            font-size: 36px;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 40px;
        }

        .contact-card {
            padding: 20px;
            margin: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-card h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        .contact-card p {
            font-size: 16px;
            color: #666;
            margin-bottom: 0;
        }

        .contact-form {
            background-color: #ffffff;
            padding: 30px;
            margin: 30px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-send {
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-send:hover {
            background-color: #2980b9;
        }

        .btn-redirect {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #2117e6;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        .btn-redirect:hover {
            opacity: 0.8;
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
    
    

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center py-5" style="background-color: #3498db; color: #fff;">
                <h1 class="mb-3">Get in Touch</h1>
                <p>We're here to assist you. Feel free to contact us anytime.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="contact-card">
                    <h3>Our Office</h3>
                    <p>123 Main Street<br>City, Country<br>Postal Code</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-card">
                    <h3>Contact Information</h3>
                    <p>Email: info@travelanza.com<br>Phone: +91 99*****764</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <form id="contactForm" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-send">Send Message</button>
                    </form>
                    <a href="index.php" class="btn-redirect">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
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
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;
            
            if (name === "" || email === "" || message === "") {
                alert("All fields are required.");
                return false;
            }
            
            return true;
        }
    </script>
</body>
</html>
