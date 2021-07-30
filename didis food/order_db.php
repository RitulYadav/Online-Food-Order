<?php
session_start();
include('connection.php');
$email = $_SESSION['em'];
$food_name = $_POST['food_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$place_order = $_POST['place'];

$query = "select name from registration where email = '$email'";
$result = mysqli_query($conn, $query);
$un = mysqli_fetch_assoc($result);

$customer_name = $un['name'];

$query2 = "insert into vieworder (customer_name,food_name,quantity,order_location,price)
    value ( '$customer_name','$food_name','$quantity', '$place_order','$price')";
$result2 = mysqli_query($conn, $query2);
if ($result2) {
    echo "<script>alert('Order successfull')</script>";
    header('Location:order.php');
} else {
    echo "incorrect";
}
