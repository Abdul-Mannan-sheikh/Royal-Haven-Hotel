<?php

session_start();


if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}


include "../config/db.php";


$id = $_GET['id'];



$get = mysqli_query(
    $conn,
    "SELECT * FROM rooms WHERE id='$id'"
);


$row = mysqli_fetch_assoc($get);





if(isset($_POST['update'])){


    $room_name = $_POST['room_name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $status = $_POST['status'];



    $update = mysqli_query(

        $conn,

        "UPDATE rooms SET

        room_name='$room_name',
        price='$price',
        image='$image',
        description='$description',
        status='$status'

        WHERE id='$id'"

    );



    if($update){


        echo "

        <script>

        alert('Room Updated Successfully');

        window.location='rooms.php';

        </script>

        ";


    }


}


?>



<!DOCTYPE html>
<html lang="en">

<head>


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Edit Room | Royal Haven Admin</title>


<link rel="stylesheet" href="style.css">


<style>


.edit-box{

background:white;
padding:40px;
border-radius:20px;
box-shadow:0 15px 35px rgba(0,0,0,.12);
max-width:800px;

}



.preview img{

width:200px;
height:130px;
object-fit:cover;
border-radius:15px;
margin-bottom:20px;

}


</style>


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
Edit Room
</h1>


<p>
Update Royal Haven Room Details
</p>







<div class="edit-box">





<div class="preview">

<img src="<?php echo $row['image']; ?>">

</div>








<form method="POST">





<div class="input-box">

<label>
Room Name
</label>

<input 
type="text"
name="room_name"
value="<?php echo $row['room_name']; ?>"
required>

</div>







<div class="input-box">

<label>
Price Per Night
</label>


<input 
type="text"
name="price"
value="<?php echo $row['price']; ?>"
required>


</div>








<div class="input-box">

<label>
Room Image URL
</label>


<input 
type="text"
name="image"
value="<?php echo $row['image']; ?>"
required>


</div>








<div class="input-box">

<label>
Description
</label>


<textarea 
name="description"><?php echo $row['description']; ?></textarea>


</div>








<div class="input-box">

<label>
Status
</label>


<select name="status">


<option <?php if($row['status']=="Available") echo "selected"; ?>>
Available
</option>


<option <?php if($row['status']=="Booked") echo "selected"; ?>>
Booked
</option>


</select>


</div>







<button class="logout-btn" name="update">

Update Room

</button>





</form>




</div>






</div>





</div>






</body>


</html>