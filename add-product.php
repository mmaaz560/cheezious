<?php
include './config.php';
$name = $_POST['name'];
$price = $_POST['price'];
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

$insert = "INSERT INTO products (name,price,image,discription,availability,status,featured) VALUES ('$name','$price','$imagename','$description','$availible','$stats','$featured')";

$result= mysqli_query($connection,$insert);

header("Location: ./admin-categories.php")


?>