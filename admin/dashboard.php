<?php

session_start();


if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}


include "../config/db.php";



// Total Bookings

$booking_query = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM bookings"
);

$booking_data = mysqli_fetch_assoc($booking_query);

$total_bookings = $booking_data['total'];




// Total Rooms

$room_query = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM rooms"
);

$room_data = mysqli_fetch_assoc($room_query);

$total_rooms = $room_data['total'];




// Available Rooms

$available_query = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM rooms WHERE status='Available'"
);

$available_data = mysqli_fetch_assoc($available_query);

$available_rooms = $available_data['total'];




// Total Customers

$customer_query = mysqli_query(
    $conn,
    "SELECT COUNT(DISTINCT email) AS total FROM bookings"
);

// Total Messages

$message_query = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM contact_messages"
);

$message_data = mysqli_fetch_assoc($message_query);

$total_messages = $message_data['total'];

$customer_data = mysqli_fetch_assoc($customer_query);

$total_customers = $customer_data['total'];




// Recent Bookings

$recent_booking = mysqli_query(
    $conn,
    "SELECT * FROM bookings ORDER BY id DESC LIMIT 5"
);




// Recent Rooms

$recent_rooms = mysqli_query(
    $conn,
    "SELECT * FROM rooms ORDER BY id DESC LIMIT 5"
);



?>



<!DOCTYPE html>
<html lang="en">


<head>


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Dashboard | Royal Haven Admin</title>


<link rel="stylesheet" href="style.css">


</head>



<body>



<div class="admin-top">


<div class="admin-logo">

Royal Haven Admin

</div>



<a href="logout.php" class="logout-btn">

Logout

</a>



</div>







<div class="admin-layout">



<div class="sidebar">


<a href="dashboard.php">
Dashboard
</a>


<a href="bookings.php">
Bookings
</a>


<a href="rooms.php">
Rooms
</a>


<a href="add_room.php">
Add Room
</a>


<a href="messages.php">
Messages
</a>


<a href="gallery.php">
Gallery
</a>


<a href="logout.php">
Logout
</a>


</div>









<div class="admin-content">



<h1>
Dashboard
</h1>


<p>
Welcome to Royal Haven Hotel Management System
</p>







<div class="dashboard-cards">



<div class="admin-card">

<h2>
<?php echo $total_rooms; ?>
</h2>

<p>
Total Rooms
</p>

</div>






<div class="admin-card">

<h2>
<?php echo $total_bookings; ?>
</h2>

<p>
Total Bookings
</p>

</div>







<div class="admin-card">

<h2>
<?php echo $available_rooms; ?>
</h2>

<p>
Available Rooms
</p>

</div>







<div class="admin-card">

<h2>
<?php echo $total_customers; ?>
</h2>

<p>
Customers
</p>

</div>


<div class="admin-card">

<h2>
<?php echo $total_messages; ?>
</h2>

<p>
Messages
</p>

</div>




</div>










<h2 class="recent-title">

Recent Bookings

</h2>





<table>


<tr>

<th>
Name
</th>

<th>
Room
</th>

<th>
Check In
</th>

<th>
Check Out
</th>

</tr>



<?php while($row=mysqli_fetch_assoc($recent_booking)){ ?>


<tr>


<td>
<?php echo $row['name']; ?>
</td>


<td>
<?php echo $row['room']; ?>
</td>


<td>
<?php echo $row['checkin']; ?>
</td>


<td>
<?php echo $row['checkout']; ?>
</td>



</tr>



<?php } ?>


</table>








<h2 class="recent-title">

Recent Rooms

</h2>






<table>


<tr>

<th>
Room Name
</th>

<th>
Price
</th>

<th>
Status
</th>

</tr>





<?php while($room=mysqli_fetch_assoc($recent_rooms)){ ?>


<tr>


<td>
<?php echo $room['room_name']; ?>
</td>


<td>
Rs. <?php echo $room['price']; ?>
</td>


<td>
<?php echo $room['status']; ?>
</td>


</tr>


<?php } ?>



</table>





</div>



</div>






</body>


</html>