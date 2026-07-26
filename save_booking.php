<?php

include "config/db.php";


if(isset($_POST['name'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $room = $_POST['room'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $guests = $_POST['guests'];
    $message = $_POST['message'];



    $query = "INSERT INTO bookings
    (name,email,phone,room,checkin,checkout,guests,message)

    VALUES

    ('$name',
     '$email',
     '$phone',
     '$room',
     '$checkin',
     '$checkout',
     '$guests',
     '$message')";



    $result = mysqli_query($conn,$query);



    if($result){

        echo "

        <script>

        alert('Your Booking Has Been Confirmed Successfully!');

        window.location='index.php';

        </script>

        ";

    }

    else{


        echo "Booking Failed: ".mysqli_error($conn);


    }



}

?>