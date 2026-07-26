<?php

include "config/db.php";


$rooms = mysqli_query(
    $conn,
    "SELECT * FROM rooms WHERE status='Available' ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Royal Haven Hotel | Luxury Palace</title>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>


<body>


<!-- HEADER -->

<header>

<nav>


<div class="logo">
ROYAL HAVEN
</div>

<button class="menu-toggle">
    ☰
</button>


<ul>

<li><a href="index.php">Home</a></li>

<li><a href="rooms.php">Rooms</a></li>

<li><a href="dining.php">Dining</a></li>

<li><a href="services.php">Services</a></li>

<li><a href="gallery.php">Gallery</a></li>

<li><a href="about.php">About</a></li>

<li><a href="contact.php">Contact</a></li>

</ul>


<a href="booking.php" class="book-btn">
Book Now
</a>



</nav>

</header>







<!-- HERO -->

<section class="hero">


<div class="hero-content">


<p class="small-title">
<i class="fa-solid fa-star"></i> FIVE STAR LUXURY HOTEL
</p>



<h1>

Royal Luxury<br>
Beyond Imagination

</h1>



<p>

Experience royal comfort, elegant rooms,
fine dining and world-class hospitality
at Royal Haven Hotel.

</p>



<div class="hero-buttons">


<a href="booking.php" class="gold-btn">

Reserve Your Stay

</a>


<a href="rooms.php" class="gold-btn second-btn">

Explore Rooms

</a>



</div>


</div>


</section>









<!-- ABOUT -->

<section class="about" id="about">


<div class="about-text">


<p class="small-title">
<i class="fa-solid fa-crown"></i>
WELCOME TO ROYAL HAVEN
</p>



<h2>

A Legacy Of Luxury & Royal Hospitality

</h2>



<p>

At Royal Haven Hotel, every guest is treated like royalty.
Our elegant architecture, premium facilities and personalized
services create an unforgettable luxury experience.

</p>



<p>

From peaceful rooms to world-class dining, we combine
modern comfort with timeless elegance to make every stay
truly exceptional.

</p>





<div class="numbers">



<div>

<i class="fa-solid fa-calendar-days"></i>

<h3>
15+
</h3>

<p>
Years Experience
</p>

</div>





<div>

<i class="fa-solid fa-hotel"></i>

<h3>
120+
</h3>

<p>
Luxury Rooms
</p>

</div>





<div>

<i class="fa-solid fa-users"></i>

<h3>
5000+
</h3>

<p>
Happy Guests
</p>

</div>



</div>



</div>







<div class="about-image">


<img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c">


<div class="experience-box">


<h3>
15+
</h3>

<p>
Years Of Excellence
</p>


</div>


</div>




</section>



<!-- SERVICES -->

<section class="services" id="services">


<p class="small-title">
OUR SERVICES
</p>



<h2>
Luxury Hotel Amenities
</h2>





<div class="service-container">



<div class="service-card">

<h3><i class="fa-solid fa-person-swimming"></i></h3>

<h4>
Swimming Pool
</h4>

<p>
Enjoy a relaxing swim in our luxury pool.
</p>

</div>





<div class="service-card">

<h3><i class="fa-solid fa-spa"></i></h3>

<h4>
Spa & Wellness
</h4>

<p>
Premium spa treatments for complete relaxation.
</p>

</div>






<div class="service-card">

<h3><i class="fa-solid fa-utensils"></i></h3>

<h4>
Fine Dining
</h4>

<p>
International cuisine prepared by expert chefs.
</p>

</div>







<div class="service-card">

<h3><i class="fa-solid fa-concierge-bell"></i></h3>

<h4>
Room Service
</h4>

<p>
24/7 professional room service available.
</p>

</div>






<div class="service-card">

<h3><i class="fa-solid fa-car-side"></i></h3>

<h4>
Airport Pickup
</h4>

<p>
Comfortable transportation service.
</p>

</div>






<div class="service-card">

<h3><i class="fa-solid fa-building-columns"></i></h3>

<h4>
Conference Hall
</h4>

<p>
Elegant spaces for meetings and events.
</p>

</div>



</div>



</section>









<!-- DINING -->

<section class="dining" id="dining">


<p class="small-title">
ROYAL DINING
</p>



<h2>
Fine Dining Experience
</h2>



<p>

Taste exceptional dishes in an elegant atmosphere
where every meal becomes a memorable experience.

</p>




<img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0">



</section>











<!-- GALLERY -->


<section class="gallery" id="gallery">


<p class="small-title">
HOTEL GALLERY
</p>



<h2>
Explore Royal Haven
</h2>




<div>


<img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791">


<img src="https://images.unsplash.com/photo-1591088398332-8a7791972843">


<img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d">


<img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b">


<img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32">


<img src="https://images.unsplash.com/photo-1595576508898-0ad5c879a061">


</div>



</section>









<!-- TESTIMONIALS -->


<section class="testimonials">


<p class="small-title">
GUEST EXPERIENCE
</p>



<h2>
What Our Guests Say
</h2>






<div class="review-container">





<div class="review-card">


<div class="rating">
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
</div>



<h3>
Ahmed Khan
</h3>


<p>

"The best hotel experience.
Amazing rooms and outstanding service."

</p>



</div>







<div class="review-card">


<div class="rating">
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
</div>



<h3>
Sarah Ali
</h3>


<p>

"Beautiful atmosphere and luxury
comfort. Highly recommended."

</p>



</div>







<div class="review-card">


<div class="rating">
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
</div>



<h3>
Omar Sheikh
</h3>


<p>

"Professional staff and unforgettable stay."

</p>



</div>






</div>



</section>









<!-- CONTACT -->


<section class="contact" id="contact">


<p class="small-title">
CONTACT ROYAL HAVEN
</p>



<h2>
Get In Touch
</h2>






<div class="contact-box">



<div>

<h3><i class="fa-solid fa-location-dot"></i> Location</h3>

<p>
Karachi, Pakistan
</p>

</div>





<div>

<h3><i class="fa-solid fa-phone"></i> Phone</h3>

<p>
+92 300 1234567
</p>

</div>





<div>

<h3><i class="fa-solid fa-envelope"></i> Email</h3>

<p>
info@royalhavenhotel.com
</p>

</div>




</div>



</section>

<!-- FOOTER -->

<footer>


<div class="footer-container">



<div class="footer-box">

<h2>
ROYAL HAVEN
</h2>


<p>
Experience luxury, comfort and royal hospitality.
Your perfect stay begins with Royal Haven Hotel.
</p>


<div class="footer-icons">

<a href="#">
<i class="fa-brands fa-facebook"></i>
</a>

<a href="#">
<i class="fa-brands fa-instagram"></i>
</a>

<a href="#">
<i class="fa-brands fa-x-twitter"></i>
</a>

</div>


</div>







<div class="footer-box">

<h3>
Quick Links
</h3>


<a href="index.php">
Home
</a>

<a href="rooms.php">
Rooms
</a>

<a href="dining.php">
Dining
</a>

<a href="services.php">
Services
</a>

<a href="gallery.php">
Gallery
</a>

<a href="contact.php">
Contact
</a>


</div>







<div class="footer-box">

<h3>
Hotel Services
</h3>


<a href="#">
Luxury Rooms
</a>


<a href="#">
Fine Dining
</a>


<a href="#">
Swimming Pool
</a>


<a href="#">
Spa & Wellness
</a>


<a href="#">
Room Service
</a>


<a href="#">
Event Hall
</a>


</div>







<div class="footer-box">

<h3>
Contact Us
</h3>


<p>
<i class="fa-solid fa-location-dot"></i>
Karachi, Pakistan
</p>


<p>
<i class="fa-solid fa-phone"></i>
+92 300 1234567
</p>


<p>
<i class="fa-solid fa-envelope"></i>
info@royalhavenhotel.com
</p>


</div>



</div>






<div class="footer-newsletter">

<h3>
Subscribe Newsletter
</h3>


<p>
Get latest offers and luxury deals.
</p>


<input type="email" placeholder="Enter your email">


<button>
Subscribe
</button>


</div>







<div class="footer-bottom">

<p>
© 2026 Royal Haven Hotel. All Rights Reserved.
</p>


</div>


</footer>



<script src="script.js"></script>
</body>

</html>