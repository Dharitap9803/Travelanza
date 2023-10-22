<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cab Booking</title>

    <!-- Fontawesome link -->
    <script src="https://kit.fontawesome.com/c1df782baf.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- CSS Links -->
    <link rel="stylesheet" href="cabs.css">
    <style>
        /* Updated CSS code here */
        .main-home {
            margin: 0;
            padding: 0;
        }

        .nav-container {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: var(--blackcolor); /* Change the background color */
            color: white;
            padding: 10px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .navbar-brand-custom {
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .navbar-toggler-custom {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: white;
        }

        .navbar-nav-custom {
            list-style: none;
            display: flex;
            background-color: var(--blackcolor); /* Change the background color */
        }

        .nav-item-custom {
            margin: 0 15px;
            position: relative;
        }

        .nav-link-custom {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .dropdown-menu-custom {
            display: none;
            position: absolute;
            background-color: var(--blackcolor); /* Change the background color */
            top: 100%;
            left: 0;
            min-width: 150px;
            text-align: left;
        }

        .dropdown-item-custom {
            padding: 10px;
            display: block;
            text-decoration: none;
            color: white;
        }

        .nav-item-custom:hover .dropdown-menu-custom {
            display: block;
        }

        @media (max-width: 768px) {
            .navbar-toggler-custom {
                display: block;
            }

            .navbar-nav-custom {
                display: none;
                flex-direction: column;
                background-color: var(--blackcolor); /* Change the background color */
                position: absolute;
                top: 50px;
                left: 0;
                width: 100%;
            }

            .nav-item-custom {
                margin: 10px 0;
            }

            .navbar-toggler-custom.active+.navbar-nav-custom {
                display: flex;
            }

            .nav-item-custom:hover .dropdown-menu-custom {
                display: none;
            }
        }

        .ml-auto-custom {
            display: flex;
            align-items: center;
        }

        .btn-login-custom,
        .btn-register-custom {
            background: blue;
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-register-custom {
            background: white;
            color: black;
            margin-left: 10px;
        }
		
		
		
		
		.section__container1{
    max-width:var(--max-width);
    margin:auto;
    padding:5rem 1rem;
}
.booking__container1{
    border-radius: 2rem;
    border: 1px solid var(--extra-light);
    box-shadow: 5px 5px 30px rgba(0,0,0,0.1);
}
.booking__nav1{
    max-width: 600px;
    margin: auto;
    display: flex;
    align-items:center;
    background-color: var(--extra-light);
    border-radius:5px;
}

.booking__nav1 span{
    flex:1;
    padding:1rem 2rem;
    font-weight:500;
    color:var(--text-light);
    text-align:center;
    border-radius:5px;
    cursor:pointer;
}

.booking__nav1 span:nth-child(2){
    color:var(--white);
    background-color:var(--primary-color);
}

.booking__container1 form{
    margin-top:4rem;
    display:grid;
    grid-template-columns:repeat(4,1fr)auto;
    gap:1rem;
}

.booking__container1  .input__content1{
    width:100%
}

.booking__container1  .form__group1{
    display:flex;
    align-items:center;
    gap:1rem;
}

.booking__container1  .form__group1 span{
    padding:10px;
    font-size:1.5rem;
    color:var(--text-dark);
    background-color: var(--extra-light);
    border-radius:1rem;
}

.booking__container1  .input__group1{
    width:100%;
    position:relative;
	
}

.booking__container1 label{
    position:absolute;
    top:50%;
    left:0;
    transform:translateY(-50%);
    font-size:1.2rem;
    font-weight:500;
    color:var(--text-dark);
    pointer-events:none;
    transition:0.3s;
}


.booking__container1 input{
    width:100%;
    padding:10px 0;
    font-size: 1rem;
    outline:none;
    border:none;
    border-bottom:1px solid var(--primary-color);
    color:var(--text-dark);
}

.booking__container1  input:focus  ~ label{
    font-size:0.8rem;
    top:0;
}

.booking__container1  .form__group1  p{
    margin-top:0.5rem;
    font-size:0.8rem;
    color:var(--textlight);
}

.booking__container1  .btn1{
    padding:1rem;
    font-size:1.5rem;
}
.btn1{
    padding: .75rem 2rem;
    outline:none;
    border:none;
    font-size:1rem;
    font-weight:500;
    color:var(--white);
    background-color:var(--primary-color);
    border-radius:2rem;
    cursor: pointer;
    transition:0.3s;

}

.btn1:hover{
    background-color:var(--primary-color-dark);
}
.form__group1 span {
      padding: 10px;
      font-size: 1.5rem;
      color: var(--text-dark);
      background-color: var(--extra-light);
      border-radius: 1rem;
      display: flex;
      align-items: center;
    }

    .form__group1 label {
      position: absolute;
      top: 50%;
      left: 2.5rem; /* Adjusted left position for label */
      transform: translateY(-50%);
      font-size: 1.2rem;
      font-weight: 500;
      color: var(--text-dark);
      pointer-events: none;
      transition: 0.3s;
    }

    </style>
</head>
   <body>

<section>
    <div class="nav-container">
        <a class="navbar-brand-custom" href="index.php">Travelanza</a>
        <button class="navbar-toggler-custom" id="navbar-toggler" onclick="toggleMobileMenu()">☰</button>
        <ul class="navbar-nav-custom" id="navbar-nav">
            <li class="nav-item-custom"><a class="nav-link-custom" href="index.php">Home</a></li>
            <li class="nav-item-custom" id="dropdown">
                <a class="nav-link-custom" href="javascript:void(0);">Bookings ▾</a>
                <div class="dropdown-menu-custom">
                    <a class="dropdown-item-custom" href="flights.php">Flights</a>
                    <a class="dropdown-item-custom" href="hotels.php">Hotels</a>
                    <a class="dropdown-item-custom" href="trainsindex.php">Trains</a>
                    <a class="dropdown-item-custom" href="buses.php">Buses</a>
                    <a class="dropdown-item-custom" href="cabs.php">Cabs</a>
                    <a class="dropdown-item-custom" href="attractions.php">Attractions</a>
                </div>
            </li>
            <li class="nav-item-custom"><a class="nav-link-custom" href="contact.php">Contact</a></li>
            <li class="nav-item-custom"><a class="nav-link-custom" href="about.php">About Us</a></li>
        </ul>
        <div class="ml-auto-custom">
            <a class="btn-login-custom" href="login.php">Login</a>
            <a class="btn-register-custom" data-toggle="modal" data-target="#registrationModal" href="#">Register</a>
        </div>
    </div>
</section>

<!-- Home section starting -->

    <div class="main-home">
        <div class="home-inner-contect">

            <div class="home-content">

                <h3>Hire your best driver</h3>

                <h1>Trusted and <span>Cheapest Taxi</span> <br>
                company service
                </h1>

                <div class="important-btn">
                    <a href="#">Order Taxi</a>
                </div>

            </div>

        </div>
    </div>

    <!-- home section ended -->
<br>
<br>
<br>

 <section class="section__container1  booking__container1" style="font-family: Arial, sans-serif; text-align: center; padding: 20px; background-color: #f2f2f2;">
        <div class="booking__nav1" style="margin-bottom: 20px;">
            <span style="padding: 10px; background-color: #4CAF50; color: white; margin-right: 10px;">Economy Cabs</span>
            <span style="padding: 10px; background-color: #f57c00; color: white; margin-right: 10px;">Premium Cabs</span>
            <span style="padding: 10px; background-color: #f44336; color: white; margin-right: 10px;">Mini-Van Cabs</span>
        </div>
        <form action="cabbook.php">
            <div class="form__group1" style="margin-bottom: 20px;">
                <span><i data-feather="map-pin" style="color: #4CAF50;"></i></span>
                <div class="input__content1">
                    <div class="input__group" style="margin-bottom: 10px;">
                        <input type="text" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Drop-Off Location</p>
                </div>
            </div>
            <div class="form__group1" style="margin-bottom: 20px;">
                <span><i data-feather="user" style="color: #f57c00;"></i></span>
                <div class="input__content1">
                    <div class="input__group1" style="margin-bottom: 10px;">
                        <input type="number" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Number of Passengers</p>
                </div>
            </div>
            <div class="form__group1" style="margin-bottom: 20px;">
                <span><i data-feather="calendar" style="color: #f44336;"></i></span>
                <div class="input__content1">
                    <div class="input__group1" style="margin-bottom: 10px;">
                        <input type="date" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Pickup date</p>
                </div>
            </div>
            <div class="form__group1" style="margin-bottom: 20px;">
                <span><i data-feather="calendar" style="color: #f44336;"></i></span>
                <div class="input__content1">
                    <div class="input__group1" style="margin-bottom: 10px;">
                        <input type="date" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Dropping date</p>
                </div>
            </div>
            <button type="submit" class="btn1" style="padding: 10px 20px; border: none; background-color: #4CAF50; color: white; border-radius: 5px;"><i data-feather="search" style="margin-right: 5px;"></i>Search</button>
        </form>
    </section>
	
	  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>



    <!-- Our business partner -->

    <div id="About" class="about-us">

        <div class="main-about">
            <div class="inner-about"><img src="driver3.jpg" alt=""></div>
            <div class="inner-about">
                <div class="about-content">
                    <h3>About our company</h3>
                    <h1>WE'RE PARTNER OF YOUR BUSINESS</h1>

                    <div class="paragraph">
                        <p>Interactively maintain holistic best practices and user fully researched commerce installed base interna</p>
                        <h4>Vaishrinath Ravi<span>Head idea</span></h4>
                    </div>

                    <div class="contact-with-us">
                        <div  class="fa-solid fa-phone phone"> </div>
                        <div class="contact-inner-content">
                            <h4>Call us 24/7 <span>anytime</span></h4>
                            <h4>+917878941715</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <!-- our services -->


    <div class="our-service">
        <div class="service-heading">
            <h3>Our services</h3>
            <h1>what we are offering</h1>
        </div>

        <div class="main-inner-service">
            <div class="inner-service-content">
                <div class="service-img">
                    <img src="service1.jpg" alt="">
                </div>
                <div class="service-out">
                    <div class="service-main-content">
                        <div class="service-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="service-content-inside">
                            <h2 class="service-title">Our Business</h2>
                            <p class="service-text">dolor sit amet, adipisicing elit. Iure sed, odit autem dolor esse nobis</p>
                            <a class="service-btn" href="">Contact us</a>
                        </div>
                    </div>
                </div>  

            </div>

            
            <div class="inner-service-content">
                <div class="service-img">
                    <img src="service4.jpg" alt="">
                </div>
                <div class="service-out">
                    <div class="service-main-content">
                        <div class="service-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="service-content-inside">
                            <h2 class="service-title">Our Business</h2>
                            <p class="service-text">dolor sit amet, adipisicing elit. Iure sed, odit autem dolor esse nobis</p>
                            <a class="service-btn" href="">Contact us</a>
                        </div>
                    </div>
                </div>  

            </div>


            <div class="inner-service-content">
                <div class="service-img">
                    <img src="service3.jpg" alt="">
                </div>
                <div class="service-out">
                    <div class="service-main-content">
                        <div class="service-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="service-content-inside">
                            <h2 class="service-title">Our Business</h2>
                            <p class="service-text">dolor sit amet, adipisicing elit. Iure sed, odit autem dolor esse nobis</p>
                            <a class="service-btn" href="">Contact us</a>
                        </div>
                    </div>
                </div>  

            </div>

            <div class="inner-service-content">
                <div class="service-img">
                    <img src="service4.jpg" alt="">
                </div>
                <div class="service-out">
                    <div class="service-main-content">
                        <div class="service-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="service-content-inside">
                            <h2 class="service-title">Our Business</h2>
                            <p class="service-text">dolor sit amet, adipisicing elit. Iure sed, odit autem dolor esse nobis</p>
                            <a class="service-btn" href="">Contact us</a>
                        </div>
                    </div>
                </div>  

            </div>

            <div class="inner-service-content">
                <div class="service-img">
                    <img src="service3.jpg" alt="">
                </div>
                <div class="service-out">
                    <div class="service-main-content">
                        <div class="service-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="service-content-inside">
                            <h2 class="service-title">Our Business</h2>
                            <p class="service-text">dolor sit amet, adipisicing elit. Iure sed, odit autem dolor esse nobis</p>
                            <a class="service-btn" href="">Contact us</a>
                        </div>
                    </div>
                </div>  

            </div>

            <div class="inner-service-content">
                <div class="service-img">
                    <img src="driver6.jpg" alt="">
                </div>
                <div class="service-out">
                    <div class="service-main-content">
                        <div class="service-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="service-content-inside">
                            <h2 class="service-title">Our Business</h2>
                            <p class="service-text">dolor sit amet, adipisicing elit. Iure sed, odit autem dolor esse nobis</p>
                            <a class="service-btn" href="">Contact us</a>
                        </div>
                    </div>
                </div>  

            </div>
            
        </div>

    </div>


        <!-- comfortable Trip -->

        <div class="main-trip">
            
            <div class="main-trip-heading">
                <h1>comfortable <span>Trip</span></h1>
            </div>

            <div class="main-trip-box">

                <div class="main-trip-inner-box">
                        <img src="driver4.jpg" alt="">

                    <div class="trip-content">
                        <i class="fa-solid fa-car"></i>
                        <h2>comfortable Ride</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id vel saepe dolorem numquam consequatur quos pariatur, voluptatem dignissimos. Quaerat in corrupti</p>
                    </div>

                </div>

                <div class="main-trip-inner-box">
                 
                        <img src="driver2.jpg" alt="">
                  

                    <div class="trip-content">
                        <i class="fa-solid fa-car"></i>
                        <h2>comfortable Ride</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id vel saepe dolorem numquam consequatur quos pariatur, voluptatem dignissimos. Quaerat in corrupti</p>
                    </div>

                </div>

                <div class="main-trip-inner-box">
                   
                        <img src="driver3.jpg" alt="">
                   

                    <div class="trip-content">
                        <i class="fa-solid fa-car"></i>
                        <h2>comfortable Ride</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id vel saepe dolorem numquam consequatur quos pariatur, voluptatem dignissimos. Quaerat in corrupti</p>
                    </div>

                </div>

                <div class="main-trip-inner-box">
                   
                    <img src="driver3.jpg" alt="">
               

                <div class="trip-content">
                    <i class="fa-solid fa-car"></i>
                    <h2>comfortable Ride</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id vel saepe dolorem numquam consequatur quos pariatur, voluptatem dignissimos. Quaerat in corrupti</p>
                </div>

            </div>

            <div class="main-trip-inner-box">
                   
                <img src="driver6.jpg" alt="">
           

            <div class="trip-content">
                <i class="fa-solid fa-car"></i>
                <h2>comfortable Ride</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id vel saepe dolorem numquam consequatur quos pariatur, voluptatem dignissimos. Quaerat in corrupti</p>
            </div>

        </div>

        <div class="main-trip-inner-box">
                   
            <img src="driver7.jpg" alt="">
       

        <div class="trip-content">
            <i class="fa-solid fa-car"></i>
            <h2>comfortable Ride</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id vel saepe dolorem numquam consequatur quos pariatur, voluptatem dignissimos. Quaerat in corrupti</p>
        </div>

    </div>
    </div>
    </div>

    <section class="order" id="order">

        <h1 class="heading"> <span>order</span> now </h1>
    
        <div class="row">
    
            <form action="" class="myform">
    
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
    
                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="Pax">
                </div>
    
                <textarea placeholder="address" name="" id="" cols="30" rows="10"></textarea>
    
                <input type="submit" value="order now" class="btn">
    
            </form>
    
            <div class="image footer-image">
                <img src="comfort.jpg" alt="">
            </div>
    
        </div>
    
    </section>
	<footer>
    <div style="background-color: black; color: white; padding: 20px; display: flex; flex-direction: column; align-items: flex-start; justify-content: space-between; min-height: 400px;">
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
            <p style="font-size: 0.9rem; color: #f5f5f5; margin: 0;">Copyright @ 2023 Web Design Mastery. All rights reserved.</p>
            <div style="display: flex; align-items: flex-end; gap: 10px;">
                <a href="#" style="text-decoration: none; color: white;"><i class="ri-facebook-fill"></i></a>
                <a href="#" style="text-decoration: none; color: white;"><i class="ri-twitter-fill"></i></a>
                <a href="#" style="text-decoration: none; color: white;"><i class="ri-instagram-line"></i></a>
                <a href="#" style="text-decoration: none; color: white;"><i class="ri-youtube-fill"></i></a>
            </div>
        </div>
    </div>
</footer>

    <script src="script.js">
        let menu = document.querySelector("#navbar");
let nav = document.querySelector(".menu");

let showcontactform = document.querySelector(".contact");
let myform = document.querySelector(".contact-form")

let formclose = document.querySelector("#form-close")




menu.onclick = () =>{
    menu.classList.toggle("fa-times")
    nav.classList.toggle("active")
}
showcontactform.onclick = () =>{
    myform.classList.toggle('active')
}
formclose.onclick = () =>{
    myform.classList.remove('active')
}

    </script>
</body>
</html>