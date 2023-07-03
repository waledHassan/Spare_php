<?php 
    ob_start();
    include('assets/layouts/head.php');

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $avatarname = $_FILES['avatar']['name'];
            $avatarsize = $_FILES['avatar']['size'];
            $avatartmp = $_FILES['avatar']['tmp_name'];
            $avatartype = $_FILES['avatar']['type'];

            $avatarAllowedExtensions = array("jpg" , "jpeg" , "png" , "gif");  // allowed files

            @$avatarExtention = strtolower( end ( explode ('.' , $avatarname) ) );

            $userID = $_SESSION['user_id'];

             $sellerType = $_POST['sellertype'];
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

        if(isset($_POST['phone'])){

            @$filterdUserphone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);

            if(strlen($_POST['phone']) < 8){
                $formerrors[] =  'Your Phone Number Can’t Be Less Than 8 Characters' ;
            }
            if(strlen($_POST['phone']) > 22){
                $formerrors[] =  'Your Phone Number Can’t Be More Than 22 Characters' ;
            }
        }

        //  #################   end Phone Validation #########################3
        if(isset($_POST['whatsapp'])){

            @$filterdUserwhatsapp = filter_var($_POST['whatsapp'], FILTER_SANITIZE_STRING);

            if(strlen($_POST['whatsapp']) < 8){
                $formerrors[] =  'Your whatsapp Number Can’t Be Less Than 8 Characters' ;
            }
            if(strlen($_POST['whatsapp']) > 22){
                $formerrors[] =  'Your whatsapp Number Can’t Be More Than 22 Characters' ;
            }
        }

        //  #################   end Whatsapp Validation #########################3

        if(isset($_POST['adress'])){

            @$filterdUseradress = filter_var($_POST['adress'], FILTER_SANITIZE_STRING);

            if(strlen($_POST['adress']) < 8){
                $formerrors[] =  'Your adress  Can’t Be Less Than 8 Characters' ;
            }
            if(strlen($_POST['adress']) > 50){
                $formerrors[] =  'Your adress  Can’t Be More Than 50 Characters' ;
            }
        }

        //  #################   end adress Validation #########################3

        
        if(isset($_POST['description'])){

            @$filterdUserdescription = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

            if(strlen($_POST['description']) < 20){
                $formerrors[] =  'Your description  Can’t Be Less Than 20 Characters' ;
            }
        }

        //  #################   end description Validation #########################3

        if(! isset($_POST['oldPassword'])){

            $formerrors[] = 'Please Write Your Password';

        }else{
            $stmt = $conn -> prepare("SELECT * FROM users WHERE id = ?");
            $stmt -> execute(array($userID));
            $row = $stmt -> fetch();
            
            @$filterdpassword = filter_var($_POST['oldPassword'], FILTER_SANITIZE_STRING);
            $password = sha1($filterdpassword);

            if($_POST['oldPassword'] !== $row['password'] ){
                $formerrors[] =  'Sorry Old Password Is Not Match' ;
            }else{
                 if(! empty($_POST['newPassword'])){
                    $password = $_POST['newPassword'];
                 }else{
                     $password = $row['password'];
                   }
            }

          
          
        }

        //   ####################### End Password Validation #####################


        //      Check If Rigister User Is Exist
        if(empty($formerrors)){

            $avatar = rand(0 , 100000000) . '_' . $avatarname;
            move_uploaded_file($avatartmp , "assets/images/user-profile/" . $avatar);

                $stmt = $conn -> prepare("SELECT * FROM users WHERE firstname= ? AND id != ?");
                $stmt ->execute(array($filterdUserFirstName , $userID));
                $get = $stmt -> fetch();
                $count = $stmt -> rowCount();

        if($count > 0){

            echo "<div class='alert alert-danger text-center container'>This name is Exist Change It</div>";
            header("refresh:3;url=account-details.php");

        }else{

            
          

    

           $stmt = $conn -> prepare("UPDATE users SET firstname = ? , password =? , lastname = ? , email =? , phone = ? , avatar =? , adress =? , description =? , sellerType =?WHERE id = ?");
           $stmt -> execute(array($filterdUserFirstName , $password ,$filterdUserLastName , $filterdemail , $filterdUserphone , $avatar , $filterdUseradress , $filterdUserdescription , $sellerType , $userID ));
            echo "<div class='alert alert-success text-center container'>Your Information Updated successfully</div>" ;
            header("refresh:3;url=account-details.php");
        }

        }elseif(! empty($formerrors)){
                foreach($formerrors as $error){
                    echo  "<div class='alert alert-danger text-center container'>". $error . "</div>";
                    header('refresh:3;url=account-details.php');
                }
            }

            }

        ob_end_flush();
        ?>