<?php
$name = $_POST['name'];
$description = $_POST['description'];
$available = $_POST['available'];
$stats = $_POST['stats'];
$featured = isset($_POST['featured']) ? 1 : 0;

// get image
$image = $_FILES['image'];
echo "<pre>";
print_r($image);
// echo $name . "<br>" . $description . "<br>" . $available . "<br>" . $stats . "<br>" . $featured;


?>