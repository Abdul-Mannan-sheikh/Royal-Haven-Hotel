<?php

session_start();


if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}


include "../config/db.php";


$message = "";



if(isset($_POST['add_gallery'])){


$title = $_POST['title'];


$image = $_FILES['image']['name'];


$tmp = $_FILES['image']['tmp_name'];


$folder = __DIR__ . "/uploads/gallery/" . $image;



if(move_uploaded_file($tmp,$folder)){


$query = mysqli_query(

$conn,

"INSERT INTO gallery(title,image)
VALUES('$title','$image')"

);



if($query){

$message = "Gallery Image Added Successfully";

}


}


}




$gallery = mysqli_query(

$conn,

"SELECT * FROM gallery ORDER BY id DESC"

);


// Delete Gallery Image

if(isset($_GET['delete'])){


$id = $_GET['delete'];


// image name get karo

$get_image = mysqli_query(
$conn,
"SELECT image FROM gallery WHERE id='$id'"
);


$image_data = mysqli_fetch_assoc($get_image);


$image_path = "uploads/gallery/".$image_data['image'];



// delete image from folder

if(file_exists($image_path)){

    unlink($image_path);

}


// delete from database

mysqli_query(
$conn,
"DELETE FROM gallery WHERE id='$id'"
);


header("Location: gallery.php");

exit();


}


?>



<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<title>Gallery Management | Royal Haven Admin</title>


<link rel="stylesheet" href="style.css">


<style>

.container{

padding:40px;

}


.form-box{

background:white;

padding:30px;

border-radius:15px;

}


input{

padding:12px;

width:300px;

margin:10px;

}


button{

padding:12px 30px;

background:#D4AF37;

border:none;

cursor:pointer;

}



.gallery-table{

margin-top:40px;

width:100%;

background:white;

}



.gallery-table img{

width:120px;

height:80px;

object-fit:cover;

border-radius:10px;

}

.delete-btn{

background:#dc3545;
color:white;
padding:8px 15px;
border-radius:5px;
text-decoration:none;

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

Gallery Management

</h1>


<p style="color:green;">

<?php echo $message; ?>

</p>




<div class="form-box">


<form method="POST" enctype="multipart/form-data">


<input 
type="text"
name="title"
placeholder="Image Title"
required>


<br>


<input 
type="file"
name="image"
required>


<br>


<button name="add_gallery">

Add Image

</button>



</form>



</div>






<table class="gallery-table" border="1">


<tr>

<th>ID</th>

<th>Title</th>

<th>Image</th>

<th>Action</th>

</tr>



<?php while($row=mysqli_fetch_assoc($gallery)){ ?>


<tr>


<td>
<?php echo $row['id']; ?>
</td>



<td>
<?php echo $row['title']; ?>
</td>



<td>

<img src="uploads/gallery/<?php echo $row['image']; ?>">

</td>

<td>

<a 
href="gallery.php?delete=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this image?')"
class="delete-btn">

Delete

</a>

</td>



</tr>


<?php } ?>


</table>



</div>


</body>

</html>