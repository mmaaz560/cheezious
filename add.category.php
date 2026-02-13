<?php
$cate_name = $_POST['cate_name'];

include './config.php';
$insert = "INSERT INTO categories (name) VALUES ('$cate_name') ";
$result = mysqli_query($connection,$insert);

header("Location: ./admin-categories.php");
?>