<?php 
    include('assets/layouts/head.php');
    include('assets/layouts/header.php');
    $user = $_SESSION['user_id'];
?>
<!-- Start Page Banner -->
<div class="page-banner-area item-bg-2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Favorite cars</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li><span>Favorite cars</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Dashboard Area -->
<div class="dashboard-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="dashboard-profile">
                    <div class="profile-box">
                        <div class="profile-icon">
                                <i class='bx bxs-user'></i>
                        </div>
                    </div>

                     <div class="profile-info">
                        <ul class="info-list">
                            <li>
                                <a href="add-ads.php">Add New Ads</a>
                            </li>
                            <li>
                                <a href="my-ads.php">My Ads</a>
                            </li>
                            <li>
                                <a href="favorites.php" class="active">Favorite Ads</a>
                            </li>
                            <li>
                                <a href="account-details.php">Account details</a>
                            </li>
                            <li>
                                <a href="login.php">Log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="dashboard-title">
                    <h3>Favorite cars</h3>
                </div>

                <div class="row">
                      <?php
                        $favCar = [];
                         $stmt = $conn -> prepare("SELECT * FROM cars_wishlist WHERE user_id = ? AND car_id != 0");
                         $stmt -> execute(array($user));
                         $rows = $stmt -> fetchAll();
                          foreach($rows as $row){
                              $favCar[] = $row['car_id'];
                          }
                          if(!empty($favCar)){
                               foreach($favCar as $fav){
                                
                                   $stmt_fa = $conn -> prepare("SELECT * FROM cars WHERE id =? ");
                                   $stmt_fa -> execute(array($fav));
                                   $get = $stmt_fa -> fetch();
                      
                      ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="car-details.php?product_id=<?= $get['id'] ?>"><img src="assets/images/car-ranking/<?= $get['main_image'] ?>" alt="image"></a>
                                <div class="icon">
                                    <div data-id='<?= $get['id'] ?>' class='fav'><i style='font-size:40px;padding: 5px;' class="flaticon-love"></i></div>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$<?= $get['price'];?></div>
                                <h3>
                                    <a href="car-details.php?product_id=<?= $get['id'] ?>"><?= $get['name'];?></a>
                                </h3>
                                <p><b>Counter</b>: <?= $get['counter'];?>K km</p>
                                <hr>
                                <ul class="list">
                                    <li>
                                        Motor
                                        <span>: <?= $get['engine'] ?>HorsePower  </span>
                                    </li>
                                    <li>
                                        Transporter
                                        <span>: <?= $get['Transporter'] ?> </span>
                                    </li>
                                    <li>
                                        fuel
                                        <span>: <?= $get['fuel'] ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php
                     }
                      
                    }

                    
                    $favpart = [];
                     $stmt = $conn -> prepare("SELECT * FROM cars_wishlist WHERE user_id = ? AND part_id != 0");
                     $stmt -> execute(array($user));
                     $rows = $stmt -> fetchAll();
                      foreach($rows as $row){
                          $favpart[] = $row['part_id'];
                      }
                      if(!empty($favpart)){
                           foreach($favpart as $fav){
                            
                               $stmt_fa = $conn -> prepare("SELECT * FROM products WHERE id =? ");
                               $stmt_fa -> execute(array($fav));
                               $get = $stmt_fa -> fetch();
                  ?>
               <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                        <a href="categories-details.php?partId=<?= $get['id'] ?>"><img style='height: 190px;width:285px;' src="assets/images/car-ranking/<?= $get['image'] ?>" alt="image"></a>
                        <div class="icon">
                           <div data-id='<?= $get['id'] ?>' class='favPart'><i class="flaticon-love" style='font-size:40px;padding: 5px;'></i></div>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">$<?= $get['price'] ?></div>
                        <h3>
                            <a href="categories-details.php?partId=<?= $get['id'] ?>"><?= $get['name'] ?></a>
                        </h3>
                         <p><b>Category</b>:  <?php  
                         $cat = $get['category'] ;
                         $stmt_c = $conn -> prepare("SELECT * FROM sub_category WHERE id = ?");
                         $stmt_c -> execute(array($cat));
                         $row_c = $stmt_c -> fetch();
                         echo $row_c['name'];
                         
                         ?></p>
                        <hr>
                        <ul class="list">
                            <li>
                                 use
                                <span>: <?= $get['uses'] ?> </span>
                            </li>
                            <li>
                                Status
                                <span>: <?= $get['status'] ?> </span>
                            </li>
                            <li>
                                Seller
                                <span>: <?php $user = $get['owner'] ;
                                   $stmt_u = $conn -> prepare("SELECT * FROM users WHERE id = ?");
                                   $stmt_u -> execute(array($user));
                                   $row_u = $stmt_u -> fetch();
                                   echo $row_u['firstname'];
                                
                                ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                  <?php
                           }
                        }


                                $favelect = [];
                     $stmt = $conn -> prepare("SELECT * FROM cars_wishlist WHERE user_id = ? AND elect_id != 0");
                     $stmt -> execute(array($user));
                     $rows = $stmt -> fetchAll();
                      foreach($rows as $row){
                          $favelect[] = $row['elect_id'];
                      }
                      if(!empty($favelect)){
                           foreach($favelect as $fav){
                            
                               $stmt_fa = $conn -> prepare("SELECT * FROM products WHERE id =? ");
                               $stmt_fa -> execute(array($fav));
                               $get = $stmt_fa -> fetch();
                               ?>

                  <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                        <a href="categories-details.php?electId=<?= $get['id'] ?>"><img style='height: 190px;width:285px;' src="assets/images/car-ranking/<?= $get['image'] ?>" alt="image"></a>
                        <div class="icon">
                           <div data-id='<?= $get['id'] ?>' class='favelect'><i class="flaticon-love" style='font-size:40px;padding: 5px;'></i></div>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">$<?= $get['price'] ?></div>
                        <h3>
                            <a href="categories-details.php?electId=<?= $get['id'] ?>"><?= $get['name'] ?></a>
                        </h3>
                         <p><b>Category</b>: Auto Parts</p>
                        <hr>
                        <ul class="list">
                            <li>
                                 use
                                <span>: <?= $get['uses'] ?> </span>
                            </li>
                            <li>
                                Status
                                <span>: <?= $get['status'] ?> </span>
                            </li>
                            <li>
                                Seller
                                <span>: <?= $get['owner'] ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

                               <?php
  }

}
                        $favest = [];
                        $stmt = $conn -> prepare("SELECT * FROM cars_wishlist WHERE user_id = ? AND estate_id != 0");
                        $stmt -> execute(array($user));
                        $rows = $stmt -> fetchAll();
                        foreach($rows as $row){
                            $favelect[] = $row['estate_id'];
                        }
                        if(!empty($favest)){
                            foreach($favest as $fav){
                            
                                $stmt_fa = $conn -> prepare("SELECT * FROM products WHERE id =? ");
                                $stmt_fa -> execute(array($fav));
                                $get = $stmt_fa -> fetch();
                        ?>

                      <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                        <a href="categories-details.php?estateId=<?= $row['id'] ?>"><img src="assets/images/car-ranking/real-1.jpg" alt="image"></a>
                        <div class="icon">
                           <div data-id='<?= $row['id'] ?>' class='favestate'><i class="flaticon-love" style='font-size:40px;padding: 5px;'></i></div>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">$<?= $row['price'] ?></div>
                        <h3>
                            <a href="categories-details.php?estateId=<?= $row['id'] ?>">Dubai Real Estate</a>
                        </h3>
                         <p><b>Category</b>:  <?php 
                                             $est = $row['category'];
                                             $stmt_es = $conn -> prepare("SELECT * FROM sub_category WHERE id = ?");
                                             $stmt_es -> execute(array($est));
                                             $row_es = $stmt_es -> fetch();
                                             echo $row_es['name'];
                                        ?></p>
                        <hr>
                        <ul class="list">
                            <li>
                                 space
                                <span>: <?= $row['space'] ?> sqm</span>
                            </li>
                            <li>
                                Type
                                <span>:  <?= $row['type'] ;?>  </span>
                            </li>
                            <li>
                                Seller
                                <span>: <?php $seller = $row['owner'] ;
                                     $stmt_s = $conn -> prepare("SELECT * FROM users WHERE id = ? ");
                                     $stmt_s -> execute(array($seller));
                                     $row_s = $stmt_s -> fetch();
                                     echo $row_s['firstname'];
                                
                                ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

                        <?php
                           }
                        }
                  ?>
                </div>

                  
                <div id="result"></div>

            </div>
        </div>
    </div>
</div>
<!--Start Dashboard Area -->

<?php 
    include('assets/layouts/footer.php');
    include('assets/layouts/scripts.php');
?>

<script type="text/javascript">
    $(document).ready(function(){



      $(".fav").on("click", function () {

         var id = $(this).attr("data-id");

        $.ajax({
            type: "POST",
            url: 'addCarWish.php',
            data: {id: id},
            success: function(data){
              // console.log(data);
              $("#result").html(data);
            }
        });

      });

      
$(".favelect").on("click", function () {

var id = $(this).attr("data-id");

$.ajax({
type: "POST",
url: 'addCarWish.php?action=elect',
data: {id: id},
success: function(data){

$("#result").html(data);

}

});

});

$(".favPart").on("click", function () {

var id = $(this).attr("data-id");

$.ajax({
type: "POST",
url: 'addCarWish.php?action=part',
data: {id: id},
success: function(data){

$("#result").html(data);

}

});

});

$(".favestate").on("click", function () {

var id = $(this).attr("data-id");

$.ajax({
type: "POST",
url: 'addCarWish.php?action=estate',
data: {id: id},
success: function(data){

$("#result").html(data);

}

});

});

    });
    </script>