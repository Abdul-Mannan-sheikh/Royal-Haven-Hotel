<?php

include "config/db.php";


$gallery = mysqli_query(
$conn,
"SELECT * FROM gallery ORDER BY id DESC"
);


?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Gallery | Royal Haven Hotel</title>


<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<style>


.video-banner{

height:90vh;

position:relative;

overflow:hidden;

display:flex;

align-items:center;

justify-content:center;

text-align:center;

color:white;

}



.video-banner video{

position:absolute;

width:100%;

height:100%;

object-fit:cover;

z-index:-2;

}



.video-overlay{

position:absolute;

width:100%;

height:100%;

background:rgba(0,0,0,.55);

z-index:-1;

}




.video-content h1{

font-size:80px;

color:white;

}



.video-content p{

font-size:22px;

}






.gallery-intro{

padding:90px 10%;

text-align:center;

}



.gallery-intro h2{

font-size:45px;

}



.gallery-intro p{

max-width:850px;

margin:20px auto;

font-size:18px;

line-height:1.8;

}






.gallery-grid{

display:grid;

grid-template-columns:repeat(3,1fr);

gap:25px;

padding:60px 10%;

}




.gallery-box{

height:350px;

overflow:hidden;

border-radius:20px;

}



.gallery-box img{

width:100%;

height:100%;

object-fit:cover;

transition:.5s;

}



.gallery-box img:hover{

transform:scale(1.1);

}







/* ALL CARDS */


.service-container{

display:flex;

justify-content:center;

gap:30px;

flex-wrap:wrap;

margin-top:50px;

}




.service-card{

width:300px;

min-height:250px;

background:white;

padding:35px;

border-radius:15px;

display:flex;

flex-direction:column;

justify-content:center;

align-items:center;

text-align:center;

box-shadow:0 10px 30px rgba(0,0,0,.12);

}




.service-card i{

font-size:45px;

color:#D4AF37;

margin-bottom:20px;

}




/* EXPERIENCE 3 CARDS */


.experience-cards{

display:flex;

justify-content:center;

gap:30px;

flex-wrap:wrap;

}





/* HIGHLIGHTS 4 CARDS */


.highlights-cards{

display:grid;

grid-template-columns:repeat(4,1fr);

gap:30px;

}





.highlights-cards .service-card{

width:100%;

}







/* CTA */


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

display:flex;

justify-content:center;

align-items:center;

text-align:center;

color:white;

}




.reservation-banner div{

max-width:900px;

text-align:center;

}



.reservation-banner h2{

color:white;

font-size:45px;

}



.reservation-banner p{

margin:20px auto;

font-size:18px;

}



.reservation-banner .book-btn{

display:inline-block;

margin-top:20px;

}





@media(max-width:1000px){

.highlights-cards{

grid-template-columns:repeat(2,1fr);

}

}



@media(max-width:600px){

.highlights-cards{

grid-template-columns:1fr;

}

}

/* Gallery Video Banner Header Fix */

.video-banner{
    margin-top:70px;
}

</style>


</head>



<body>


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

<li><a href="index.php#about">About</a></li>

<li><a href="index.php#contact">Contact</a></li>


</ul>



<a href="booking.php" class="book-btn">

Book Now

</a>


</nav>

</header>






<section class="video-banner">


<video autoplay muted loop playsinline>

<source src="hotel-video.mp4" type="video/mp4">

</video>


<div class="video-overlay"></div>



<div class="video-content">


<p class="small-title">

ROYAL HAVEN EXPERIENCE

</p>


<h1>

A World Of Luxury & Elegance

</h1>


<p>

Explore the beauty, comfort and royal hospitality
of our five star hotel.

</p>



</div>


</section>






<section class="gallery-intro">


<p class="small-title">

OUR GALLERY

</p>



<h2>

Discover The Beauty Of Royal Haven

</h2>



<p>

Step into a world where luxury meets elegance.
Explore our magnificent rooms, dining spaces,
premium facilities and unforgettable experiences.

</p>


</section>


<section class="gallery-grid">


<?php while($row=mysqli_fetch_assoc($gallery)){ ?>


<div class="gallery-box">


<img src="admin/uploads/gallery/<?php echo $row['image']; ?>">


</div>


<?php } ?>


</section>

<!-- ROOMS GALLERY -->


<section class="gallery-intro">


<p class="small-title">

LUXURY ROOMS

</p>


<h2>

Elegant Stay Collection

</h2>



<p>

Discover our beautifully designed rooms and suites
created for comfort, relaxation and royal living.

</p>


</section>





<section class="gallery-grid">


<div class="gallery-box">

<img src="https://images.unsplash.com/photo-1590490360182-c33d57733427">

</div>


<div class="gallery-box">

<img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b">

</div>


<div class="gallery-box">

<img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32">

</div>


</section>








<!-- DINING GALLERY -->


<section class="gallery-intro">


<p class="small-title">

ROYAL DINING

</p>


<h2>

Taste Meets Elegance

</h2>



<p>

Experience fine dining spaces where delicious cuisine,
luxury atmosphere and exceptional service come together.

</p>


</section>






<section class="gallery-grid">


<div class="gallery-box">

<img src="https://images.unsplash.com/photo-1515003197210-e0cd71810b5f">

</div>



<div class="gallery-box">

<img src="https://images.unsplash.com/photo-1552566626-52f8b828add9">

</div>



<div class="gallery-box">

<img src="https://images.unsplash.com/photo-1544148103-0773bf10d330">

</div>


</section>








<!-- FACILITIES -->


<section class="gallery-intro">


<p class="small-title">

HOTEL FACILITIES

</p>



<h2>

Luxury Beyond Expectations

</h2>



</section>






<section class="gallery-grid">


<div class="gallery-box">

<img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef">

</div>



<div class="gallery-box">

<img src="https://images.unsplash.com/photo-1576678927484-cc907957088c">

</div>



<div class="gallery-box">

<img src="https://images.unsplash.com/photo-1566073771259-6a8506099945">

</div>



</section>









<!-- ROYAL EXPERIENCE -->


<section class="gallery-intro">


<p class="small-title">

ROYAL EXPERIENCE

</p>



<h2>

More Than Just A Hotel Stay

</h2>




<p>

At Royal Haven, every detail is designed to create
memorable moments. From luxurious rooms to
world-class dining and premium services.

</p>




<div class="service-container experience-cards">



<div class="service-card">


<i class="fa-solid fa-hotel"></i>


<h3>

Luxury Atmosphere

</h3>


<p>

Elegant architecture and premium interiors.

</p>


</div>






<div class="service-card">


<i class="fa-solid fa-star"></i>


<h3>

Five Star Service

</h3>


<p>

Exceptional hospitality from our professional team.

</p>


</div>






<div class="service-card">


<i class="fa-solid fa-heart"></i>


<h3>

Memorable Moments

</h3>


<p>

Perfect experiences for every guest.

</p>


</div>



</div>


</section>









<!-- ROYAL HAVEN HIGHLIGHTS -->


<section class="gallery-intro">


<p class="small-title">

ROYAL HAVEN HIGHLIGHTS

</p>




<h2>

Luxury That Defines Excellence

</h2>





<div class="service-container highlights-cards">



<div class="service-card">


<i class="fa-solid fa-hotel"></i>


<h3>

120+

</h3>


<p>

Luxury Rooms

</p>


</div>






<div class="service-card">


<i class="fa-solid fa-users"></i>


<h3>

5000+

</h3>


<p>

Happy Guests

</p>


</div>






<div class="service-card">


<i class="fa-solid fa-calendar-check"></i>


<h3>

15+

</h3>


<p>

Years Experience

</p>


</div>






<div class="service-card">


<i class="fa-solid fa-star"></i>


<h3>

5 Star

</h3>


<p>

Luxury Hospitality

</p>


</div>



</div>



</section>









<!-- CTA -->


<section class="reservation-banner">


<div>


<p class="small-title">

ROYAL HAVEN

</p>




<h2>

Experience The Royal Lifestyle

</h2>




<p>

Book your stay today and discover luxury rooms,
fine dining and exceptional hospitality.

</p>




<a href="booking.php" class="book-btn">

Reserve Your Stay

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