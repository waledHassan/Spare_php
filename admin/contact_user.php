<?php
ob_start();
session_start();
 if(isset($_SESSION['admin'])){
     include("connect.php");
     include("functions/function.php");
     $action = isset($_GET['action']) ? $_GET['action'] : 'manage';
 

$id = $_GET['id'];
$users = $conn -> prepare("SELECT * FROM users WHERE user_id = ?");
$users -> execute(array($id));
$rows= $users -> fetch();


// if($_SERVER['REQUEST_METHOD'] == 'POST') {

//     $name    = $_POST['name'];
//     $email   = $_POST['email'];
//     $message = $_POST['message'];

//     $headers = 'From: '.$email . '\r\n';

//     mail('waledwakel105@gmail.com' , 'contact form' , $message , $headers);
// ini_set();
// }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/x-icon"
    />
    <title>Cards | PlainAdmin Demo</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>


  <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper" style='width: 100%;'>
   
      <!-- ========== header end ========== -->

      <!-- ========== signin-section start ========== -->
      <section class="signin-section" style='width: 100%;' >
        <div class="container-fluid col-lg-12" >
          <!-- ========== title-wrapper start ========== -->

            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <div class="row g-0 auth-row" style='margin: 30px 17% 0 0'>
            <div class="col-lg-6">
              <div class="auth-cover-wrapper bg-primary-100">
                <div class="auth-cover">
                  <div class="title text-center">
                    <h1 class="text-primary mb-10">Contact Page</h1>
                    <p class="text-medium">
                      Here You Can Contact With User
                    </p>
                  </div>
                  <div class="cover-image">
                    <img src="assets/images/auth/signin-image.svg" alt="" />
                  </div>
                  <div class="shape-image">
                    <img src="assets/images/auth/shape.svg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6">
              <div class="signin-wrapper">
                <div class="form-wrapper">
                  <h6 class="mb-15">Contact Form</h6>
                  <p class="text-sm mb-25">
                    Start Contacting with Users
                  </p>
                  <form action="https://formsubmit.co/waledwakel105@gmail.com" method="POST">
                    <div class="row">
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Email</label>
                          <input type="email" placeholder="Email" name='email' Value='<?php echo $rows['email']?>' />
                        </div>
                      </div>
                      <!-- end col -->
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>name</label>
                          <input type="text" placeholder="name" name='name' value='<?php echo $rows['firstname'] ?>' />
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Message</label>
                         <textarea name="message" cols="12" rows="5"></textarea>
                        </div>
                      </div>

                      <!-- end col -->
                      <div class="col-12">
                        <div
                          class="
                            button-group
                            d-flex
                            justify-content-center
                            flex-wrap
                          "
                        >
                          <button
                            class="
                              main-btn
                              primary-btn
                              btn-hover
                              w-100
                              text-center
                            "
                          >
                            Send
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- end row -->
                  </form>
              
                </div>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
      </section>

    </main>
    


  <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>

<?php

  }else{
   header("location:index.php");
  }
?>
