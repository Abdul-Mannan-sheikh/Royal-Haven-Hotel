<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}


include "../config/db.php";


if(isset($_GET['id'])){


    $id = $_GET['id'];



    // Booking se room name lena
    $get_room = mysqli_query(
        $conn,
        "SELECT room FROM bookings WHERE id='$id'"
    );


    $data = mysqli_fetch_assoc($get_room);


    $room = $data['room'];



    // Booking status update
    mysqli_query(
        $conn,
        "UPDATE bookings
         SET status='Confirmed'
         WHERE id='$id'"
    );



    // Room status update
    mysqli_query(
        $conn,
        "UPDATE rooms
         SET status='Booked'
         WHERE room_name='$room'"
    );


}



header("Location: bookings.php");
exit();


?>