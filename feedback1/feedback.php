<?php 
ob_start(); 
require 'config.php';

$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];


$query = mysqli_query($con, "INSERT INTO `poll`(`name`, `email`,  `suggestions`) VALUES ('$name','$email', '$comments')");
echo '<script>alert("Thank You! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
?>