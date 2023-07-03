<?php
ob_start();
session_start();
 if(isset($_SESSION['admin'])){

   include("connect.php");
   include("functions/function.php");
   $action = isset($_GET['action']) ? $_GET['action'] : 'manage';
  
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
    <title>Settings | PlainAdmin Demo</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <!-- ======== sidebar-nav start =========== -->
   <?php
   include("template/sidebar_index1.php");
   ?>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
     <?php
   include("template/header_index1.php");
     
     ?>
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <?php 
              if($action == 'manage'){

            $stmt = $conn -> prepare("SELECT * FROM users WHERE admin = 1 LIMIT 1");
            $stmt -> execute(array());
            $admins = $stmt -> fetchAll();
           foreach($admins as $admin){

          ?>
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="titlemb-30">
                  <h2>Settings</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="index1.php">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item"><a href="#0">Pages</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                     <a href="#">Settings</a>   
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <div class="row">
            <div class="col-lg-6">
              <div class="card-style settings-card-1 mb-30">
                <div
                  class="
                    title
                    mb-30
                    d-flex
                    justify-content-between
                    align-items-center
                  "
                >
                  <h6>My Profile</h6>
                  <button class="border-0 bg-transparent">
                    <a href="settings.php"><i class="lni lni-pencil-alt"></i></a>
                  </button>
                </div>
                <div class="profile-info">
                  <div class="d-flex align-items-center mb-30">
                    <div class="profile-image">
                      <img src="assets/images/admin/<?php echo $admin['avatar'] ?>" style='width:90px;height: 100px;' />
                      <div class="update-image">
                        <input type="file" />
                        <label for=""
                          ><i class="lni lni-cloud-upload"></i
                        ></label>
                      </div>
                    </div>
                    <div class="profile-meta">
                      <h5 class="text-bold text-dark mb-10"><?php echo $admin['firstname']?></h5>
                      <p class="text-sm text-gray"><?php echo $admin['jop']?></p>
                    </div>
                  </div>

     <form action="<?php $_SERVER['PHP_SELF']?>?action=update" method='POST'>

                  <div class="input-style-1">
                    <label>First Name</label>
                    <input
                      name='firstname'
                      type="text"
                      placeholder="Admin First Name"
                      value="<?php echo $admin['firstname'] ?>"
                    />
                  </div>
                  <input type="hidden"
                         name='id' 
                         value='<?php echo $admin['id'] ?>'
                    />
                  <div class="input-style-1">
                    <label>Email</label>
                    <input
                      name='email'
                      type="email"
                      placeholder="admin@example.com"
                      value="<?php echo $admin['email'] ?>"
                    />
                  </div>
                  <div class="input-style-1">
                    <label>Old Password</label>
                    <input name='oldpassword' placeholder='write your old Password' type="password" />
                  </div>
                  <div class="input-style-1">
                    <label>New Password</label>
                    <input name='newpassword' placeholder='write your new Password' type="password"/>
                  </div>
                  <div class="input-style-1">
                    <label>Date</label>
                    <input
                      name='date'
                      type="date"
                      placeholder="www.uideck.com"
                      value="<?php echo $admin['date'] ?>"
                    />
                  </div>
                  <div class="input-style-1">
                    <label>Phone</label>
                    <input
                      name='phone'
                      type="number"
                      placeholder="www.uideck.com"
                      value="<?php echo $admin['phone'] ?>"
                    />
                  </div>
                </div>
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-lg-6">
              <div class="card-style settings-card-2 mb-30">
                <div class="title mb-30">
                  <h6>My Profile</h6>
                </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Last Name</label>
                        <input name='lastname' type="text" placeholder="Full Name" value='<?php echo $admin['lastname'] ?>'/>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Company</label>
                        <input type="text" placeholder="Company" />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Address</label>
                        <input name='adress' type="text" placeholder="Address" value='<?php echo $admin['location'] ?>' />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>City</label>
                        <input name='city' type="text" placeholder="City" value='<?php echo $admin['city'] ?>' />
                      </div>
                    </div>
                  
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Jop</label>
                        <input name='jop' type="text" placeholder="Jop" value='<?php echo $admin['jop'] ?>' />
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="main-btn primary-btn btn-hover">
                        Update Profile
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>
          <?php
           }
              }elseif($action == 'update'){

                  if($_SERVER['REQUEST_METHOD'] == 'POST' ){
                        $firstname    = $_POST['firstname'];
                        $id           = $_POST['id'];
                        $email        = $_POST['email'];
                        $oldpassword    = $_POST['oldpassword'];
                        $newpassword    = $_POST['newpassword'];
                        $date         = $_POST['date'];
                        $phone        = $_POST['phone'];
                        $lastname     = $_POST['lastname'];
                        $adress       = $_POST['adress'];
                        $city         = $_POST['city'];
                        $jop         = $_POST['jop'];

                        // $oldpassword  = sha1($password1);
                        // $newpassword  = sha1($password2);


                         $formErrors = [];
                         if(empty($password1)){    
                         $formErrors[] = "Enter Your Password Please";
                        }
                        if($oldpassword !== $newpassword){
                         $formErrors[] = "enter Your Password Right";
                         }
                         if(empty($oldpassword)){
                         $formErrors[] = "Sorry Password Field Can’t Be Empty";
                         }
                         if(empty($newpassword)){
                         $formErrors[] = "Sorry The New Password Field Can’t Be Empty";
                         }
                        if(strlen($firstname) < 2 ){
                            $formErrors[] = "Sorry Your Name Can’t Be Less Than 2 Characters ";
                        }
                        if(strlen($firstname) > 20 ){
                            $formErrors[] = "Sorry Your Name Can’t Be Larger Than 20 Characters ";
                        }
                        if(empty($firstname)){
                            $formErrors[] = "Sorry Your Name Can’t Be Empty";
                        }
                        if(empty($email)){
                            $formErrors[] = "Sorry Your E_mail Can’t Be Empty ";
                        }
                        if(empty($lastname)){
                            $formErrors[] = "Sorry Your Full Name Can’t Be Empty ";
                        }
         
                        foreach($formErrors as $error){
                            echo "<div class='alert alert-danger container text-center'>" .$error. "</div>";
                            header("refresh:2;url=settings.php");
                        }
                        if(empty($formErrors)){

                          $stmt2 = $conn -> prepare("SELECT * FROM users WHERE firstname= ? AND user_id != ?");
                          $stmt2 -> execute(array($firstname , $id));
                          $count = $stmt2 -> rowCount();
   
                       if($count == 1){
                          echo "<div class='alert alert-danger text-center container'>This Admin Name Is Exist</div>";
                          header("refresh:2;url=settings.php");
                       }else{
                          $stmt = $conn -> prepare ("UPDATE users SET firstname=?,lastname=?,email=?,password=?,city=?,location=?,jop=?,phone=? WHERE id = ?");
                          $stmt -> execute(array($firstname,$lastname,$email,$newpassword,$city,$adress,$jop,$phone,$id ));
                          echo "<div class='alert alert-success text-center container'>" .  $stmt -> rowCount() . 'Record Updated </div>';
                          header("refresh:3;url=settings.php");
                       }
                  }
   
             }else{
               echo "<div class='alert alert-danger text-center container'>Acess Denied</div>";
               header("refresh:2;url=index1.php");
             }


                  }
                   
              
          ?>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed and Developed by
                  <a
                    href="https://plainadmin.com"
                    rel="nofollow"
                    target="_blank"
                  >
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div
                class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                "
              >
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
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
  }

?>