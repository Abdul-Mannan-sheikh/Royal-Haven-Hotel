<?php

include "config/db.php";


$services = mysqli_query(
$conn,
"SELECT * FROM services ORDER BY id DESC"
);


?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Luxury Services | Royal Haven Hotel</title>


<link rel="stylesheet" href="style.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">



<style>


.services-hero{

height:80vh;

background:

linear-gradient(
rgba(0,0,0,.55),
rgba(0,0,0,.75)
),

url("https://images.unsplash.com/photo-1566073771259-6a8506099945");


background-size:cover;

background-position:center;

display:flex;

align-items:center;

justify-content:center;

text-align:center;

color:white;

}



.services-hero h1{

font-size:75px;

color:white;

}



.services-hero p{

font-size:22px;

color:white;

}




.service-intro{

padding:90px 10%;

text-align:center;

}



.service-intro h2{

font-size:45px;

}



.service-intro p{

max-width:850px;

margin:20px auto;

font-size:18px;

line-height:1.8;

}




.service-container{

display:grid;

grid-template-columns:repeat(3,1fr);

gap:30px;

margin-top:50px;

}




.service-card{

background:white;

padding:40px 30px;

border-radius:20px;

text-align:center;

box-shadow:0 10px 30px rgba(0,0,0,.12);

}



.service-card i{

font-size:45px;

color:#D4AF37;

margin-bottom:20px;

}



.service-card h3{

font-size:25px;

margin-bottom:15px;

}



.service-card p{

font-size:16px;

}



.service-card img{

width:100%;

height:220px;

object-fit:cover;

border-radius:15px;

}




.reservation-banner div{

text-align:center;

margin:auto;

}



.reservation-banner h2{

color:white;

text-align:center;

}



.reservation-banner p{

color:white;

text-align:center;

}




@media(max-width:900px){


.service-container{

grid-template-columns:repeat(2,1fr);

}


}



@media(max-width:600px){


.service-container{

grid-template-columns:1fr;

}



.services-hero h1{

font-size:45px;

}


}



</style>


</head>
<body>



<!-- HEADER -->


<header>

<nav>



<div class="logo">

ROYAL HAVEN

</div><button class="menu-toggle">
    ☰
</button>






<ul>


<li>
<a href="index.php">
Home
</a>
</li>



<li>
<a href="rooms.php">
Rooms
</a>
</li>



<li>
<a href="dining.php">
Dining
</a>
</li>



<li>
<a href="services.php">
Services
</a>
</li>



<li>
<a href="gallery.php">
Gallery
</a>
</li>



<li>
<a href="about.php">
About
</a>
</li>



<li>
<a href="contact.php">
Contact
</a>
</li>



</ul>





<a href="booking.php" class="book-btn">

Book Now

</a>



</nav>

</header>









<!-- HERO -->


<section class="services-hero">


<div>


<p class="small-title">

ROYAL HAVEN EXPERIENCE

</p>



<h1>

Luxury Services

</h1>




<p>

Designed to make every moment unforgettable.

</p>



</div>


</section>









<!-- SERVICES INTRO + DATABASE CARDS -->


<section class="service-intro">



<p class="small-title">

OUR SERVICES

</p>




<h2>

Exceptional Hospitality Beyond Expectations

</h2>




<p>

At Royal Haven Hotel, we provide world-class
facilities and personalized services designed
for comfort, relaxation and unforgettable stays.

</p>





<div class="service-container">



<?php while($row=mysqli_fetch_assoc($services)){ ?>



<div class="service-card">



<i class="<?php echo $row['icon']; ?>"></i>



<h3>

<?php echo $row['title']; ?>

</h3>



<p>

<?php echo $row['description']; ?>

</p>



</div>



<?php } ?>



</div>



</section>










<!-- WHY CHOOSE US -->


<section class="service-intro">


<p class="small-title">

WHY CHOOSE US

</p>



<h2>

Designed For Your Comfort

</h2>




<div class="service-container">



<div class="service-card">


<i class="fa-solid fa-bed"></i>


<h3>

Luxury Rooms

</h3>


<p>

Elegant rooms with modern facilities
and royal comfort.

</p>


</div>





<div class="service-card">


<i class="fa-solid fa-clock"></i>


<h3>

24/7 Support

</h3>


<p>

Our professional team is always ready
to assist guests.

</p>


</div>





<div class="service-card">


<i class="fa-solid fa-shield-halved"></i>


<h3>

Guest Safety

</h3>


<p>

Complete security and peaceful
environment.

</p>


</div>



</div>



</section>









<!-- ROYAL EXPERIENCE -->


<section class="service-intro">


<p class="small-title">

ROYAL EXPERIENCE

</p>



<h2>

More Than Just A Stay

</h2>




<p>

From relaxing moments to memorable celebrations,
Royal Haven provides everything you need for a
perfect luxury experience.

</p>




<div class="service-container">



<div class="service-card">


<i class="fa-solid fa-champagne-glasses"></i>


<h3>

Special Events

</h3>


<p>

Celebrate weddings, parties and special occasions
in elegant spaces.

</p>


</div>





<div class="service-card">


<i class="fa-solid fa-heart"></i>


<h3>

Personalized Care

</h3>


<p>

Every guest receives warm hospitality
and special attention.

</p>


</div>





<div class="service-card">


<i class="fa-solid fa-star"></i>


<h3>

Five Star Quality

</h3>


<p>

Premium facilities with world-class standards.

</p>


</div>



</div>


</section>





<!-- SERVICE GALLERY -->


<section class="service-intro">


<p class="small-title">

HOTEL FACILITIES

</p>




<h2>

Explore Our Facilities

</h2>




<div class="service-container">



<div class="service-card">


<img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef">


<h3>

Luxury Spa

</h3>


</div>





<div class="service-card">


<img src="https://images.unsplash.com/photo-1576678927484-cc907957088c">


<h3>

Swimming Pool

</h3>


</div>





<div class="service-card">


<img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791">


<h3>

Luxury Environment

</h3>


</div>



</div>


</section>









<!-- CTA BANNER -->


<section class="reservation-banner">


<div>



<p class="small-title">

ROYAL HAVEN

</p>




<h2>

Experience Luxury Like Never Before

</h2>




<p>

Book your stay today and enjoy exceptional
services, comfort and unforgettable hospitality.

</p>




<a href="booking.php" class="book-btn">

Book Your Stay

</a>




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