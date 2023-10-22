<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>flights.com</title>
    <link rel="stylesheet" type="text/css" href="flights.css">
	
</head>
<body>
<?php include 'header.php'; ?>

	
    <div class="section__container  header__container">
        <h1 class="section__header">Find And Book A great Experience</h1>
        <img src="headerplane.jpg"  alt="header"/>
    </div>
	
	<section class="section__container  booking__container" style="font-family: Arial, sans-serif; text-align: center; padding: 20px; background-color: #f2f2f2;">
    <div class="booking__nav" style="margin-bottom: 20px;">
        <span style="padding: 10px; background-color: #4CAF50; color: white; margin-right: 10px;">Economy Class</span>
        <span style="padding: 10px; background-color: #f57c00; color: white; margin-right: 10px;">Business class</span>
        <span style="padding: 10px; background-color: #f44336; color: white; margin-right: 10px;">First Class</span>
    </div>
    <form action="flightbook.php">
        <div class="form__group" style="margin-bottom: 20px;">
            <span><i class="ri-map-pin-line" style="color: #4CAF50;"></i></span>
            <div class="input__content">
                <div class="input__group" style="margin-bottom: 10px;">
                    <input type="text" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px;" required>
                </div>
                <p style="color: #999;">Where are you Going?</p>
            </div>
        </div>
        <div class="form__group" style="margin-bottom: 20px;">
            <span><i class="ri-user-3-line" style="color: #f57c00;"></i></span>
            <div class="input__content">
                <div class="input__group" style="margin-bottom: 10px;">
                    <input type="number" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px;" required>
                </div>
                <p style="color: #999;">Add guests</p>
            </div>
        </div>
        <div class="form__group" style="margin-bottom: 20px;">
            <span><i class="ri-calendar-line" style="color: #f44336;"></i></span>
            <div class="input__content">
                <div class="input__group" style="margin-bottom: 10px;">
                    <input type="date" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px;" required>
                </div>
                <p style="color: #999;">Departure date</p>
            </div>
        </div>
        <div class="form__group" style="margin-bottom: 20px;">
            <span><i class="ri-calendar-line" style="color: #f44336;"></i></span>
            <div class="input__content">
                <div class="input__group" style="margin-bottom: 10px;">
                    <input type="date" style="padding: 10px; border-radius: 5px; border: 1px solid #ddd; width: 200px;" required>
                </div>
                <p style="color: #999;">Arrival date</p>
            </div>
        </div>
        <button type="submit" class="btn" style="padding: 10px 20px; border: none; background-color: #4CAF50; color: white; border-radius: 5px;"><i class="ri-search-line" style="margin-right: 5px;"></i>Search</button>
    </form>
</section>



    <section class="section__container  plane__container">
        <p class="subheader">TRAVEL SUPPORT</p>
        <h2 class="section__header">Plan your travel with confidence</h2>
        <p class="description">Find help with your bookings and travel planes,and see what to expect along your journey.
    </p>
    <div class="plane__grid">
        <div class="plane__content">
            <span class="number">01</span>
            <h4>Travel Requirements for Dubai</h4>
            <p>Stay informed and prepared for your trip to dubai with essential travel Requirements,ensuring a smooth and hassle-free experience in this vibrant and captivating city.

            </p>
            <span class="number">02</span>
            <h4>Multi-risk travel insurance</h4>
            <p>Comprehensive protection for your peace of mind,covering a range of potential travel risks and uexpected situations.
            </p>
            <span class="number">03</span>
            <h4>Travel Requirements by destinations</h4>
            <p>Stay informed and plan your trip with ease ,as we provide up-to-date information on travel Requirements specific to your desired destinations.

            </p>
        </div>
        <div class="plane__image">
            <img src="plane1.webp"  alt="plane">
            <img src="plane2.webp"  alt="plane">
            <img src="plane3.jpg"  alt="plane">
        </div>
    </div>
    </section>


    <section class="memories">
    <div class="section__container  memories__container">
        <div class="memories__header">
            <h2 class="section__header">
                Travel to make memories all around the world 
            </h2>
            <button class="view__all">View ALl</button>
        </div>
    <div class="memories__grid">
        <div class="memories__card">
          <span>
            <i class="ri-calendar-2-line"></i>
          </span>
          <h4>Book  & relax</h4>
          <p>With "Book and relax ,"you can sit back ,unwind, and enjoy the journey while we take care of everything else .</p>
        </div>
        <div class="memories__card">
            <span>
                <i class="ri-shield-check-line"></i>
            </span>
            <h4>Smart Checklist</h4>
            <p>Introducing smart checklist with us ,the innovative solution revolutionizing the way you travel with our airline.</p>
          </div>
          <div class="memories__card">
            <span>
                <i class="ri-bookmark-2-line"></i>
            </span>
            <h4>Save More</h4>
            <p>From discounted ticket prices to exclusive promotions and deals ,we prioritize affordability without compromising on quality.</p>
          </div>
    </div>
    </div>
    </section>

    <section class="section__container lounge__container">
        <div class="lounge__image">
            <img src="lounge1.jpg" alt="lounge">
            <img src="lounge2.jpg" alt="lounge">
        </div>


        <div class="lounge__content">
            <h2 class="section__header">Unconditional Minor Lounge</h2>
            <div class="lounge__grid">
                <div class="lounge__details">
                    <h4>Experience Tranquility</h4>
                    <p>Serenity Heaven offers a tranquill escape,featuring comfortable seating ,calming ambience ,and attentive service .
                   </p>
                </div>
                <div class="lounge__details">
                    <h4>Elavate your Experience</h4>
                    <p>Designed for discerning travelers ,this exclusive lounge offers premium amenities ,assistance and private workspaces.
                   </p>
                </div>
                <div class="lounge__details">
                    <h4>A Welcoming Space</h4>
                    <p>Creating a family-friendly atmosphere,the family zone is the perfect heaven for parents and children .
                   </p>
                </div>
                <div class="lounge__details">
                    <h4>A Culinary Delight</h4>
                    <p>Immerse yourself in a world of flavors,offering international cuisiness,gourmet dishes ,and carefully curated bevarages.
                   </p>
                </div>
            </div>
        </div>
    </section>


    <section class="section__container travellers__container">
        <h2 class="section__header">Best travellers of the month</h2>
      <div class="traveller__grid">
        <div class="travellers__card">
           <img src="traveller1.jpg"  alt="traveller">
           <div class="travellers__card__content">
            <img src="client1.webp" alt="client">
            <h4>Emily johnson</h4>
            <p>Singapore</p>
           </div>
        </div>
        <div class="travellers__card">
            <img src="traveller2.jpg"  alt="traveller">
            <div class="travellers__card__content">
             <img src="client2.jpg" alt="client">
             <h4>Mark Anderson</h4>
             <p>Dubai</p>
            </div>
         </div>
         <div class="travellers__card">
            <img src="traveller3.jpg"  alt="traveller">
            <div class="travellers__card__content">
             <img src="client3.jpg" alt="client">
             <h4>Nancy Kotlin </h4>
             <p>Paris</p>
            </div>
         </div>
         <div class="travellers__card">
            <img src="traveller4.jpg"  alt="traveller">
            <div class="travellers__card__content">
             <img src="client4.jpg" alt="client">
             <h4>Juliet Wingson</h4>
             <p>Malaysia</p>
            </div>
         </div>
      </div>

    </section>


    <section class="subscribe">
        <div class="section__container  subscribe__container">
           <h2 class="section__header">Subscribe newsletter & get latest news</h2>
          <form class="subscribe__form">
            <input type="text" placeholder="Enter your Email here">
            <button class="btn">Subscribe</button>
          </form>
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
    function toggleMobileMenu() {
        const navbarNav = document.getElementById('collapsibleNavbar');
        navbarNav.style.display = (navbarNav.style.display === 'block') ? 'none' : 'block';
    }
</script>

</body>
</html>