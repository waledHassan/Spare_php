<?php
session_start();
include("functions/connect.php");
   
if(! isset($_SESSION['user_id'])){
  echo "<a href='login.php' class='alert alert-warning text-center container'>Login First</a>";
    
}elseif(isset($_GET['action']) && $_GET['action'] == 'part'){

      $id = $_POST['id'];
      $user = $_SESSION['user_id'];
      $get = $conn -> prepare("SELECT * FROM cars_wishlist WHERE part_id = ? AND user_id = ?");
      $get -> execute(array($id , $user));
      $count = $get -> rowCount();

      if($count > 0){

             echo "<div class='alert alert-success text-center container'>Already Added</div>";

       }else{
              $stmt = $conn -> prepare("INSERT INTO cars_wishlist(part_id, quantity , user_id) VALUES (:carid , :quantity , :user)");
                $stmt -> execute(array(
                    "carid" => $id ,
                    "quantity" => 1,
                    "user" => $user
                ));
                echo "<div class='alert alert-success text-center container'>Done</div>";
          }


}elseif(isset($_GET['action']) && $_GET['action'] == 'elect'){

      $id = $_POST['id'];
      $user = $_SESSION['user_id'];
      $get = $conn -> prepare("SELECT * FROM cars_wishlist WHERE elect_id = ? AND user_id = ?");
      $get -> execute(array($id , $user));
      $count = $get -> rowCount();

  if($count > 0){

         echo "<div class='alert alert-success text-center container'>Already Added</div>";

   }else{
          $stmt = $conn -> prepare("INSERT INTO cars_wishlist(elect_id, quantity , user_id) VALUES (:carid , :quantity , :user)");
            $stmt -> execute(array(
                "carid" => $id ,
                "quantity" => 1,
                "user" => $user
            ));
            echo "<div class='alert alert-success text-center container'>Done</div>";
      }

}elseif(isset($_GET['action']) && $_GET['action'] == 'estate'){

      $id = $_POST['id'];
      $user = $_SESSION['user_id'];
      $get = $conn -> prepare("SELECT * FROM cars_wishlist WHERE estate_id = ? AND user_id = ?");
      $get -> execute(array($id , $user));
      $count = $get -> rowCount();

  if($count > 0){

      echo "<div class='alert alert-success text-center container'>Already Added</div>";

  }else{
        $stmt = $conn -> prepare("INSERT INTO cars_wishlist(estate_id, quantity , user_id) VALUES (:carid , :quantity , :user)");
          $stmt -> execute(array(
              "carid" => $id ,
              "quantity" => 1,
              "user" => $user
          ));
          echo "<div class='alert alert-success text-center container'>Done</div>";
    }
}
else{




$id = $_POST['id'];
$user = $_SESSION['user_id'];
$get = $conn -> prepare("SELECT * FROM cars_wishlist WHERE car_id = ? AND user_id = ?");
$get -> execute(array($id , $user));
$count = $get -> rowCount();

  if($count > 0){
    //    $stmt = $conn -> prepare("UPDATE cars_wishlist SET car_id= ? ,quantity= ? ,user_id = ? WHERE car_id = ? AND user_id =?");
    //    $stmt -> execute(array($get['car_id'] , ($get['quantity'] + 1) , $get['user_id'] , $id , $user ));
         echo "<div class='alert alert-success text-center container'>Already Added</div>";
  }else{
      $stmt = $conn -> prepare("INSERT INTO cars_wishlist(car_id, quantity , user_id) VALUES (:carid , :quantity , :user)");
        $stmt -> execute(array(
            "carid" => $id ,
            "quantity" => 1,
            "user" => $user
        ));
        echo "<div class='alert alert-success text-center container'>Done</div>";
  }
   

}

?>