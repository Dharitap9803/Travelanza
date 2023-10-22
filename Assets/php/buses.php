<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Responsive Meta Tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Adding Bootstrap CDN - Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Adding Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Adding CSS -->
        <link rel="stylesheet" type="text/css" href="buses.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>TravelanzaBus</title>
		<style>
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
		
		
		
		.section__container{
    max-width:var(--max-width);
    margin:auto;
    padding:5rem 1rem;
}
.booking__container{
    border-radius: 2rem;
    border: 1px solid var(--extra-light);
    box-shadow: 5px 5px 30px rgba(0,0,0,0.1);
}
.booking__nav{
    max-width: 600px;
    margin: auto;
    display: flex;
    align-items:center;
    background-color: var(--extra-light);
    border-radius:5px;
}

.booking__nav span{
    flex:1;
    padding:1rem 2rem;
    font-weight:500;
    color:var(--text-light);
    text-align:center;
    border-radius:5px;
    cursor:pointer;
}

.booking__nav span:nth-child(2){
    color:var(--white);
    background-color:var(--primary-color);
}

.booking__container form{
    margin-top:4rem;
    display:grid;
    grid-template-columns:repeat(4,1fr)auto;
    gap:1rem;
}

.booking__container  .input__content{
    width:100%
}

.booking__container  .form__group{
    display:flex;
    align-items:center;
    gap:1rem;
}

.booking__container  .form__group span{
    padding:10px;
    font-size:1.5rem;
    color:var(--text-dark);
    background-color: var(--extra-light);
    border-radius:1rem;
}

.booking__container  .input__group{
    width:100%;
    position:relative;
	
}

.booking__container label{
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


.booking__container input{
    width:100%;
    padding:10px 0;
    font-size: 1rem;
    outline:none;
    border:none;
    border-bottom:1px solid var(--primary-color);
    color:var(--text-dark);
}

.booking__container  input:focus  ~ label{
    font-size:0.8rem;
    top:0;
}

.booking__container  .form__group  p{
    margin-top:0.5rem;
    font-size:0.8rem;
    color:var(--textlight);
}

.booking__container  .btn{
    padding:1rem;
    font-size:1.5rem;
}
.btn{
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


.btnbook{
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
	height: 150px;
}

.btn:hover{
    background-color:var(--primary-color-dark);
}
.form__group span {
      padding: 10px;
      font-size: 1.5rem;
      color: var(--text-dark);
      background-color: var(--extra-light);
      border-radius: 1rem;
      display: flex;
      align-items: center;
    }

    .form__group label {
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

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Travelanza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
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
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                </ul>
                <div class="ml-auto">
                    <a class="btn btn-primary btn-login" href="login.php">Login</a>
                    <a class="btn btn-secondary btn-register" data-toggle="modal" data-target="#registrationModal" href="#">Register</a>
                </div>
            </div>
        </div>
    </nav>
       
        <div class="position-relative">
            <div>
                <div class="home-banner"></div>
            </div>
    
            
        </div>
    
        
        <div class="position-relative">
            <div class="holiday-coupon-container bg-white p-2 shadow">
                <div class="float-left mr-4 ml-4">
                    <img src="https://i.postimg.cc/XYxVCYGb/holiday.png" alt="holiday_coupon">
                </div>
    
                <div class="d-table-cell align-middle pl-2">
                    <div class="lead font-weight-bold">SAVE UPTO RS 375 ON BUS TICKETS</div>
                    <div class="text-muted">Use code FIRST on App</div>
                </div>
            </div>
        </div>
    
        <!-- Cashback Container -->
        <div class="cashback-container d-flex justify-content-center bg-light mb-5 pb-5 pt-5">
            <div class="text-center bg-white shadow m-3 p-2 pl-5 pr-5 mt-5">
                <div class="text-muted font-weight-bold small">Travel on RTC and Save up to Rs 175</div>
                <div><img src="https://i.postimg.cc/kG8J6N81/bus.png" alt="bus"></div>
                <div class="text-muted small">Pay using Amazon Pay</div>
                <div class="font-weight-normal">Use code : AABBC</div>
            </div>
    
            <div class="text-center bg-white shadow m-3 p-2 pl-5 pr-5 mt-5">
                <div class="text-muted font-weight-bold small">Cashback up to Rs 275 on bus tickets.</div>
                <div><img src="https://i.postimg.cc/kg7JGb5s/holiday-cashback.png" alt="bus"></div>
                <div class="text-muted small">Limited Period Offer</div>
                <div class="font-weight-normal">Use code : CCDDEE</div>
            </div>
    
            <div class="text-center bg-white shadow m-3 p-2 pl-5 pr-5 mt-5">
                <div class="text-muted font-weight-bold small">Cashback up to Rs 275 on bus tickets.</div>
                <div><img src="https://i.postimg.cc/d1htvc0K/amazon.png" alt="bus"></div>
                <div class="text-muted small">Pay using Amazon Pay</div>
                <div class="font-weight-normal">Limited Period Offer</div>
            </div>
        </div>



<section class="section__container  booking__container" style="font-family: Arial, sans-serif; text-align: center; padding: 20px; background-color: #f2f2f2;">
        <div class="booking__nav" style="margin-bottom: 20px;">
            <span style="padding: 10px; background-color: #4CAF50; color: white; margin-right: 10px;">Economy Class</span>
          <!--  <span style="padding: 10px; background-color: #f57c00; color: white; margin-right: 10px;">Business class</span>
            <span style="padding: 10px; background-color: #f44336; color: white; margin-right: 10px;">First Class</span>-->
        </div>
        <form action="busbook.php">
            <div class="form__group" style="margin-bottom: 20px;">
                <span><i data-feather="map-pin" style="color: #4CAF50;"></i></span>
                <div class="input__content">
                    <div class="input__group" style="margin-bottom: 10px;">
                        <input type="text" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Destination-name</p>
                </div>
            </div>
            <div class="form__group" style="margin-bottom: 20px;">
                <span><i data-feather="user" style="color: #f57c00;"></i></span>
                <div class="input__content">
                    <div class="input__group" style="margin-bottom: 10px;">
                        <input type="number" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Number of passengers</p>
                </div>
            </div>
            <div class="form__group" style="margin-bottom: 20px;">
                <span><i data-feather="calendar" style="color: #f44336;"></i></span>
                <div class="input__content">
                    <div class="input__group" style="margin-bottom: 10px;">
                        <input type="date" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Departure date</p>
                </div>
            </div>
            <div class="form__group" style="margin-bottom: 20px;">
                <span><i data-feather="calendar" style="color: #f44336;"></i></span>
                <div class="input__content">
                    <div class="input__group" style="margin-bottom: 10px;">
                        <input type="date" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Return date</p>
                </div>
            </div>
            <button type="submit" class="btnbook" style="padding: 10px 20px; border: none; background-color: #4CAF50; color: white; border-radius: 5px;"><i data-feather="search" style="margin-right: 5px;"></i>Search</button>
        </form>
    </section>
	
	  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>


        <section class="section__container  booking__container">
           
                   <form>
                    <div class="form__group">
                    <img class="bus_cont"  src="banglorebus.jpg" alt="Paris" width="100" height="100">
                    <p><b>Buses From Banglore To</b><br>Chennai,Hyderabad,Coimbatore,Mumbai,Goa</p>
                    <br>
                    
                    <img class="bus_cont"  src="punebus.jpg" alt="Paris" width="100" height="100">
                    <p><b>Buses From Pune To</b><br>Goa,Banglore,Nagpur,Hyderabad,Mumbai</p>
                    <br>
                 
                    <img class="bus_cont"  src="ahmedabadbus.jpg" alt="Paris" width="100" height="100">
                    <p><b>Buses From Ahmedabad To</b><br>Rajkot,Surat,Pune,Indore,Mumbai</p>
                    <br>
                   
                    </div>
                    <div class="form__group">
                    <img class="bus_cont"  src="chennaibus.jpg" alt="Paris" width="100" height="100">
                    <p><b>Buses From Chennai To</b><br>Banglore,Coimbatore,Madurai,Hyderabad,Trichy</p> 
                    <br>
                   
                    <img class="bus_cont"  src="delhibus.jpg" alt="Paris" width="100" height="100">
                    <p><b>Buses From Delhi To</b><br>Lucknow,Dehradun,manali,Kanpur,Jaipur</p> 
                    <br>
                   
                    <img class="bus_cont"  src="coimbatorebus.jpg" alt="Paris" width="100" height="100">
                    <p><b>Buses From Coimbatore To</b><br>Chennai,banglore,Madurai,Pondicherry,Nagercoil</p>
                    <br>
                
                    </div>
                    <div class="form__group">
                    <img class="bus_cont"  src="hyderabadbus.jpg" alt="Paris" width="100" height="100">
                    <p><b>Buses From Hyderabad To</b><br>Banglore,Chennai,Mumbai,Pune,Vijayawada</p>
                     <br>
                   
                    <img class="bus_cont"  src="mumbaibus.jpg" alt="Paris" width="100" height="100">
                    <p><b>Buses From Mumbai To</b><br>banglore,goa,pune,Indore,Ahmedabad</p>
                     <br>
               
                    <img class="bus_cont"  src="kolkatabus.jpg" alt="Paris" width="100" height="100">
                    <p><b>Buses From Kolkata To</b><br>Durgapur,Asansol,Siliguri,Bhubaneshwar,Bardhaman.</p>
                    <br>
                    </div>

                    <div class="form__group">
                    <img class="bus_cont"  src="maglorebus.jpg" alt="Paris" width="100" height="100">
                    <p><b>Buses From Manglore To</b><br>Durgapur,Asansol,Siliguri,Bhubaneshwar,Bardhaman.</p>
                    <br>

                    <img class="bus_cont"  src="jaipurbus.jpg" alt="Paris" width="100" height="100">
                    <p><b>Buses From Jaipur To</b><br>Durgapur,Asansol,Siliguri,Bhubaneshwar,Bardhaman.</p>
                    <br>

                    <img class="bus_cont"  src="panjimbus.jpg" alt="Paris" width="100" height="100">
                    <p><b>Buses From Panjim To</b><br>Durgapur,Asansol,Siliguri,Bhubaneshwar,Bardhaman.</p>
                    <br>
                    </div>
            </form>
        </section>
      <br>
      <br>
      <br>
      <br>
       <p><b>PRODUCT OFFERING</b>
    <br>
    Flights,International Flights,Charter Flightes,Hotels,International Hotels,resorts and Villas,Activities,Holidays in India,International Holidays,Book hotels from Uae,myBiz for Corporate travel ,Book Online Cabs,Book Bus Tickets ,Book train Tickets ,Cheap Tickets to india ,Book Flighta from US,Book Flights from UAE,Trip PlannerGift cards,Trip Money,Trip Ideas,Travel Blog,PNR Status,One way Cab</p>
    <br>
    <br>
    <p><b>MAKEMYTRIP</b><br>About Us,Investor Relations,Careers,MMT Foundation,CSR Policy,myPartner-Travel Agent Portal,Foreign exchange,List your hotel ,Partners-Travelanza,Parteners-Goibib</p>
    <br>
    <br>
    <p><b>About the site</b><br>Customer Support,Payment Security ,Privacy policy,User Agreement,Terms of services,More Officers,make a payment,Work from Home. </p>
    <br>
    <br>
    <p><b>Imprtant Links</b><br>Buses From Banglore To Chennai,Buses From Banglore To Hyderabad,Buses From Banglore To Coimbatore,Buses From Banglore To Mumbai,Buses From Banglore To Goa,Buses From Pune To Goa,Buses From Pune To Banglore,Buses From Pune To Nagpur,Buses From Pune To Hyderabad,Buses From Pune To Mumbai,Buses From Ahmedabad To Rajkot,Buses From Ahmedabad To Surat,Buses From Ahmedabad To Pune,Buses From Ahmedabad To Indore,Buses From Ahmedabad To Mumbai,Buses From Chennai To Banglore,Buses From Chennai To Coimbatore,Buses From Chennai To Madurai,Buses From Chennai To Hyderabad,Buses From Chennai To Trichy,Buses From Delhi To Lucknow,Buses From Delhi To Dehradun,Buses From Delhi To manali,Buses From Delhi To Kanpur,Buses From Delhi To Jaipur,Buses From Coimbatore To Chennai,Buses From Coimbatore To banglore,Buses From Coimbatore To Madurai,Buses From Coimbatore To Pondicherry,Buses From Coimbatore To Nagercoil,Buses From Hyderabad To Banglore,Buses From Hyderabad To Chennai,Buses From Hyderabad To Mumbai,Buses From Hyderabad To Pune,Buses From Hyderabad To Vijayawada,Buses From Mumbai To banglore,Buses From Mumbai To goa,Buses From Mumbai To pune,Buses From Mumbai To Indore,Buses From Mumbai To Ahmedabad,Buses From Kolkata To Durgapur,Buses From Kolkata To Asansol,Buses From Kolkata To Siliguri,Buses From Kolkata To Bhubaneshwar,Buses From Kolkata To Bardhaman</p>
    <br>
    <br>
    <p><b>Quick Links</b><br>SBSTC,TSRTC,ASTC,Hans Travels ,UPSRTC,SRM Travels,MJT Travels,MSRTC,Parveen Travels,Kaveri Travels,OSRTC,GSRTC,Neeta Travels,KPN Travels,VRL Travels,Green line Travels,Tnstc ,HRTC,APSRTC,TSRTC.</p>

    
        <div class="on-time-guarantee d-flex mt-5 mb-5 p-4 border">
            <div class="pr-4">
                <img src="https://i.postimg.cc/xTDTr7DW/hero-ontime.png" alt="hero_ontime" width="80px">
            </div>
    
          <div>
                <div>
                    <h2>Introducing On-Time Guarantee</h2>
                    <h4 class="text-muted font-weight-normal">Leave on time, everytime</h4>
                </div>
    
                <div class="d-flex pt-4 pb-4">
                    <p class="font-weight-light mr-3"><span><img src="https://i.postimg.cc/Z5Ym4zfD/tip-icon.png" height="23"></span> Look for buses with</p>
                    <p class="mr-3"><img src="https://i.postimg.cc/fyxsTzn1/otgText.png"></p>
                    <p class="font-weight-light mr-3">tag while booking your journey</p>
                </div>
    
                <div class="d-flex">
                    <div>
                        <h5 class="text-primary">Bus on time</h5>
                        <div class="font-weight-bold">Get 25% refund</div>
                        <div class="text-muted">If bus departure is delayed by 30 mins from boarding point.</div>
                    </div>
    
                    <div>
                        <h5 class="text-primary">No bus cancellation</h5>
                        <div class="font-weight-bold">Get 150% refund</div>
                        <div class="text-muted">Bus is cancelled without an alternate arrangement.</div>
                    </div>
    
                    <div>
                        <h5 class="text-primary">Alternate assurance</h5>
                        <div class="font-weight-bold">Get 300% refund</div>
                        <div class="text-muted">Bus breaks down with no alternate arrangement within 6 hours.</div>
                    </div>
                </div>
            </div>
        </div>

         <!-- Track My Bus - Smarter Way To Travel Container -->
        <div class="track-my-bus bg-light p-4 mb-5 pb-5">
            <div class="mb-5">
                <div class="float-left mr-5 ml-5">
                    <img src="https://i.postimg.cc/mkGxnvzj/tmb-img.png" alt="tmb_img">
                </div>
    
                <div class="d-table-cell align-middle pl-5 pr-5">
                    <h3>TRACK MY BUS - Smarter Way To Travel</h3>
                    <p class="text-muted">Track your bus with our Track My Bus feature and know the exact location in real-time.Stay informed and keep your family informed!</p>
                    <button class="btn btn-light btn-outline-danger">Know More</button>
                </div>
            </div>
    
            <hr class="w-75 border">
    
            <div class="d-flex justify-content-around p-5">
                <div class="text-center">
                    <div class="lead text-muted font-weight-normal">BUSES</div>
                    <h1 class="text-danger">10,000</h1>
                    <div class="text-muted">Total buses currently being tracked</div>
                </div>
    
                <div class="text-center">
                    <div class="lead text-muted font-weight-normal">ROUTES</div>
                    <h1 class="text-danger">60,000</h1>
                    <div class="text-muted">Total routes covered by live tracking</div>
                </div>
    
                <div class="text-center">
                    <div class="lead text-muted font-weight-normal">USERS</div>
                    <h1 class="text-danger">40,000</h1>
                    <div class="text-muted">Total users using Track My Bus feature</div>
                </div>
            </div>
        </div>
    

        <div class="ios-android-container position-relative mb-5">
            <div>		<!-- Background Image Container -->
                <div class="d-flex justify-content-around">
                    <div class="pt-4">
                        <h3>CONVENIENCE ON-THE-GO.</h3>
                        <div class="w-75">
                            <p class="text-dark small">Exclusive features on mobile include</p>
                            <p class="text-dark small">Travelanza NOW - when you need a bus in the next couple of hours. Board a bus on its way.</p>
                            <p class="text-dark small">Boarding Point Navigation - Never lose your way while travelling to your boarding point!</p>
                            <p class="text-dark small">1-click Booking - Save your favourite payment options securely on redBus, and more.</p>
                            <p class="text-dark small">Download the app.</p>
                            <p class="text-dark small">Enter your mobile number below to download the redBus mobile app.</p>
                            <!-- SMS me the link -->
                            <form class="form-inline">
                                <select class="form-control form-control-sm mr-2 mb-2">
                                    <option>+91</option>
                                </select>
                                <input class="form-control form-control-sm mr-2 mb-2 w-50" type="text" placeholder="Enter your mobile number">
                                <button class="btn btn-outline-danger btn-sm mb-2" type="submit">SMS ME THE LINK</button>
                            </form>
                            <!-- Download redBus Application -->
                            <button class="btn btn-dark rounded-circle mr-2"><i class="fab fa-apple"></i></button>
                            <button class="btn btn-dark rounded-circle"><i class="fab fa-google-play"></i></button>
                        </div>
                    </div>
    
                    <div>
                        <img src="https://i.postimg.cc/TP4ftNJN/IOS-Android-device.png" alt="IOS_Android_device" width="420">
                    </div>
                </div>
            </div>
        </div>
    
        <!-- We Promise To Deliver Container -->
        <div class="we-promise-container bg-light p-3 pb-5">
            <div class="text-center m-4">
                <img src="https://i.postimg.cc/QN5hqb9S/promise.png" alt="promise" width="85">
                <h2 class="text-dark m-2">WE PROMISE TO DELIVER</h2>
            </div>
    
            <div class="text-center d-flex">
                <div class="border bg-white w-25">
                    <div class="p-4"><img src="https://i.postimg.cc/wMKHptPh/maximum-choices.png" alt="maximum_choices" width="120"></div>
                    <div class="mb-5 m-4 font-weight-light lead">MAXIMUM CHOICE</div>
                    <div class="m-4 p-1 text-muted">We give you the widest number of travel options across thousands of routes.</div>
                </div>
    
                <div class="border bg-white w-25">
                    <div class="p-4"><img src="https://i.postimg.cc/Y2mqs7V6/customer-care.png" alt="customer_care" width="91"></div>
                    <div class="mb-5 mt-4 font-weight-light lead">SUPERIOR CUSTOMER SERVICE</div>
                    <div class="m-4 p-1 text-muted">We put our experience and relationships to good use and are available to solve your travel issues.</div>
                </div>
    
                <div class="border bg-white w-25">
                    <div class="p-4"><img src="https://i.postimg.cc/JnHmv3Tr/lowest-Fare.png" alt="lowest_Fare" width="120"></div>
                    <div class="mb-5 mt-4 font-weight-light lead">LOWEST PRICES</div>
                    <div class="m-4 p-1 text-muted">We always give you the lowest price with the best partner offers.</div>
                </div>
    
                <div class="border bg-white w-25">
                    <div class="p-4"><img src="https://i.postimg.cc/k4LMgYVR/benefits.png" alt="benefits" width="120"></div>
                    <div class="mb-5 mt-4 font-weight-light lead">UNMATCHED BENEFITS</div>
                    <div class="m-4 p-1 text-muted">We take care of your travel beyond ticketing by providing you with innovative and unique benefits.</div>
                </div>
            </div>
        </div>

        <div>

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
    
        <!-- Adding Bootstrap CDN - jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Adding Bootstrap CDN - Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Adding Bootstrap CDN - Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Adding JavaScript -->
        <script type="text/javascript" src="js/app.js">
            $(".inputForm").focusin(function(){
                $(this).prev("label").addClass("inputLabel-focusIn");
            });
            
            // Input Search From Focus-Out */
            $(".inputForm").focusout(function(){
                var inputForm = $(this).val();
            
                if (inputForm.length > 0) {
                    $(this).prev("label").addClass("inputLabel-focusIn");
                } else {
                    $(this).prev("label").removeClass("inputLabel-focusIn");
                }
            });
            
            /* Input Onward/Reture Date Focus-In/Out */
            $("#input-label-onward-date, #input-label-return-date").focusin(function(){
                $(this).attr("type", "date");
            });
            
            // Input Onward/Reture Date Focus-Out */
            $("#input-label-onward-date, #input-label-return-date").focusout(function(){
                var inputFormDate = $(this).val();
            
                if (inputFormDate.length > 0) {
                    $(this).attr("type", "date");
                } else {
                    $(this).attr("type", "text");
                }
            });
            
            /* Pass Input-From's Locations to Input field */
            // From Locations Data
            var inputFromList = [
                { fromLocation : "Gurgaon"},
                { fromLocation : "Delhi"},
                { fromLocation : "Jaipur"},
            ];
            
            var optionFrom;
            var inputFromDatalist = $("#input-from-list");
            
            for (var i = 0; i < inputFromList.length; i++) {
                optionFrom = $("<option></option>");
                optionFrom.attr("value", inputFromList[i].fromLocation);
                inputFromDatalist.append(optionFrom);
            }
            
            /* Pass Input-To's Locations to Input field */
            // To Locations Data
            var inputToList = [
                { toLocation : "Gurgaon"},
                { toLocation : "Delhi"},
                { toLocation : "Jaipur"}
            ];
            
            var optionTo;
            var inputToDatalist = $("#input-to-list");
            
            for (var i = 0; i < inputToList.length; i++) {
                optionTo = $("<option></option>");
                optionTo.attr("value", inputToList[i].toLocation);
                inputToDatalist.append(optionTo);
            }
            
            // Data Filter
            $("#input-label-from").change(function(){
                var dataSelect = $(this).val();
                console.log(dataSelect);
            
                $("#input-to-list").find("option[value='"+dataSelect+"']").remove();
            });
        </script>
		
		 <script>
        function toggleMobileMenu() {
            const navbarNav = document.getElementById('navbar-nav');
            navbarNav.style.display = (navbarNav.style.display === 'block') ? 'none' : 'block';
        }
    </script>
    </body>
    </html>
    