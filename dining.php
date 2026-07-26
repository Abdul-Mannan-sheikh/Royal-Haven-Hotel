<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Royal Dining | Royal Haven Hotel</title>


<link rel="stylesheet" href="style.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">



<style>


.dining-hero{

height:75vh;

background:

linear-gradient(
rgba(0,0,0,.55),
rgba(0,0,0,.75)
),

url("https://images.unsplash.com/photo-1414235077428-338989a2e8c0");


background-size:cover;

background-position:center;

display:flex;

align-items:center;

justify-content:center;

text-align:center;

color:white;

}



.dining-hero h1{

font-size:75px;

color:white;

}



.dining-hero p{

font-size:20px;

color:#eee;

}





.dining-about{

padding:80px 10%;

text-align:center;

}



.dining-about h2{

font-size:45px;

}



.dining-about p{

max-width:900px;

margin:20px auto;

font-size:18px;

line-height:1.8;

}





.dining-image{

margin-top:40px;

}



.dining-image img{

width:80%;

border-radius:20px;

}







.restaurant-container{

display:flex;

justify-content:center;

gap:30px;

flex-wrap:wrap;

margin-top:50px;

}





.restaurant-card{

width:300px;

background:white;

padding:35px;

border-radius:15px;

box-shadow:0 10px 30px rgba(0,0,0,.12);

text-align:center;

}





.restaurant-card i{

font-size:45px;

color:#D4AF37;

margin-bottom:20px;

}





.food-section{

padding:80px 10%;

text-align:center;

}





.food-container{

display:flex;

justify-content:center;

gap:25px;

flex-wrap:wrap;

margin-top:40px;

}





.food-card{

width:250px;

padding:30px;

background:#fff;

border-radius:15px;

box-shadow:0 10px 25px rgba(0,0,0,.1);

}





.food-card h3{

margin-top:15px;

}



.food-card i{

font-size:40px;

color:#D4AF37;

}

.dining-about{

padding:100px 10%;
text-align:center;

}


.dining-about h2{

font-size:48px;
margin-bottom:25px;

}


.dining-about p{

max-width:850px;
margin:15px auto;
font-size:18px;
line-height:1.8;

}



.dining-image{

display:flex;
justify-content:center;
align-items:center;
margin-top:50px;

}



.dining-image img{

width:75%;
max-width:900px;
height:500px;
object-fit:cover;

border-radius:25px;

box-shadow:
0 20px 50px rgba(0,0,0,.25);

}


.reservation-banner{

padding:100px 10%;

background:

linear-gradient(
rgba(0,0,0,.65),
rgba(0,0,0,.65)
),

url("https://images.unsplash.com/photo-1414235077428-338989a2e8c0");


background-size:cover;

background-position:center;

text-align:center;

color:white;

}


.reservation-banner h2{

font-size:45px;
color:white;

}


.reservation-banner p{

font-size:18px;

max-width:800px;

margin:20px auto;

}


.reservation-banner .book-btn{

display:inline-block;

margin-top:20px;

}



</style>


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
<a href="index.php#services">
Services
</a>
</li>



<li>
<a href="index.php#gallery">
Gallery
</a>
</li>



<li>
<a href="index.php#about">
About
</a>
</li>



<li>
<a href="index.php#contact">
Contact
</a>
</li>


</ul>




<a href="booking.php" class="book-btn">

Book Now

</a>



</nav>

</header>






<!-- DINING HERO -->


<section class="dining-hero">


<div>


<p class="small-title">

ROYAL HAVEN RESTAURANT

</p>




<h1>

Fine Dining Experience

</h1>




<p>

Where every meal becomes a royal memory.

</p>


</div>


</section>








<!-- ABOUT DINING -->


<section class="dining-about">


<p class="small-title">

ROYAL CUISINE

</p>



<h2>

A Journey Of Taste & Elegance

</h2>




<p>

Experience exceptional dining at Royal Haven Hotel.
Our chefs create delicious cuisines using premium
ingredients and artistic presentation.

</p>




<p>

From romantic dinners to family celebrations,
our elegant atmosphere makes every occasion special.

</p>




<div class="dining-image">

<img src="https://images.unsplash.com/photo-1515003197210-e0cd71810b5f">

</div>


</section>








<!-- RESTAURANTS -->


<section class="food-section">


<p class="small-title">

OUR DINING VENUES

</p>



<h2>

Discover Our Restaurants

</h2>




<div class="restaurant-container">



<div class="restaurant-card">


<i class="fa-solid fa-utensils"></i>


<h3>

Royal Restaurant

</h3>


<p>

International cuisine with luxury ambiance.

</p>


</div>






<div class="restaurant-card">


<i class="fa-solid fa-martini-glass"></i>


<h3>

Rooftop Dining

</h3>


<p>

Enjoy beautiful views with premium meals.

</p>


</div>







<div class="restaurant-card">


<i class="fa-solid fa-champagne-glasses"></i>


<h3>

Private Dining

</h3>


<p>

Exclusive dining experience for special moments.

</p>


</div>



</div>


</section>








<!-- FOOD CATEGORIES -->


<section class="food-section">


<p class="small-title">

SPECIAL MENU

</p>



<h2>

Our Food Categories

</h2>




<div class="food-container">



<div class="food-card">

<i class="fa-solid fa-mug-hot"></i>

<h3>
Breakfast
</h3>

<p>
Fresh morning meals prepared by our chefs.
</p>

</div>




<div class="food-card">

<i class="fa-solid fa-bowl-food"></i>

<h3>
Lunch
</h3>

<p>
Delicious meals with international flavors.
</p>

</div>





<div class="food-card">

<i class="fa-solid fa-utensils"></i>

<h3>
Dinner
</h3>

<p>
Elegant dinner experience with royal service.
</p>

</div>





<div class="food-card">

<i class="fa-solid fa-cake-candles"></i>

<h3>
Desserts
</h3>

<p>
Sweet creations made specially for guests.
</p>

</div>




</div>


</section>



<!-- SIGNATURE DISHES -->


<section class="food-section">


<p class="small-title">

CHEF'S CREATION

</p>


<h2>

Our Signature Dishes

</h2>



<div class="food-container">



<div class="food-card">


<img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d"
style="width:100%;border-radius:15px;">


<h3>

Royal Steak

</h3>


<p>

Premium grilled steak prepared with special herbs.

</p>


</div>





<div class="food-card">


<img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601"
style="width:100%;border-radius:15px;">


<h3>

Italian Pasta

</h3>


<p>

Authentic Italian flavors with royal presentation.

</p>


</div>





<div class="food-card">


<img src="https://images.unsplash.com/photo-1547592180-85f173990554"
style="width:100%;border-radius:15px;">


<h3>

Seafood Special

</h3>


<p>

Fresh seafood dishes crafted by expert chefs.

</p>


</div>





<div class="food-card">


<img src="https://images.unsplash.com/photo-1551024506-0bccd828d307"
style="width:100%;border-radius:15px;">


<h3>

Royal Desserts

</h3>


<p>

Luxury desserts made for unforgettable moments.

</p>


</div>




</div>


</section>









<!-- DINING EXPERIENCE -->


<section class="dining-about">



<p class="small-title">

EXPERIENCE

</p>



<h2>

More Than Just A Meal

</h2>




<p>

At Royal Haven, dining is an experience of luxury,
taste and unforgettable memories. Whether it is a
romantic dinner, family celebration or business meeting,
our team creates the perfect atmosphere.

</p>




<div class="restaurant-container">



<div class="restaurant-card">


<i class="fa-solid fa-heart"></i>


<h3>

Romantic Dinner

</h3>


<p>

Elegant setup with beautiful atmosphere.

</p>


</div>






<div class="restaurant-card">


<i class="fa-solid fa-users"></i>


<h3>

Family Dining

</h3>


<p>

Perfect place for family celebrations.

</p>


</div>







<div class="restaurant-card">


<i class="fa-solid fa-briefcase"></i>


<h3>

Business Meetings

</h3>


<p>

Professional dining for corporate guests.

</p>


</div>




</div>



</section>









<!-- OPENING HOURS -->


<section class="food-section">


<p class="small-title">

VISIT US

</p>



<h2>

Restaurant Opening Hours

</h2>




<div class="restaurant-container">



<div class="restaurant-card">


<i class="fa-solid fa-mug-hot"></i>


<h3>

Breakfast

</h3>


<p>

07:00 AM - 11:00 AM

</p>


</div>





<div class="restaurant-card">


<i class="fa-solid fa-utensils"></i>


<h3>

Lunch

</h3>


<p>

12:00 PM - 04:00 PM

</p>


</div>





<div class="restaurant-card">


<i class="fa-solid fa-moon"></i>


<h3>

Dinner

</h3>


<p>

07:00 PM - 11:30 PM

</p>


</div>




</div>


</section>




<!-- RESERVATION BANNER -->


<section class="reservation-banner">


<div>


<p class="small-title">

ROYAL INVITATION

</p>


<h2>

Reserve Your Royal Dining Experience

</h2>


<p>

Celebrate your special moments with luxury cuisine,
beautiful atmosphere and exceptional hospitality.

</p>


<a href="booking.php" class="book-btn">

Reserve A Table

</a>


</div>


</section>








<!-- DINING GALLERY -->


<section class="food-section">


<p class="small-title">

DINING MOMENTS

</p>



<h2>

A Glimpse Of Royal Dining

</h2>




<div class="restaurant-container">



<div class="restaurant-card">

<img src="https://images.unsplash.com/photo-1515003197210-e0cd71810b5f"
style="width:100%;height:220px;object-fit:cover;border-radius:15px;">

</div>




<div class="restaurant-card">

<img src="https://images.unsplash.com/photo-1559339352-11d035aa65de"
style="width:100%;height:220px;object-fit:cover;border-radius:15px;">

</div>




<div class="restaurant-card">

<img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4"
style="width:100%;height:220px;object-fit:cover;border-radius:15px;">

</div>



</div>


</section>




<!-- CHEF SECTION -->


<section class="dining-about">


<p class="small-title">

MASTER CHEFS

</p>




<h2>

Meet Our Culinary Experts

</h2>




<p>

Our professional chefs bring years of experience
and passion to every dish. Each recipe is prepared
with creativity, quality and perfection.

</p>




<div class="restaurant-container">



<div class="restaurant-card">


<i class="fa-solid fa-user-tie"></i>


<h3>

Expert Chefs

</h3>


<p>

Skilled professionals creating unforgettable flavors.

</p>


</div>





<div class="restaurant-card">


<i class="fa-solid fa-leaf"></i>


<h3>

Fresh Ingredients

</h3>


<p>

Premium quality ingredients selected carefully.

</p>


</div>





<div class="restaurant-card">


<i class="fa-solid fa-star"></i>


<h3>

Royal Experience

</h3>


<p>

Luxury service with unforgettable hospitality.

</p>


</div>



</div>



</section>







<!-- DINING GALLERY -->


<section class="food-section">


<p class="small-title">

DINING GALLERY

</p>



<h2>

Explore Our Dining Atmosphere

</h2>




<div class="restaurant-container">



<div class="restaurant-card">


<img 
src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4"
style="width:100%;border-radius:15px;"
>


</div>





<div class="restaurant-card">


<img 
src="https://images.unsplash.com/photo-1552566626-52f8b828add9"
style="width:100%;border-radius:15px;"
>


</div>





<div class="restaurant-card">


<img 
src="https://images.unsplash.com/photo-1559339352-11d035aa65de"
style="width:100%;border-radius:15px;"
>


</div>




</div>



</section>








<!-- RESERVATION SECTION -->


<section class="dining-about">


<p class="small-title">

RESERVE YOUR TABLE

</p>




<h2>

Create Beautiful Dining Memories

</h2>




<p>

Join us for an exceptional dining experience
where luxury atmosphere, delicious cuisine and
premium hospitality come together.

</p>




<a href="booking.php" class="book-btn">

Book Your Table

</a>



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