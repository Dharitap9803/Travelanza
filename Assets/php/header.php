<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelanza</title>
    <style>
        /* Your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
            color: white; /* Change the color to white */
        }

        .navbar-toggler {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        .navbar-nav {
            list-style: none;
            display: flex;
        }

        .nav-item {
            margin: 0 15px;
            position: relative;
        }

        .nav-link {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #333;
            top: 100%;
            left: 0;
            min-width: 150px;
            text-align: left;
        }

        .dropdown-item {
            padding: 10px;
            display: block;
            text-decoration: none;
            color: #fff;
        }

        .nav-item:hover .dropdown-menu {
            display: block;
        }

        @media (max-width: 768px) {
            .navbar-toggler {
                display: block;
            }

            .navbar-nav {
                display: none;
                flex-direction: column;
                background-color: #333;
                position: absolute;
                top: 50px;
                left: 0;
                width: 100%;
            }

            .nav-item {
                margin: 10px 0;
            }

            .navbar-toggler.active + .navbar-nav {
                display: flex;
            }

            .nav-item:hover .dropdown-menu {
                display: none;
            }
        }

        .ml-auto {
            display: flex;
            align-items: center;
        }

        .btn-login, .btn-register {
            background: blue; /* Change the background color to blue */
            color: white; /* Change the text color to white */
            text-decoration: none;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-register {
            background: white; /* Change the background color of the "Register" button to white */
            color: black; /* Change the text color of the "Register" button to black */
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <a class="navbar-brand" href="index.php">Travelanza</a>
            <button class="navbar-toggler" id="navbar-toggler" onclick="toggleMobileMenu()">☰</button>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item" id="dropdown">
                    <a class="nav-link" href="javascript:void(0);">Bookings ▾</a>
                    <div class="dropdown-menu">
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
             <div class="ml-auto">
                <a class="btn-login" href="login.php">Login</a>
                <a class="btn-register" data-toggle="modal" data-target="#registrationModal" href="#">Register</a>
            </div>
        </div>
    </header>

    <!-- Rest of your content goes here -->

    <script>
        function toggleMobileMenu() {
            const navbarNav = document.getElementById('navbar-nav');
            navbarNav.style.display = (navbarNav.style.display === 'block') ? 'none' : 'block';
        }
    </script>
	
	
</body>
</html>
