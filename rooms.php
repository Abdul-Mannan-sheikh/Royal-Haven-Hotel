<?php

include "config/db.php";


$query = mysqli_query(
    $conn,
    "SELECT * FROM rooms ORDER BY id DESC"
);

?>


<!DOCTYPE html>
<html lang="en">

<head>


<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Luxury Rooms | Royal Haven</title>

<link rel="stylesheet" href="style.css">


<style>


.rooms-hero{

    height:70vh;

    background:

    linear-gradient(
    rgba(0,0,0,.55),
    rgba(0,0,0,.75)
    ),

    url("https://images.unsplash.com/photo-1618773928121-c32242e63f39");

    background-size:cover;
    background-position:center;

    display:flex;
    align-items:center;
    justify-content:center;

    text-align:center;

    color:white;

}


.rooms-hero h1{

    font-size:80px;
    color:white;

}


.rooms-hero p{

    font-size:20px;
    color:#eee;

}



.room-card{

    background:white;

}



.room-status{

    color:#D4AF37;

    font-weight:600;

    margin-bottom:15px;

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




<!-- HERO -->


<section class="rooms-hero">


<div>


<p class="small-title">
ROYAL HAVEN COLLECTION
</p>



<h1>
Luxury Rooms & Suites
</h1>



<p>
Experience elegance, comfort and world-class hospitality.
</p>


</div>


</section>








<!-- ROOMS -->


<section class="rooms">



<h2>
Our Exclusive Rooms
</h2>



<p class="section-text">

Choose from our beautifully designed rooms
crafted for unforgettable stays.

</p>





<div class="room-container">



<?php while($row=mysqli_fetch_assoc($query)){ ?>



<div class="room-card">



<div class="room-image">


<img src="<?php echo $row['image']; ?>">


</div>





<div class="room-content">



<div class="rating">

<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>

</div>



<h3>

<?php echo $row['room_name']; ?>

</h3>




<p>

<?php echo $row['description']; ?>

</p>




<div class="room-info">

<span>
<i class="fa-solid fa-users"></i>
2 Guests
</span>

<span>
<i class="fa-solid fa-bed"></i>
King Bed
</span>

<span>
<i class="fa-solid fa-crown"></i>
Luxury
</span>

</div>


<ul class="room-features">

<li>
<i class="fa-solid fa-wifi"></i>
Free WiFi
</li>


<li>
<i class="fa-solid fa-utensils"></i>
Breakfast Included
</li>


<li>
<i class="fa-solid fa-bell-concierge"></i>
Room Service
</li>


<li>
<i class="fa-solid fa-gem"></i>
Premium Facilities
</li>

</ul>




<h4>

Rs. <?php echo $row['price']; ?>

<small>
/ Night
</small>


</h4>




<p class="room-status">

<?php echo $row['status']; ?>

</p>





<a href="booking.php?room=<?php echo urlencode($row['room_name']); ?>" class="gold-btn">

Book Now

<i class="fa-solid fa-arrow-right"></i>

</a>

</div>


</div>



<?php } ?>




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