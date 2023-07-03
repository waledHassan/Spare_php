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
    <title>Cards | PlainAdmin Demo</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
  <?php
    include("template/sidebar_index1.php");
    ?>
    <div class="overlay"></div>

    <main class="main-wrapper">
     <?php
     include('template/header_index1.php');
     ?>

      <section class="card-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Categories Page</h2>
                  <a href="?action=add" class='btn btn-outline-primary btn-xsm' style='margin: 20px;'>Add New</a>
                </div>
              </div>
            </div>
          </div>
          <div class="cards-styles">
            <div class="row">
          <?php
if($action == 'manage'){
    $cats = $conn -> prepare("SELECT * FROM categories");
    $cats -> execute();
    $rows= $cats -> fetchAll();

    foreach($rows as $row){
?>
         
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="card-style-1 mb-30">
                  <div class="card-image">
                    <a href="subcategories.php?id=<?php echo $row['id']?>">
                      <img style='height: 300px;'
                        src="assets/images/categories/<?php echo $row['image']?>"
                        alt=""
                      />
                    </a>
                  </div>
                  <div class="card-content">
                    <h4><a href="#0"> <?php echo $row['name'] ?> </a></h4>
                  </div>
                  <a href="?action=edit&id=<?php echo $row['id'] ?>" class='btn btn-outline-primary btn-xsm' style='margin: 20px;'>Change</a>
                </div>
              </div>
        

     <?php
    }
  }elseif($action == 'add'){
    ?>
 <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>?action=insert" method='POST'>


 <div class="col-lg-10" style='margin: 50px ;'>
            <div class="card-style settings-card-2 mb-30">
              <div class="title mb-30">
                <h6>New Category</h6>
              </div>
                <div class="row">
                  <div class="col-12">
                    <div class="input-style-1">
                      <label> Name</label>
                      <input name='name' type="text" placeholder="Category Name"/>
                    </div>
                  </div>
                  </div>
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>image</label>
                        <input name="avatar" type="file" required="require" multiple >
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="main-btn primary-btn btn-hover col-12">
                      Finish
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
</form>

<?php
// #############################################################################
  }elseif($action == 'insert'){

              if($_SERVER['REQUEST_METHOD'] == 'POST'){

                      $name     = $_POST['name'];

                      $avatarname = $_FILES['avatar']['name'];
                      $avatarsize = $_FILES['avatar']['size'];
                      $avatartmp = $_FILES['avatar']['tmp_name'];
                      $avatartype = $_FILES['avatar']['type'];

                      $avatarAllowedExtensions = array("jpg" , "jpeg" , "png" , "gif");  // allowed files

                      @$avatarExtention = strtolower( end ( explode ('.' , $avatarname) ) );

                    $formErrors = [];
                    if(empty($name)){
                    $formErrors[] = "Sorry Category Name Can’t Be Empty";
                    }
                    if(empty($info)){
                    $formErrors[] = "Sorry Information Can’t Be Empty ";
                    }


                  foreach($formErrors as $error){
                        echo "<div class='alert alert-danger container text-center'>" .$error. "</div>";
                        header("refresh:2;url=categories.php?action=add");

                  }

          if(empty($formErrors)){

                $avatar = rand(0 , 100000000) . '_' . $avatarname;
                move_uploaded_file($avatartmp , "assets\images\categories\\" . $avatar);

                $stmt = $conn -> prepare("SELECT * FROM categories WHERE name = ?");
                $stmt ->execute(array($name));
                $count = $stmt -> rowCount();

              if($count == 1){

                  echo "<div class='alert alert-danger text-center container'>This Category Name Is Exist</div>";
                  header("refresh:2;url=categories.php?action=add");
                  exit();

       }else{

    $stmt = $conn -> prepare("INSERT INTO categories
                      (name , image)
              VALUES
                      (:name , :image)");

            $stmt -> execute(array(
            'name'       => $name,
            'image'      => $avatar
            ));
                  echo "<div class='alert alert-success text-center container'>" . $stmt->rowCount() . " Recored Done</din>";
                  header("refresh:2;url=categories.php");
          }
          }

          }else{
          echo "<div class='alert alert-danger text-center container'>Acess Denied</div>";
          header("refresh:2;url=index.php");
          }
    // ########################################################################      
  }elseif($action == 'edit'){

    @$id = $_GET['id'];

    $stmt = $conn -> prepare("SELECT * FROM categories WHERE id =?");
            $stmt -> execute(array($id));
            $row = $stmt -> fetch();
    
    ?>
    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>?action=update&id=<?php echo $row['id'] ?>" method='POST'>


    <div class="col-lg-10" style='margin: 50px ;'>
               <div class="card-style settings-card-2 mb-30">
                 <div class="title mb-30">
                   <h6>Change Category</h6>
                 </div>
                   <div class="row">
                     <div class="col-12">
                       <div class="input-style-1">
                         <label> Name</label>
                         <input name='name' type="text" placeholder="Category Name" value='<?php echo $row['name'] ?>'/>
                       </div>
                     </div>
                     </div>
                     <div class="col-12">
                       <div class="input-style-1">
                         <label>image</label>
                         <img src="assets/images/categories/<?php echo $row['image'] ?>" style='width:100px;height: 100px;margin: 10px 0 10px 200px;'/>
                           <input name="avatar" type="file" required="require" value='<?php echo $row['image']?>' >
                       </div>
                     </div>
                     <div class="col-12">
                       <button class="main-btn primary-btn btn-hover col-12">
                         Finish
                       </button>
                     </div>
                   </div>
                 </form>
               </div>
             </div>
   </form>

  <?php 
// #########################################################################################  
}elseif($action== 'update'){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                   @$id = $_GET['id'];    

                  $name     = $_POST['name'];

                  $avatarname = $_FILES['avatar']['name'];
                  $avatarsize = $_FILES['avatar']['size'];
                  $avatartmp = $_FILES['avatar']['tmp_name'];
                  $avatartype = $_FILES['avatar']['type'];

                  $avatarAllowedExtensions = array("jpg" , "jpeg" , "png" , "gif");  // allowed files

                  @$avatarExtention = strtolower( end ( explode ('.' , $avatarname) ) );

                    $formErrors = [];
                    if(empty($name)){
                    $formErrors[] = "Sorry Category Name Can’t Be Empty";
                    }


                foreach($formErrors as $error){
                      echo "<div class='alert alert-danger container text-center'>" .$error. "</div>";
                      header("refresh:2;url=categories.php?action=edit");

                }

                    if(empty($formErrors)){

                    $avatar = rand(0 , 100000000) . '_' . $avatarname;
                    move_uploaded_file($avatartmp , "assets\images\categories\\" . $avatar);

                   $stmt = $conn -> prepare("SELECT * FROM categories WHERE name= ? AND id != ?");
                    $stmt ->execute(array($name , $id));
                    $count = $stmt -> rowCount();

                  if($count == 1){

                  echo "<div class='alert alert-danger text-center container'>This Category Name Is Exist</div>";
                  header("refresh:2;url=categories.php?action=edit");
                  exit();

              }else{

                  $stmt = $conn -> prepare("UPDATE categories SET name= ?,image= ? WHERE id = ?");

                  $stmt -> execute(array( $name , $avatar , $id));

                  echo "<div class='alert alert-success text-center container'>" . $stmt->rowCount() . " Recored Done</din>";
                  header("refresh:2;url=categories.php");
                  }
                  }

      }else{
      echo "<div class='alert alert-danger text-center container'>Acess Denied</div>";
      header("refresh:2;url=index.php");
      }

   // #####################################################################################   
  }
  
     ?>     
         </div>
          </div>
        </div>
      </section>
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
}else{
  header("location:index1.php");
  exit();
}

ob_end_flush();
?>