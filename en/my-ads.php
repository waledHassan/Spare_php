<?php 
    include('assets/layouts/head.php');
    include('assets/layouts/header.php');
?>
<!-- Start Page Banner -->
<div class="page-banner-area item-bg-2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>My Ads</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li><span>My Ads</span></li>
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
                                <a href="my-ads.php" class="active">My Ads</a>
                            </li>
                            <li>
                                <a href="favorites.php" >Favorite cars</a>
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
                    <h3>My Ads</h3>
                </div>

                <div class="row">
                <?php
                   $user = $_SESSION['user_id'];

                   $stmt = $conn -> prepare("SELECT * FROM cars WHERE owner = ?");
                   $stmt -> execute(array($user));
                   $rows = $stmt -> fetchAll();
                    foreach($rows as $row){
                ?>

                     <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="car-details.php?product_id=<?= $row['id'] ?>"><img style='height: 190px;width:285px;' src="assets/images/car-ranking/<?= $row['main_image'] ?>" alt="image"></a>
                                <div class="icon">
                                    <div data-id='<?= $row['id'] ?>' class='fav'><i class="flaticon-love" style='font-size:40px;padding: 5px;'></i></div>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$<?= $row['price'] ?></div>
                                <h3>
                                    <a href="car-details.php?product_id=<?= $row['id'] ?>"><?= $row['name'] ?></a>
                                </h3>
                                <p><b>Counter</b>: <?= $row['counter'] ?>K km</p>
                                <hr>
                                <ul class="list">
                                    <li>
                                        Motor
                                        <span>: <?= $row['engine'] ?> HorsePower </span>
                                    </li>
                                    <li>
                                        Transporter
                                        <span>: <?= $row['Transporter'] ?> </span>
                                    </li>
                                    <li>
                                        fuel
                                        <span>: <?= $row['fuel'] ?></span>
                                    </li>
                                    <input type="hidden" class='idHidden' value='<?= $row['id'] ?>' name='id'>
                                </ul>
                            </div>
                        </div>
                    </div>

           
                <?php
                }

                            $user = $_SESSION['user_id'];

                            $stmt = $conn -> prepare("SELECT * FROM products WHERE owner = ?");
                            $stmt -> execute(array($user));
                            $rows = $stmt -> fetchAll();
                            foreach($rows as $row){
                            ?>
                     <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="categories-details.php?partId=<?= $row['id'] ?>"><img  style='height: 190px;width:285px;' src="assets/images/car-ranking/<?= $row['image'] ?>" alt="image"></a>
                                <div class="icon">
                                <!-- <div data-id='<?= $row['id'] ?>' class='favPart'><i class="flaticon-love" style='font-size:40px;padding: 5px;'></i></div> -->
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$<?= $row['price'] ?></div>
                                <h3>
                                    <!-- <a href="categories-details.php?partId=<?= $row['id'] ?>"><?= $row['name'] ?></a> -->
                                </h3>
                                <p><b>Category</b>: <?php $cat = $row['category'] ;
                                            $stmt_c = $conn -> prepare("SELECT * FROM sub_category WHERE id = ? ");
                                            $stmt_c -> execute(array($cat));
                                            $row_c = $stmt_c -> fetch();
                                            echo $row_c['name'];
                                ?></p>
                                <hr>
                                <ul class="list">
                                    <li>
                                    use
                                    <span>: <?= $row['uses'] ?> </span>
                                   </li>
                                   <li>
                                    Status
                                    <span>: <?= $row['status'] ?> </span>
                                   </li>
                                   <li>
                                    Seller
                                    <span>: <?php $user = $row['owner'] ;
                                              $stmt_u = $conn -> prepare("SELECT * FROM users WHERE id = ? ");
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
             ?>


                                   <div id="result"></div>

                  
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers">
                                <i class='flaticon-left-arrow'></i>
                            </a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="next page-numbers">
                                <i class='flaticon-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Dashboard Area -->

<?php 
    include('assets/layouts/footer.php');
    include('assets/layouts/scripts.php');
?>
<script>
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

$(".favPart").on("click", function () {

        var id = $(this).attr("data-id");
        $.ajax({
        type: "POST",
        url: 'addCarWish.php?action=part',
        data: {id: id},
        success: function(data){
            // console.log(data);
            $("#resultparts").html(data);
        }
        });

});

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
</script>