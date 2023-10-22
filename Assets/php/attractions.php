<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
 <link rel="stylesheet" href="attractions.css" />
 <script src="script.js" defer></script>
<style>
.nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    color: #fff;
    padding: 10px;
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
}

.nav-item-custom {
    margin: 0 15px;
    position: relative;
}

.nav-link-custom {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

.dropdown-menu-custom {
    display: none;
    position: absolute;
    background-color: #333;
    top: 100%;
    left: 0;
    min-width: 150px;
    text-align: left;
}

.dropdown-item-custom {
    padding: 10px;
    display: block;
    text-decoration: none;
    color: #fff;
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
        background-color: #333;
        position: absolute;
        top: 50px;
        left: 0;
        width: 100%;
    }

    .nav-item-custom {
        margin: 10px 0;
    }

    .navbar-toggler-custom.active + .navbar-nav-custom {
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
 <body style="overflow-x:hidden;">
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

  <div class="header">

 </div>
 
 <br>
 <br>
 <br>
 
  <section class="section__container  booking__container" style="font-family: Arial, sans-serif; text-align: center; padding: 20px; background-color: #f2f2f2;">
     
        <form action="attract.php">
            <div class="form__group" style="margin-bottom: 20px;">
                <span><i data-feather="map-pin" style="color: #4CAF50;"></i></span>
                <div class="input__content">
                    <div class="input__group" style="margin-bottom: 10px;">
                        <input type="text" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Where are you Going?</p>
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
            <button type="submit" class="btn" style="padding: 10px 20px; border: none; background-color: #4CAF50; color: white; border-radius: 5px; width: 150px; height: 150px"><i data-feather="search" style="margin-right: 5px;"></i>Search</button>
        </form>
    </section>
	
	  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
 
 
 
 <div class="container">
 <h2 style="color:black">WARM DESTINATIONS</h2>
 <div class="slider-wrapper">
 <button id="prev-slide" class="slide-button material-symbols-rounded">
 chevron_left
 </button>
 <ul class="image-list">
 <img class="image-item" src="phuket.jpg" alt="img-1" />
 <img class="image-item" src="bali.jpg" alt="img-2" />
 <img class="image-item" src="riodejenerio.jpg" alt="img-3" />
 <img class="image-item" src="cancun.jpg" alt="img-4" />
 <img class="image-item" src="miami.jpg" alt="img-5" />
 <img class="image-item" src="siamreap.jpg" alt="img-6" />
 <img class="image-item" src="puntacana.jpg" alt="img-7" />
 <img class="image-item" src="aruba.jpg" alt="img-8" />
 <img class="image-item" src="matterhorn.jpg" alt="img-9" />
 <img class="image-item" src="mountkilimajaro.jpg" alt="img-10" />
 </ul>
 <button id="next-slide" class="slide-button material-symbols-rounded">
 chevron_right
 </button>
 </div>
 <div class="slider-scrollbar">
 <div class="scrollbar-track">
 <div class="scrollbar-thumb"></div>
 </div>
 </div>
 </div>

<br>
 <div class="cancellation_container">
 <h2><b>FREE CANCELLATIONS ON YOUR BOOKING IS AVAILABLE</b></h2>
 </div>
 
<br>

 <section class="section__container booking__container">
 <h2 style="color:black;">TOP ATTRACTIONS</h2>
 <form>
 <div class="form__group">
 <img class="bus_cont" src="rhinefalls.jpg" alt="Paris" width="250" height="200">
 <p><b>RHINE FALLS</b><br>78 Tours and Activities</p>
 <br>
 
 <img class="bus_cont" src="antelopecanyon.jpg" alt="Paris" width="250" height="200">
 <p><b>ANTELOPE CANYON</b><br>139 Tours and Activities</p>
 <br>
 
 <img class="bus_cont" src="niagarafalls.jpg" alt="Paris"width="250" height="200">
 <p><b>NIAGARA FALLS</b><br>56 Tours and Activities</p>
 <br>
 
 </div>
 <div class="form__group">
 <img class="bus_cont" src="veticanmuseum.jpg" alt="Paris" width="250" height="200">
 <p><b>VETICAN MUSEUM</b><br>1039 tours and Activities</p> 
 <br>
 
 <img class="bus_cont" src="yellowstonenationalpark.jpg" alt="Paris" width="250" height="200">
 <p><b>YELLOW STONE NATIONAL PARK</b><br>79 Tours and Activities</p> 
 <br>
 
 <img class="bus_cont" src="eiffeltower.jpg" alt="Paris" width="250" height="200">
 <p><b>EIFFEL TOWER</b><br>819 Tours and Activities</p>
 <br>
 
 </div>
 <div class="form__group">
 <img class="bus_cont" src="statueofliberty.webp" alt="Paris" width="250" height="200">
 <p><b>STATUE OF LIBERTY</b><br>260 Tours and Activities</p>
 <br>
 
 <img class="bus_cont" src="stonehenge.jpg" alt="Paris" width="250" height="200">
 <p><b>STONEHENGE</b><br>222 tours and activities.</p>
 <br>
 
 <img class="bus_cont" src="louvre.jpg" alt="Paris" width="250" height="200">
 <p><b>LOUVRE</b><br>697 Tours and Activities</p>
 <br>
 </div>
 
 <div class="form__group">
 <img class="bus_cont" src="machupicchu.jpg" alt="Paris" width="250" height="200">
 <p><b>MACHU PICCHU</b><br>1200 Tours and Activities</p>
 <br>
 
 <img class="bus_cont" src="greatwallofchina.jpg" alt="Paris" width="250" height="200">
 <p><b>GREAT WALL OF CHINA</b><br>456 Tours and Activities</p>
 <br>
 
 <img class="bus_cont" src="petra.jpg" alt="Paris" width="250" height="200">
 <p><b>PETRA</b><br>789 Tours and Activities</p>
 <br>
 </div>
 
 </form>
 </section>
 
 

<script>const initSlider = () => {
 const imageList = document.querySelector(".slider-wrapper .image-list");
 const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
 const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
 const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
 const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
 
 // Handle scrollbar thumb drag
 scrollbarThumb.addEventListener("mousedown", (e) => {
 const startX = e.clientX;
 const thumbPosition = scrollbarThumb.offsetLeft;
 const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
 
 // Update thumb position on mouse move
 const handleMouseMove = (e) => {
 const deltaX = e.clientX - startX;
 const newThumbPosition = thumbPosition + deltaX;
 
 // Ensure the scrollbar thumb stays within bounds
 const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
 const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
 
 scrollbarThumb.style.left = `${boundedPosition}px`;
 imageList.scrollLeft = scrollPosition;
 }
 
 // Remove event listeners on mouse up
 const handleMouseUp = () => {
 document.removeEventListener("mousemove", handleMouseMove);
 document.removeEventListener("mouseup", handleMouseUp);
 }
 
 // Add event listeners for drag interaction
 document.addEventListener("mousemove", handleMouseMove);
 document.addEventListener("mouseup", handleMouseUp);
 });
 
 // Slide images according to the slide button clicks
 slideButtons.forEach(button => {
 button.addEventListener("click", () => {
 const direction = button.id === "prev-slide" ? -1 : 1;
 const scrollAmount = imageList.clientWidth * direction;
 imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
 });
 });
 
 // Show or hide slide buttons based on scroll position
 const handleSlideButtons = () => {
 slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
 slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
 }
 
 // Update scrollbar thumb position based on image scroll
 const updateScrollThumbPosition = () => {
 const scrollPosition = imageList.scrollLeft;
 const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
 scrollbarThumb.style.left = `${thumbPosition}px`;
 }
 
 // Call these two functions when image list scrolls
 imageList.addEventListener("scroll", () => {
 updateScrollThumbPosition();
 handleSlideButtons();
 });
 }
 
 window.addEventListener("resize", initSlider);
 window.addEventListener("load", initSlider);</script>



 

 <div class="wra">
 <div class="h2">TOP DESTINATIONS TO EXPLORE WITH YOUR FAMILY AND FRIENDS.</div>
 
 <div class="cards__wrap">
 <div class="cards__item">
 <div class="cards__inner">
 <img src="lasvegas.jpg">
 <div class="role_name">LAS VEGAS</div>
 <div class="real_name">138 things to do</div>
 <div class="film">Starting from Rs 138,000 per person</div>
 </div>
 </div>
 <div class="cards__item">
 <div class="cards__inner">
 <img src="neworleans.webp">
 <div class="role_name">NEW ORLEANS</div>
 <div class="real_name">150 things to do</div>
 <div class="film">Starting from Rs 150,000 per person</div>
 </div>
 </div>
 <div class="cards__item">
 <div class="cards__inner">
 <img src="chicago.jpg">
 <div class="role_name">CHICAGO</div>
 <div class="real_name">200 Things to do</div>
 <div class="film">Startinf from Rs 200,00 per person</div>
 </div>
 </div>
 <div class="cards__item">
 <div class="cards__inner">
 <img src="cancun.jpg">
 <div class="role_name">CANCUN</div>
 <div class="real_name">200 things to do</div>
 <div class="film">Starting from Rs 138,000 per person</div>
 </div>
 </div>
 <div class="cards__item">
 <div class="cards__inner">
 <img src="nashville.jpg">
 <div class="role_name">NASHVILLE</div>
 <div class="real_name">120 Things to do</div>
 <div class="film">Starting from Rs 210,000 per person</div>
 </div>
 </div>
 <div class="cards__item">
 <div class="cards__inner">
 <img src="sanfrancisco.webp">
 <div class="role_name">SAN FRANCISCO</div>
 <div class="real_name">230 Things to do</div>
 <div class="film">Starting from Rs 410,000 per person</div>
 </div>
 </div>
 <div class="cards__item">
 <div class="cards__inner">
 <img src="newyorkcity.jpeg">
 <div class="role_name">NEW YORK CITY</div>
 <div class="real_name">220 Things to do</div>
 <div class="film">starting from Rs 500,000 per person</div>
 </div>
 </div>
 <div class="cards__item">
 <div class="cards__inner">
 <img src="niagarafalls.jpg">
 <div class="role_name">NIAGARA FALLS</div>
 <div class="real_name">20 Things to do</div>
 <div class="film">Starting from Rs 120,00 per person</div>
 </div>
 </div>
 </div>
 </div> 

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

 </body>
</html>
