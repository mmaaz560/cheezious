<?php
include './config.php';
$name = $_POST['name'];
$description = $_POST['description'];
$availible = $_POST['available'];
$stats = $_POST['stats'];
$featured = isset($_POST['featured']) ? 1 : 0;
// echo $name . "<br>" . $description . "<br>" . $availible . "<br>" . $stats . "<br>" . $featured;

// get image
$imagename = $_FILES['image']['name'];
$tampname = $_FILES['image']['tmp_name'];

//to store image in a server
move_uploaded_file($tampname, './category_image/' . $imagename);

$insert = "INSERT INTO category (name,image,description,availability,status,featured) VALUES ('$name','$imagename','$description','$availible',$stats,'$featured')";

$result= mysqli_query($connection,$insert);



?>