<?php

include "config/db.php";


$message = "";


if(isset($_POST['send'])){


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$msg = $_POST['message'];



$stmt = mysqli_prepare(
$conn,
"INSERT INTO contact_messages
(name,email,phone,service,message)
VALUES(?,?,?,?,?)"
);



mysqli_stmt_bind_param(
$stmt,
"sssss",
$name,
$email,
$phone,
$service,
$msg
);


if(mysqli_stmt_execute($stmt)){


$message = "Your message has been sent successfully!";


}else{


$message = "Something went wrong!";


}



}


?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contact | Royal Haven Hotel</title>


<link rel="stylesheet" href="style.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">



<style>


/* CONTACT HERO */


.contact-hero{


height:90vh;


background:


linear-gradient(
rgba(0,0,0,.55),
rgba(0,0,0,.65)
),


url("https://images.unsplash.com/photo-1600607688969-a5bfcd646154");



background-size:cover;

background-position:center;

background-attachment:fixed;



display:flex;

align-items:center;

justify-content:center;

text-align:center;

color:white;


}



.contact-hero h1{


font-size:75px;

color:white;


}



.contact-hero p{


font-size:22px;

color:white;


}





/* INTRO */


.contact-intro{


padding:100px 10%;


display:flex;

align-items:center;

gap:60px;


}



.contact-image{


width:50%;


}



.contact-image img{


width:100%;

height:500px;

object-fit:cover;

border-radius:20px;


}




.contact-text{


width:50%;


}




.contact-text h2{


font-size:45px;


}



.contact-text p{


font-size:18px;

line-height:1.8;


}






@media(max-width:900px){


.contact-intro{

flex-direction:column;

}


.contact-image,
.contact-text{

width:100%;

}



.contact-hero h1{

font-size:45px;

}



}


.contact-info{

padding:100px 10%;

text-align:center;

}




.section-title h2,
.form-heading h2{

font-size:45px;

}





.contact-cards{


display:flex;

justify-content:center;

gap:30px;

flex-wrap:wrap;

margin-top:50px;


}




.contact-card{


width:260px;

padding:40px 25px;

background:white;

border-radius:20px;

box-shadow:0 10px 30px rgba(0,0,0,.12);


}





.contact-card i{


font-size:40px;

color:#D4AF37;

margin-bottom:20px;


}





.contact-card h3{


font-size:22px;


}






.contact-form-section{


padding:100px 10%;


background:#f8f8f8;

text-align:center;


}





.luxury-form{


max-width:900px;

margin:auto;

margin-top:40px;


}




.form-row{


display:flex;

gap:20px;

margin-bottom:20px;


}




.luxury-form input,
.luxury-form select,
.luxury-form textarea{


width:100%;

padding:18px;

border:none;

outline:none;

font-size:16px;


}




.luxury-form textarea{


height:160px;

margin-bottom:25px;


}





.luxury-form button{


padding:15px 45px;

background:#D4AF37;

border:none;

cursor:pointer;

font-size:17px;

font-weight:600;


}





@media(max-width:700px){


.form-row{

flex-direction:column;

}


}

.concierge-section{

padding:100px 10%;

display:flex;

align-items:center;

gap:60px;

}



.concierge-image{

width:50%;

}



.concierge-image img{

width:100%;

height:500px;

object-fit:cover;

border-radius:20px;

}




.concierge-content{

width:50%;

}




.concierge-cards{

display:flex;

gap:20px;

margin-top:40px;

}



.concierge-cards div{

text-align:center;

}



.concierge-cards i{

font-size:35px;

color:#D4AF37;

}





.location-section{

padding:100px 10%;

text-align:center;

}




.map-box iframe{

width:100%;

height:450px;

border:0;

border-radius:20px;

margin-top:40px;

}





.contact-banner{

height:500px;

background:

linear-gradient(
rgba(0,0,0,.6),
rgba(0,0,0,.6)
),

url("https://images.unsplash.com/photo-1564501049412-61c2a3083791");

background-size:cover;

background-position:center;

background-attachment:fixed;

display:flex;

align-items:center;

justify-content:center;

text-align:center;

color:white;

}




.contact-banner h2{

font-size:55px;

color:white;

}




.contact-banner p{

font-size:20px;

color:white;

}




@media(max-width:900px){


.concierge-section{

flex-direction:column;

}


.concierge-image,
.concierge-content{

width:100%;

}



.concierge-cards{

flex-direction:column;

}


}
.success-message{

width:80%;
margin:30px auto;
padding:15px;
background:#e8f8e8;
color:green;
border-radius:10px;
font-size:18px;
text-align:center;

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


<section class="contact-hero">


<div>


<p class="small-title">

CONTACT ROYAL HAVEN

</p>



<h1>

Your Gateway To Luxury Hospitality

</h1>




<p>

We are always ready to welcome you
and create unforgettable experiences.

</p>




</div>


</section>









<!-- INTRO -->


<section class="contact-intro">



<div class="contact-image">


<img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa">


</div>







<div class="contact-text">


<p class="small-title">

GET IN TOUCH

</p>




<h2>

Experience Royal Service

</h2>




<p>

Whether you are planning a luxury stay,
special event or unforgettable dining experience,
our dedicated team is always available to assist you.

</p>




<p>

At Royal Haven, every guest receives
personal attention and world-class hospitality.

</p>




</div>




</section>

<!-- CONTACT INFORMATION -->


<section class="contact-info">



<div class="section-title">


<p class="small-title">

ROYAL ASSISTANCE

</p>



<h2>

Connect With Our Team

</h2>


</div>






<div class="contact-cards">






<div class="contact-card">


<i class="fa-solid fa-location-dot"></i>


<h3>

Hotel Location

</h3>


<p>

Karachi, Pakistan

</p>


</div>








<div class="contact-card">


<i class="fa-solid fa-phone"></i>


<h3>

Reservations

</h3>


<p>

+92 300 1234567

</p>


</div>








<div class="contact-card">


<i class="fa-solid fa-envelope"></i>


<h3>

Email Support

</h3>


<p>

info@royalhavenhotel.com

</p>


</div>








<div class="contact-card">


<i class="fa-solid fa-clock"></i>


<h3>

Guest Support

</h3>


<p>

Available 24/7

</p>


</div>





</div>


</section>









<!-- CONTACT FORM -->


<?php if($message!=""){ ?>

<p style="color:green;text-align:center;">
<?php echo $message; ?>
</p>

<?php } ?>


<section class="contact-form-section">





<div class="form-heading">


<p class="small-title">

SEND INQUIRY

</p>



<h2>

We Would Love To Hear From You

</h2>



<p>

Fill the form and our hospitality team
will contact you shortly.

</p>



</div>







<form class="luxury-form" method="POST">


<div class="form-row">


<input 
type="text" 
name="name"
placeholder="Full Name"
required>



<input 
type="email"
name="email"
placeholder="Email Address"
required>


</div>





<div class="form-row">


<input 
type="text"
name="phone"
placeholder="Phone Number">



<select name="service">


<option>Select Service</option>


<option>Room Booking</option>


<option>Fine Dining</option>


<option>Events</option>


<option>General Inquiry</option>


</select>


</div>






<textarea 
name="message"
placeholder="Your Message"
required></textarea>






<button name="send">

Send Inquiry

</button>



</form>



</section>

<!-- CONCIERGE SECTION -->


<section class="concierge-section">



<div class="concierge-image">


<img src="https://images.unsplash.com/photo-1566073771259-6a8506099945">


</div>







<div class="concierge-content">


<p class="small-title">

ROYAL CONCIERGE

</p>




<h2>

Always At Your Service

</h2>




<p>

Our dedicated concierge team ensures every
moment of your stay is comfortable, smooth
and memorable.

</p>







<div class="concierge-cards">





<div>

<i class="fa-solid fa-car"></i>

<h3>

Airport Pickup

</h3>


</div>







<div>

<i class="fa-solid fa-calendar-check"></i>

<h3>

Event Planning

</h3>


</div>








<div>

<i class="fa-solid fa-bell-concierge"></i>

<h3>

Guest Assistance

</h3>


</div>






</div>



</div>



</section>









<!-- LOCATION -->


<section class="location-section">



<p class="small-title">

VISIT ROYAL HAVEN

</p>



<h2>

Find Us Easily

</h2>




<div class="map-box">


<iframe

src="https://maps.google.com/maps?q=Karachi%20Pakistan&t=&z=13&ie=UTF8&iwloc=&output=embed"

loading="lazy">

</iframe>


</div>




</section>









<!-- FINAL BANNER -->


<section class="contact-banner">



<div>


<p class="small-title">

ROYAL HAVEN

</p>




<h2>

Your Comfort Is Our Priority

</h2>




<p>

Experience luxury hospitality,
personalized service and unforgettable moments.

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