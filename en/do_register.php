<?php 
ob_start();
include('assets/layouts/head.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $formerrors = array();

if(isset($_POST['firstname']) && isset($_POST['lastname'])){

    @$filterdUserFirstName = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);

    if(strlen($_POST['firstname']) < 2){
         $formerrors[] =  'Your Name Can’t Be Less Than 2 Characters' ;
    }
    if(strlen($_POST['firstname']) > 15){
        $formerrors[] =  'Your Name Can’t Be More Than 10 Characters' ;
    }

    @$filterdUserLastName = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);

    if(strlen($_POST['lastname']) < 2){
        $formerrors[] =  'Your  LastName Can’t Be Less Than 2 Characters' ;
    }
    if(strlen($_POST['lastname']) > 15){
        $formerrors[] =  'Your LastName Can’t Be More Than 10 Characters' ;
    }
}
       //  #########################  end first name AND Last name validation  ##############

       if(isset($_POST['email'])){
        @$filterdemail = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

         if(filter_var($filterdemail , FILTER_VALIDATE_EMAIL) != true ){
            $formerrors[] =  "This Email Is Not Valid";  
         }
      }

   //  #################   end email Validation #########################3

if(isset($_POST['password1']) && isset($_POST['password2'])){

    if(empty($_POST['password1'])){
        $formerrors[] =  'Sorry Password Can’t Be Empty';
    }

    
      @$filterdpassword = filter_var($_POST['password1'], FILTER_SANITIZE_STRING);
      $password = $filterdpassword;
      if($_POST['password1'] !== $_POST['password2'] ){
        $formerrors[] =  'Sorry Password Is Not Match' ;
      }
  }

//   ####################### End Password Validation #####################


//      Check If Rigister User Is Exist
  if(empty($formerrors)){

$stmt = $conn -> prepare("SELECT * FROM users WHERE firstname = ? OR email = ?");
$stmt ->execute(array($filterdUserFirstName , $filterdemail));
$get = $stmt -> fetch();
$count = $stmt -> rowCount();

if($count > 0){

    $formerrors[] = "Try To change Your Name OR Email";
}else{

  $stmt = $conn -> prepare("INSERT INTO users
                    (firstname, lastname, email, password , date, GroupID , approve , admin)
            VALUES
                    (:firstname , :lastname , :email ,:password , now() , 0, 1 , 0)");
$stmt -> execute(array(
'firstname'   => $filterdUserFirstName,
'lastname'    => $filterdUserLastName,
'email'       => $filterdemail,
'password'    => $password,
));
      echo "<div class='alert alert-success text-center container'> Congratulation You Complete Signup</div>";
       header('refresh:2;url=login.php');
  }

}elseif(! empty($formerrors)){
        foreach($formerrors as $error){
            echo  "<div class='alert alert-danger text-center'> ". $error . "</div>";
            header('refresh:3;url=register.php');
        }
     }

    }

ob_end_flush();
?>