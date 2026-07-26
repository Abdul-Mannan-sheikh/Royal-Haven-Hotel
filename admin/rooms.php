<?php

session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

include "../config/db.php";

$query = mysqli_query(
    $conn,
    "SELECT * FROM rooms ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Rooms Management | Royal Haven</title>

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

<a href="#">
Customers
</a>

<a href="logout.php">
Logout
</a>


</div>




<div class="admin-content">


<h1>
Rooms Management
</h1>


<p>
Manage Royal Haven Luxury Rooms
</p>



<a href="add_room.php" class="logout-btn">
+ Add New Room
</a>




<table>


<tr>

<th>ID</th>
<th>Image</th>
<th>Room Name</th>
<th>Price</th>
<th>Status</th>
<th>Description</th>
<th>Action</th>

</tr>




<?php while($row = mysqli_fetch_assoc($query)){ ?>


<tr>


<td>
<?php echo $row['id']; ?>
</td>



<td>

<img src="<?php echo $row['image']; ?>"
style="width:100px;height:70px;object-fit:cover;border-radius:10px;"
alt="Room Image">

</td>




<td>
<?php echo $row['room_name']; ?>
</td>




<td>
Rs. <?php echo $row['price']; ?>
</td>




<td>
<?php echo $row['status']; ?>
</td>




<td>
<?php echo $row['description']; ?>
</td>




<td>


<a href="edit_room.php?id=<?php echo $row['id']; ?>" class="logout-btn">
Edit
</a>


<br><br>


<a href="delete_room.php?id=<?php echo $row['id']; ?>" class="logout-btn">
Delete
</a>



</td>



</tr>



<?php } ?>



</table>



</div>


</div>



</body>

</html>