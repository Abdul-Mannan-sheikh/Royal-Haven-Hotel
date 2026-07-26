<?php

session_start();

include "../config/db.php";


if(isset($_POST['login'])){


    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = mysqli_query(
        $conn,
        "SELECT * FROM admin_users WHERE email='$email'"
    );


    if(mysqli_num_rows($query) > 0){


        $admin = mysqli_fetch_assoc($query);


        if(password_verify($password, $admin['password'])){


            $_SESSION['admin'] = $admin['email'];


            header("Location: dashboard.php");

            exit();


        }

        else{

            $error = "Invalid Email or Password";

        }


    }

    else{

        $error = "Invalid Email or Password";

    }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Login | Royal Haven Hotel</title>

<link rel="stylesheet" href="../style.css">

</head>


<body>


<section class="booking-page">


<div class="booking-container">


<h1>
Admin Login
</h1>


<p>
Royal Haven Hotel Management Panel
</p>


<?php

if(isset($error)){

echo "<p style='color:red;'>$error</p>";

}

?>



<form method="POST">



<div class="input-box">

<label>Email</label>

<input 
type="email"
name="email"
placeholder="Enter admin email"
required>

</div>



<div class="input-box">

<label>Password</label>

<input 
type="password"
name="password"
placeholder="Enter password"
required>

</div>



<button name="login">

Login

</button>


</form>



</div>


</section>


</body>

</html>