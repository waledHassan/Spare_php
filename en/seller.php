<?php

  
include("functions/connect.php");

    $name      = $_POST['name'];
    $email     = $_POST['email'];
    $phone     = $_POST['phone'];
    $enquiry   = $_POST['enquiry'];

   $formerrors = array();

if(isset($_POST['name'])){

    @$filterdUserFirstName = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);

    if(strlen($_POST['name']) < 2){
         $formerrors[] =  'Your Name Can’t Be Less Than 2 Characters' ;
    }
    if(strlen($_POST['name']) > 50){
        $formerrors[] =  'Your Name Can’t Be More Than 50 Characters' ;
    }

}   

if(isset($_POST['email'])){
    @$filterdemail = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

     if(filter_var($filterdemail , FILTER_VALIDATE_EMAIL) != true ){
        $formerrors[] =  "This Email Is Not Valid";  
     }
}

if(isset($_POST['phone'])){
@$filterdphone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);

    if(filter_var($filterdphone , FILTER_SANITIZE_STRING) != true ){
    $formerrors[] =  "This phone Is Not Valid";  
    }
}

   if(empty($formerrors)){
 
          $stmt = $conn -> prepare("INSERT INTO contact_seller(name, email , phone , enquiry) VALUES (:name , :email , :phone , :enquiry)");
            $stmt -> execute(array(
                "name"     => $name ,
                "email"   => $email,
                "phone"   => $phone,
                "enquiry" => $enquiry,
            ));
  echo "<div class='alert alert-success text-center container'>Your Message Sent Successfully </div>";
        }else{
            foreach($formerrors as $error){
                echo  "<div class='alert alert-danger text-center'> ". $error . "</div>";
            }
        }
 ?>     