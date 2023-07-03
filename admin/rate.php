<?php
ob_start();
session_start();
include("connect.php");
include("functions/function.php");
?> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Cart </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/favicon.png">
  </head>
  <body>


<?php


  
      $select = $conn -> prepare("SELECT * FROM wishlist");
      $select -> execute();
      $rows = $select -> fetch();
      $count = $select -> rowCount();
      @$quantity = $rows['quantity'];
      $product_id = $rows['product_id'];

   if($count > 0){

      $update = $conn -> prepare("UPDATE rate SET rate= ? WHERE product_id = ? ");
      $update -> execute(array($rate + 1 ,$product_id));
   
  
   }else{

     
     $stmt = $conn -> prepare("INSERT INTO rate(product_id) VALUES (:product_id)");
      $stmt -> execute(array(
          'product_id' => $product_id
      ));
    }
  

?>
   </body>
    </html>