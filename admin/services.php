<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}


include "../config/db.php";


$message="";


// ADD SERVICE

if(isset($_POST['add_service'])){


$title = $_POST['title'];
$icon = $_POST['icon'];
$description = $_POST['description'];



$query = mysqli_query(
$conn,
"INSERT INTO services(title,icon,description)
VALUES('$title','$icon','$description')"
);



if($query){

$message="Service Added Successfully";

}


}



// DELETE SERVICE


if(isset($_GET['delete'])){


$id=$_GET['delete'];


mysqli_query(
$conn,
"DELETE FROM services WHERE id='$id'"
);


header("Location: services.php");

exit();


}



// FETCH SERVICES


$services = mysqli_query(
$conn,
"SELECT * FROM services ORDER BY id DESC"
);


?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<title>Services Management | Admin</title>


<link rel="stylesheet" href="style.css">


<style>

.container{

padding:40px;

}


.box{

background:white;

padding:30px;

border-radius:15px;

}


input,textarea{

width:350px;

padding:12px;

margin:10px;

}


textarea{

height:120px;

}


button{

background:#D4AF37;

border:none;

padding:12px 30px;

cursor:pointer;

}



table{

width:100%;

margin-top:40px;

background:white;

}



th,td{

padding:15px;

text-align:center;

}


</style>


</head>


<body>



<div class="admin-top">

<div class="admin-logo">

Royal Haven Admin

</div>

</div>




<div class="container">


<h1>
Services Management
</h1>



<p style="color:green;">
<?php echo $message; ?>
</p>




<div class="box">


<form method="POST">



<input 
type="text"
name="title"
placeholder="Service Title"
required>


<br>



<input 
type="text"
name="icon"
placeholder="Font Awesome Icon"
required>


<br>



<textarea
name="description"
placeholder="Service Description"
required></textarea>


<br>



<button name="add_service">

Add Service

</button>



</form>


</div>







<table border="1">


<tr>

<th>ID</th>

<th>Title</th>

<th>Icon</th>

<th>Description</th>

<th>Action</th>

</tr>



<?php while($row=mysqli_fetch_assoc($services)){ ?>


<tr>


<td>
<?php echo $row['id']; ?>
</td>



<td>
<?php echo $row['title']; ?>
</td>



<td>
<?php echo $row['icon']; ?>
</td>



<td>
<?php echo $row['description']; ?>
</td>



<td>

<a href="services.php?delete=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this service?')">

Delete

</a>

</td>



</tr>


<?php } ?>



</table>



</div>



</body>

</html>