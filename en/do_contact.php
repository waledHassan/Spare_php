<?php


$name = $_POST['name'];
$email   = $_POST['email'];
$phone = $_POST['phone'];
$message   = $_POST['message'];

include("functions/connect.php");


$stmt = $conn -> prepare("INSERT INTO messages(username, email, phone, message) VALUES (:name , :email , :phone , :message)");
$stmt -> execute(array(
    "name" => $name,
    "email" => $email,
    "phone" => $phone,
    "message" => $message,
));

echo "<h3 class='alert alert-primary text-center text-black'>Thanks For Your Message</h3>"


?>