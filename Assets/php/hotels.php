<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Hotels</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="hotels.css">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

<style>
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

<body style="overflow-x: hidden;">
  <?php include 'header.php'; ?>
  <script>
    const hambuger = document.querySelector('.hambuger');
    const navMenu = document.querySelector('.nav-menu');

    hambuger.addEventListener("click", mobileMenu);

    function mobileMenu() {
      hambuger.classList.toggle("active");
      navMenu.classList.toggle("active");
    }

    const navLink = document.querySelectorAll('.nav-link');
    navLink.forEach((n) => n.addEventListener("click", closeMenu));

    function closeMenu() {
      hambuger.classList.remove("active");
      navMenu.classList.remove("active");
    }
  </script>

  <section class="home" id="home">
    <div class="head_container">
      <div class="box">
        <div class="text">
          <h1>WELCOME</h1>
          <p>Welcome to out Travelanza, your gateway to unforgettable hotel experiences. Book the perfect stay in just a few clicks and discover a world of comfort and luxury.xplore our handpicked selection of hotels, each offering a unique experience. From boutique gems to luxurious resorts, you'll find your ideal accommodation here. </p>
          <button>MORE INFO</button>
        </div>
      </div>
      <div class="image">
        <img src="hotelwallpaper.jpg" class="slide">
      </div>
      <div class="image_item">
        <img src="hotel.jpg" alt="" class="slide active" onclick="img('hotel.jpg')">
        <img src="hotel1.jpg" alt="" class="slide" onclick="img('hotel1.jpg')">
        <img src="hotelroom1.jpg".jpg alt="" class="slide" onclick="img('hotelroom1.jpg')">
        <img src="hotelroom3.jpg" alt="" class="slide" onclick="img('hotelroom3.jpg')">
      </div>
    </div>
  </section>
  <script>
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }

    function change(change) {
      const line = document.querySelector('.image');
      line.style.background = change;
    }
  </script>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
 <section class="section__container  booking__container" style="font-family: Arial, sans-serif; text-align: center; padding: 20px; background-color: #f2f2f2;">
        <div class="booking__nav" style="margin-bottom: 20px;">
            <span style="padding: 10px; background-color: #4CAF50; color: white; margin-right: 10px;">Luxury Hotels</span>
            <span style="padding: 10px; background-color: #f57c00; color: white; margin-right: 10px;">Business Hotels</span>
            <span style="padding: 10px; background-color: #f44336; color: white; margin-right: 10px;">Budget Hotels</span>
        </div>
        <form action="hotelroom.php">
            <div class="form__group" style="margin-bottom: 20px;">
                <span><i data-feather="map-pin" style="color: #4CAF50;"></i></span>
                <div class="input__content">
                    <div class="input__group" style="margin-bottom: 10px;">
                        <input type="text" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Hotel Name</p>
                </div>
            </div>
            <div class="form__group" style="margin-bottom: 20px;">
                <span><i data-feather="user" style="color: #f57c00;"></i></span>
                <div class="input__content">
                    <div class="input__group" style="margin-bottom: 10px;">
                        <input type="number" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Number of guests</p>
                </div>
            </div>
            <div class="form__group" style="margin-bottom: 20px;">
                <span><i data-feather="calendar" style="color: #f44336;"></i></span>
                <div class="input__content">
                    <div class="input__group" style="margin-bottom: 10px;">
                        <input type="date" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Check-in</p>
                </div>
            </div>
            <div class="form__group" style="margin-bottom: 20px;">
                <span><i data-feather="calendar" style="color: #f44336;"></i></span>
                <div class="input__content">
                    <div class="input__group" style="margin-bottom: 10px;">
                        <input type="date" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px; background: white;" required>
                    </div>
                    <p style="color: #999;">Check-out</p>
                </div>
            </div>
 <button type="submit" class="btn" style="padding: 10px 20px; border: none; background-color: #4CAF50; color: white; border-radius: 5px;">
            <i data-feather="search" style="margin-right: 5px;"></i>Search
        </button>
		</form>
    </section>
	
	  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>


  <section class="about top" id="about">
    <div class="container flex">
      <div class="left">
        <div class="img">
          <img src="hotelroom6.jpg" alt="" class="image1">
          <img src="hotelroom7.jpg" alt="" class="image2">
        </div>
      </div>
      <div class="right">
        <div class="heading">
          <h5>RAISING COMFOMRT TO THE HIGHEST LEVEL</h5>
          <h2>Welcome to Travelanza Hotel Resort</h2>
          <p>Unbeatable prices for unforgettable memories. Don't miss our limited-time offers, seasonal discounts, and exclusive package deals. </p>
          <p>Hear it from our delighted guests. Read what others have to say about their incredible experiences with us</p>
          <button class="btn1">READ MORE</button>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper top">
    <div class="container2 wrapper">
      <div class="text">
        <h2>Our Amenities</h2>
        <p>Sink into plush beds and enjoy spacious rooms with all the comforts of home.
            Wake up to stunning views or cozy up in stylish interiors.Savor delectable meals at our in-house restaurants, serving a range of international and local cuisines.
        </p>

        <div class="content">
          <div class="box flex">
            <i class="fas fa-swimming-pool"></i>
            <span>Swimming pool</span>
          </div>
          <div class="box flex">
            <i class="fas fa-dumbbell"></i>
            <span>Gym & yogo</span>
          </div>
          <div class="box flex">
            <i class="fas fa-spa"></i>
            <span>Spa & massage</span>
          </div>
          <div class="box flex">
            <i class="fas fa-ship"></i>
            <span>Boat Tours</span>
          </div>
          <div class="box flex">
            <i class="fas fa-swimmer"></i>
            <span>Surfing Lessons</span>
          </div>
          <div class="box flex">
            <i class="fas fa-microphone"></i>
            <span>Conference room</span>
          </div>
          <div class="box flex">
            <i class="fas fa-water"></i>
            <span>Diving & smorking</span>
          </div>
          <div class="box flex">
            <i class="fas fa-umbrella-beach"></i>
            <span>Private Beach</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="room top" id="room">
    <div class="container1">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>RAISING COMFORT TO THE HIGHEST LEVEL</h5>
          <h2>Rooms $ Suites</h2>
        </div>
		
        <div class="button">
          <button class="btn1">VIEW ALL</button>
        </div>
      </div>
<br>
<br>
<br>
      <div class="content grid">
        <div class="box">
          <div class="img">
            <img src="hotelroom13.jpg" alt="">
          </div>
          <div class="text">
            <h3>Superior Soble Rooms</h3>
            <p> <span>$</span>129 <span>/per night</span> </p>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="hotelroom4.jpg" alt="">
          </div>
          <div class="text">
            <h3>Superior Soble Rooms</h3>
            <p> <span>$</span>210 <span>/per night</span> </p>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="hotelroom13.jpg" alt="">
          </div>
          <div class="text">
            <h3>Superior Soble Rooms</h3>
            <p> <span>$</span>300 <span>/per night</span> </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper wrapper2 top">
    <div class="container">
      <div class="text">
        <div class="heading">
          <h5>AT THE HEART OF COMMUNICATION</h5>
          <h2>People Say</h2>
        </div>

        <div class="para">
          <p> Our 24/7 customer support team is always ready to assist you. Your comfort and satisfaction are our top priorities. Your security is our commitment. Rest assured that your personal and payment information is safe with us.- We believe in keeping things simple. No confusing jargon, just straightforward information to help you make informed decisions </p>

          <div class="box flex">
            <div class="img">
              <img src="hotelroom17.jpg" alt="">
            </div>
            <div class="name">
              <h5>KATE PALMER</h5>
              <h5>IDAHO</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="restaurant top" id="restaurant">
    <div class="container flex">
      <div class="left">
        <img src="hotelbar.webp" alt="">
      </div>
      <div class="right">
        <div class="text">
          <h2>Our Restaurant</h2>
          <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="accordionWrapper">
          <div class="accordionItem open">
            <h2 class="accordionIHeading">Italian Kitchen</h2>
            <div class="accordionItemContent">
              <p>At Travelanza, we believe that the heart of any great stay lies in the culinary experiences it offers. Our Italian kitchen is a culinary journey through the enchanting flavors and traditions of Italy. We invite you to savor the essence of Italy right here at our hotel.Indulge in the authentic flavors of Italy, where every dish is a celebration of the country's rich culinary heritage. From classic pasta dishes to wood-fired pizzas, our chefs craft each meal with passion and expertise.
              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Mexican Kitchen</h2>
            <div class="accordionItemContent">
              <p>At Travelanza, we invite you on a culinary journey that celebrates the bold, spicy, and vibrant flavors of Mexico. Our Mexican kitchen is a delightful fusion of tradition and innovation, offering a menu that will transport your taste buds south of the border.Indulge in the authentic, time-honored recipes that have been passed down through generations. Our chefs pay homage to Mexican culinary traditions, serving up classic dishes that embody the heart and soul of Mexico.
              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Indian Kitchen</h2>
            <div class="accordionItemContent">
              <p>At Travelanza, we invite you to explore the diverse and mouthwatering world of Indian cuisine. Our Indian kitchen is a celebration of flavors, a fusion of spices, and a testament to the cultural tapestry of India.Indulge in the rich tapestry of Indian flavors, where each dish tells a story. From the fiery curries of the North to the aromatic biryanis of the South, our Indian kitchen brings the entire subcontinent to your plate.


              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading"> Thai Kitchen</h2>
            <div class="accordionItemContent">
              <p>At Travelanza, we invite you on a culinary journey to the heart of Thailand. Our Thai kitchen is a delightful exploration of bold and aromatic flavors, a tribute to the diverse and rich cuisine of Thailand.Indulge in the authentic and time-honored recipes of Thailand, where each dish is a symphony of flavors. Our chefs bring the best of Thai culinary traditions to your table.We take pride in using the freshest ingredients and aromatic herbs to create a true Thai culinary experience. You'll taste the authenticity in every bite.
               </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionIHeading');

    for (i = 0; i < accHD.length; i++) {
      accHD[i].addEventListener('click', toggleItem, false);
    }

    function toggleItem() {
      var itemClass = this.parentNode.className;
      for (var i = 0; i < accItem.length; i++) {
        accItem[i].className = 'accordionItem close';
      }
      if (itemClass == 'accordionItem close') {
        this.parentNode.className = 'accordionItem open';
      }
    }
  </script>



  <section class="gallary mtop " id="gallary">
    <div class="container3">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>WELCOME TO OUR PHOTO GALLERY</h5>
          <h2>Photo Gallery of Our Hotel</h2>
        </div>
        <div class="button">
          <button class="btn1">VIEW GALLERY</button>
        </div>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="hotelbathroom2.webp" alt="">
        </div>
        <div class="item">
          <img src="hotelroom12.webp" alt="">
        </div>
        <div class="item">
          <img src="hotelroomcafe10.jpg" alt="">
        </div>
        <div class="item">
          <img src="hotelroombed16.jpg" alt="">
        </div>
        <div class="item">
          <img src="hotelcorridor.webp" alt="">
        </div>
        <div class="item">
          <img src="hotelroom17.jpg" alt="">
        </div>
        <div class="item">
          <img src="hotelroom9.jpg" alt="">
        </div>
        <div class="item">
          <img src="hotelroom6.jpg" alt="">
        </div>
      </div>

    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>



  <section class="map top">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14131.036667732067!2d85.32395955!3d27.69383745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1637755481449!5m2!1sen!2snp" width="600" height="450" style="border:0;"
      allowfullscreen="" loading="lazy"></iframe>
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

<script>
    function toggleMobileMenu() {
        const navbarNav = document.getElementById('collapsibleNavbar');
        navbarNav.style.display = (navbarNav.style.display === 'block') ? 'none' : 'block';
    }
</script>

</body>

</html>