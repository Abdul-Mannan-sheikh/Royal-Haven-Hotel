<?php

include "config/db.php";


$room_selected = "";


if(isset($_GET['room'])){

    $room_selected = $_GET['room'];

}



if(isset($_POST['book'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $room = $_POST['room'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $guests = $_POST['guests'];
    $message = $_POST['message'];





    // Save Booking With Pending Status

    $query = mysqli_query(

        $conn,

        "INSERT INTO bookings
        (name,email,phone,room,checkin,checkout,guests,message,status)

        VALUES

        ('$name',
        '$email',
        '$phone',
        '$room',
        '$checkin',
        '$checkout',
        '$guests',
        '$message',
        'Pending')"

    );





    if($query){


        echo "

        <script>

        alert('Booking Submitted Successfully');

        window.location='index.php';

        </script>

        ";


    }


    else{


        echo mysqli_error($conn);


    }



}


?>



<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Book Your Stay | Royal Haven Hotel</title>


<link rel="stylesheet" href="style.css">


</head>



<body>




<header>


<nav>


<div class="logo">

Royal Haven

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
<a href="index.php#rooms">
Rooms
</a>
</li>


<li>
<a href="booking.php">
Booking
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







<section class="booking-page">


<div class="booking-container">



<h1>

Reserve Your Luxury Stay

</h1>




<p>

Experience comfort, elegance and unforgettable hospitality at Royal Haven Hotel.

</p>







<form method="POST">





<div class="input-box">

<label>
Full Name
</label>


<input 
type="text"
name="name"
placeholder="Enter your name"
required>


</div>







<div class="input-box">

<label>
Email Address
</label>


<input 
type="email"
name="email"
placeholder="Enter your email"
required>


</div>







<div class="input-box">

<label>
Phone Number
</label>


<input 
type="text"
name="phone"
placeholder="Enter phone number"
required>


</div>







<div class="input-box">

<label>
Select Room
</label>



<select name="room" required>



<option value="">
Choose Room
</option>




<option value="Royal Deluxe Room"
<?php if($room_selected=="Royal Deluxe Room") echo "selected"; ?>>

Royal Deluxe Room

</option>




<option value="Executive Suite"
<?php if($room_selected=="Executive Suite") echo "selected"; ?>>

Executive Suite

</option>





<option value="Royal Presidential Suite"
<?php if($room_selected=="Royal Presidential Suite") echo "selected"; ?>>

Royal Presidential Suite

</option>




</select>


</div>







<div class="date-box">



<div class="input-box">


<label>
Check In
</label>


<input 
type="date"
name="checkin"
required>


</div>







<div class="input-box">


<label>
Check Out
</label>


<input 
type="date"
name="checkout"
required>


</div>




</div>








<div class="input-box">


<label>
Guests
</label>


<input 
type="number"
name="guests"
placeholder="Number of guests"
required>


</div>








<div class="input-box">


<label>
Special Request
</label>


<textarea 
name="message"
rows="5"
placeholder="Any special request">
</textarea>


</div>








<button name="book" type="submit">

Confirm Booking

</button>







</form>




</div>



</section>





<script src="script.js"></script>

</body>

</html>