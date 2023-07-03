<?php
// session_start();

     include('assets/layouts/head.php');
    include("functions/connect.php");

    if(isset($_SESSION['user'])){
        header("location:index.php");
        exit();
    }


   if($_SERVER['REQUEST_METHOD'] == 'POST') {

      if(isset($_POST['password'])){

            if(empty($_POST['password'])){
                $formerrors[] =  'Sorry Password Can’t Be Empty';
            }
        
            
              @$filterdpassword = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
              $pass = $filterdpassword;
          }

          if(isset($_POST['name'])){

            @$filterdUserFirstName = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        
            if(strlen($_POST['name']) < 2){
                 $formerrors[] =  'Your Name Can’t Be Less Than 2 Characters' ;
            }
            if(strlen($_POST['name']) > 15){
                $formerrors[] =  'Your Name Can’t Be More Than 10 Characters' ;
            }
           }

           if(empty($formerrors)){
            $stmt = $conn -> prepare("SELECT
                                            *
                                      FROM
                                            users
                                      WHERE
                                            firstname = ?
                                      AND
                                            password = ?");

            $stmt -> execute(array($filterdUserFirstName , $pass));
            $get = $stmt -> fetch();
            $count = $stmt -> rowCount();

            if($count > 0){
                $_SESSION['user']     = $get['firstname'];
                $_SESSION['user_id']  = $get['id'];
                header("location:index.php");
                exit();
            }
    }else{
          echo "<div class='alert alert-danger text-center container'>This Account Doesn’t Exist Try Again</div>";
          header('refresh:2;url=login.php');
    }

  }else{
         header("location:index.php");
  }
?>