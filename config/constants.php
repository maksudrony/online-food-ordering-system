<?php
session_start();




define('SITEURL', 'http://localhost/food-order/');
//define('LOCALHOST', 'localhost');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_NAME', 'foodorder');

$conn = mysqli_connect("localhost", "root", "", "foodorder") or die(mysqli_error());
//$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());

$link = mysqli_connect("localhost", "root", "", "demo");


 ?>
