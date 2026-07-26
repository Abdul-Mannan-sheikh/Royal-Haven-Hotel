<?php

session_start();


if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}


include "../config/db.php";



$query = mysqli_query(
$conn,
"SELECT * FROM contact_messages ORDER BY id DESC"
);


?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<title>Contact Messages | Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<style>

body{

background:#f5f5f5;

}


.card{

margin:40px;

border-radius:15px;

}



</style>


</head>


<body>


<div class="container">


<div class="card shadow p-4">


<h2 class="mb-4">
Customer Messages
</h2>



<table class="table table-bordered table-hover">


<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Phone</th>

<th>Message</th>

<th>Date</th>

<th>Action</th>

</tr>



<?php while($row=mysqli_fetch_assoc($query)){ ?>


<tr>


<td>
<?= $row['id']; ?>
</td>


<td>
<?= $row['name']; ?>
</td>


<td>
<?= $row['email']; ?>
</td>


<td>
<?= $row['phone']; ?>
</td>


<td>
<?= $row['message']; ?>
</td>


<td>
<?= $row['created_at']; ?>
</td>


<td>

<a 
href="delete_message.php?id=<?= $row['id']; ?>"
onclick="return confirm('Delete this message?')"
class="btn btn-danger btn-sm">

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