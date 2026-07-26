<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}

include "../config/db.php";


if(isset($_GET['id'])){


    $id = $_GET['id'];


    // Get room name
    $get_room = mysqli_query(
        $conn,
        "SELECT room FROM bookings WHERE id='$id'"
    );


    if(mysqli_num_rows($get_room) > 0){


        $data = mysqli_fetch_assoc($get_room);

        $room = $data['room'];



        // Update booking status
        mysqli_query(
            $conn,
            "UPDATE bookings
             SET status='Cancelled'
             WHERE id='$id'"
        );



        // Make room available again
        mysqli_query(
            $conn,
            "UPDATE rooms
             SET status='Available'
             WHERE room_name='$room'"
        );


    }


}


header("Location: bookings.php");
exit();

?>