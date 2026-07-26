<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}

include "../config/db.php";


if(isset($_POST['add'])){


    $room_name = $_POST['room_name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $status = $_POST['status'];



    $query = mysqli_query(
        $conn,

        "INSERT INTO rooms 
        (room_name, price, image, description, status)

        VALUES

        ('$room_name',
        '$price',
        '$image',
        '$description',
        '$status')"

    );



    if($query){

        echo "

        <script>

        alert('Room Added Successfully');

        window.location='rooms.php';

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

<title>Add Room | Royal Haven</title>

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




<div class="admin-content">


<h1>
Add New Room
</h1>



<form method="POST">



<div class="input-box">

<label>
Room Name
</label>

<input type="text" name="room_name" required>

</div>




<div class="input-box">

<label>
Price Per Night
</label>

<input type="text" name="price" required>

</div>




<div class="input-box">

<label>
Room Image URL
</label>

<input 
type="text" 
name="image" 
placeholder="Paste image URL here"
required>

</div>




<div class="input-box">

<label>
Description
</label>

<textarea 
name="description">
</textarea>

</div>




<div class="input-box">

<label>
Status
</label>


<select name="status">


<option value="Available">
Available
</option>


<option value="Booked">
Booked
</option>


</select>


</div>




<button class="logout-btn" name="add">

Add Room

</button>



</form>



</div>



</body>

</html>