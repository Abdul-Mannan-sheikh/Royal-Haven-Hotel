<?php

session_start();


if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}


include "../config/db.php";



if(isset($_GET['id'])){


    $id = $_GET['id'];



    $query = mysqli_query(
        $conn,
        "DELETE FROM bookings WHERE id='$id'"
    );



    if($query){


        header("Location: bookings.php");

        exit();


    }


}



?>