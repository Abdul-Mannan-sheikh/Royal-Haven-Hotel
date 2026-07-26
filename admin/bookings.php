<?php

session_start();


if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}


include "../config/db.php";



$query = mysqli_query(
    $conn,
    "SELECT id, name, room, checkin, checkout, status 
     FROM bookings 
     ORDER BY id DESC"
);



if(!$query){

    die("Database Error: " . mysqli_error($conn));

}


?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Bookings | Royal Haven Admin</title>

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


<a href="logout.php">
Logout
</a>


</div>







<div class="admin-content">


<h1>
All Bookings
</h1>


<p>
Manage hotel reservations
</p>




<table>


<tr>

<th>ID</th>

<th>Name</th>

<th>Room</th>

<th>Check In</th>

<th>Check Out</th>

<th>Status</th>

<th>Action</th>


</tr>





<?php while($row = mysqli_fetch_assoc($query)){ ?>


<tr>


<td>
<?php echo $row['id']; ?>
</td>


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



<td>

<?php echo $row['status']; ?>

</td>




<td>


<a href="confirm_booking.php?id=<?php echo $row['id']; ?>" 
class="logout-btn">

Confirm

</a>



<br><br>



<a href="cancel_booking.php?id=<?php echo $row['id']; ?>" 
class="logout-btn">

Cancel

</a>



</td>



</tr>



<?php } ?>



</table>




</div>


</div>



</body>

</html>