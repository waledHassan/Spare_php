<?php 
ob_start();
 if(isset($_GET['product_id'])){

    include('assets/layouts/head.php');
    include('assets/layouts/header.php');

    $product_id = $_GET['product_id'];
    $stmt_check = $conn -> prepare("SELECT * FROM cars WHERE id = ?");
    $stmt_check -> execute(array($product_id));
    $count_check = $stmt_check -> rowCount();
    if($count_check > 0){
?>
<!-- Start Page Banner -->
<div class="page-banner-area item-bg-2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Vehicle Details</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="cars-lists.php">Vehicle</a></li>
                        <li><span>Vehicle Details</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->


<!-- Start Car Details Area -->
<section class="car-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="car-details-gallery">
                    <div class="car-details-main">
                        <?php
                          $stmt_img = $conn -> prepare("SELECT * FROM cars_images WHERE car_id = ?");
                          $stmt_img -> execute(array($product_id));
                          $rows_imgs = $stmt_img -> fetchAll();
                          foreach($rows_imgs as $row_img){ ?>
                          <div class="item">
                              <img src="assets/images/car-details/<?= $row_img['car_image'] ?>" alt="image">
                          </div>
                       <?php
                          }
                        ?>



                    </div>

                    <div class="car-details-preview">
                    <?php
                          $stmt_img = $conn -> prepare("SELECT * FROM cars_images WHERE car_id = ?");
                          $stmt_img -> execute(array($product_id));
                          $rows_imgs = $stmt_img -> fetchAll();
                          foreach($rows_imgs as $row_img){ ?>
                        <div class="item">
                            <img src="assets/images/car-details/<?= $row_img['car_image'] ?>" alt="image">
                        </div>
                        <?php
                          }
                        ?>

                    </div>
                </div>

        <?php

        $stmt = $conn -> prepare("SELECT * FROM cars WHERE id = ?");
        $stmt -> execute(array($product_id));
        $row = $stmt -> fetch();

        ?>

                <div class="car-details-desc">
                    <div class="desc-content">
                        <p id="timer"></p>
                        <div class="tag">$<?= $row['price'] ?></div>
                        <div class="tag-favorites"><a href="favorites.php"><i class="flaticon-love"></i></a></div>
                        <h3><?= $row['name'] ?></h3>
                    </div>

                    <div class="desc-information">
                        <h3>Vehicle Specification</h3>

                        <ul class="info-list">
                            <li>Car odometer</li>
                            <li><span>: <?= $row['car_odometer'] ?> km</span></li>

                            <li>car size *</li>
                            <li><span>: <?php $type = $row['car_type'] ;
                                             $stmt_ty = $conn -> prepare("SELECT * FROM cars_type WHERE id = ?");
                                             $stmt_ty -> execute(array($type));
                                             $row_ty = $stmt_ty -> fetch();
                                             echo $row_ty['type'];
                            
                            ?></span></li>

                            <li>Status </li>
                            <li><span>: <?= $row['status'] ?></span></li>

                            <li>Loction</li>
                            <li><span>: <?= $row['location'] ?> </span></li>

                            <li>Industry History</li>
                            <li><span>: <?= $row['year'] ?></span></li>

                            <li>wheel position</li>
                            <li><span>: <?= $row['wheel_position'] ?></span></li>

                            <li>Transporter </li>
                            <li><span>: <?= $row['Transporter'] ?></span></li>

                            <li>fuel type</li>
                            <li><span>: <?= $row['fuel'] ?></span></li>

                            <li>Seller type</li>
                            <li><span>: <?= $row['Seller_type'] ?></span></li>

                            <li>cylinders</li>
                            <li><span>: <?= $row['cylinders'] ?>-cylinder</span></li>

                            <li>Color</li>
                            <li><span>: <?= $row['color'] ?></span></li>

                            <li>Vin No</li>
                            <li><span>: <?= $row['vin_no'] ?> </span></li>

                            <li>Warranty term</li>
                            <li><span>: <?= $row['Warranty_term'] ?>Years</span></li>

                            <li>down payment</li>
                            <li><span>: <?= $row['down_payment'] ?>$</span></li>


                        </ul>
                    </div>
              
        <?php
            $stmt_sp = $conn -> prepare('SELECT * FROM specification WHERE car = ?');
            $stmt_sp -> execute(array($product_id));
            $row_sp = $stmt_sp -> fetch();
        ?>
                   <div class="desc-information">
                        <h3>Car Specification</h3>

                        <ul style='font-size:17px;' class="info-list">
                            <li><h5>VEHICLE TYPE</h5></li>
                            <li><p style='font-size:17px'>: <?= $row_sp['VEHICLE _TYPE'] ?> km</p></li>

                            <li><h5>PRICE AS TESTED</h5></li>
                            <li><p style='font-size:17px'>: <?= $row_sp['PRICE_ AS_ TESTED'] ?></p></li>

                            <li><h5>ENGINE_TYPE</h5></li>
                            <li><p style='font-size:17px'>: <?= $row_sp['ENGINE_TYPE'] ?></p></li>

                            <li><h5>Displacement</h5></li>
                            <li><p style='font-size:17px'>: <?= $row_sp['Displacement'] ?></p></li>
  
                            <li><h5>Power</h5></li>
                            <li><p style='font-size:17px'>: <?= $row_sp['Power'] ?></p></li>

                            <li><h5>Torque</h5></li>
                            <li><p style='font-size:17px'>: <?= $row_sp['Torque'] ?></p></li>

                            <li><h5>TRANSMISSION</h5></li>
                            <li><p style='font-size:17px'>: <?= $row_sp['TRANSMISSION'] ?></p></li>

                            <li><h5>CHASSIS</h5></li>
                            <li><p style='font-size:17px'>: <?= $row_sp['CHASSIS'] ?></p></li>

                            <li><h5>DIMENSIONS</h5></li>
                            <li><p style='font-size:17px'>: <?= $row_sp['DIMENSIONS'] ?></p></li>

                            <li><h5>TEST RESULTS</h5></li>
                            <li><p style='font-size:17px'>: <?= $row_sp['TEST_RESULTS'] ?></p></li>

                            <li><h5>FUEL ECONOMY</h5></li>
                            <li><p style='font-size:17px'>: <?= $row_sp['FUEL_ECONOMY'] ?></p></li>

                            <li><h5>EPA FUEL ECONOMY</h5></li>
                            <li><p style='font-size:17px'>: <?= $row_sp['EPA _FUEL_ECONOMY'] ?></p></li>

                        </ul>
                    </div>
   
                    <div class="desc-notes">
                        <h3>Malfunctions, scratches or accidents </h3>
                       <p>
                        <?= $row['Malfunctions']?>
                        </p>
                    </div>

                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27814.422039668534!2d47.99937637067242!3d29.37606405632665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9c83ce455983%3A0xc3ebaef5af09b90e!2z2YXYr9mK2YbYqSDYp9mE2YPZiNmK2KrYjCDYp9mE2YPZiNmK2KrigI4!5e0!3m2!1sar!2seg!4v1665664561974!5m2!1sar!2seg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                   </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="user-profile-information">
                    <div class="profile-title">
                        <img src="assets/images/user-profile/profile-1.jpg" alt="image">
                        <h3>Kuwait Auto Showroom</h3>
                        <span>Seller</span>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <hr>
                    <ul class="profile-info">
                        <li>
                            <span><i class='bx bx-current-location'></i> Address</span>
                            <a href="#"> Kuwait, Kuwait City </a>
                        </li>
                        <li>
                            <span><i class='bx bx-envelope'></i> E-mail</span>
                            <a href="mailto:seller@gmail.com">seller@gmail.com</a>
                        </li>

                        <li>
                            <span><i class='bx bx-phone-call'></i> Phone</span>
                            <a href="tel:+9655143214567" class="phone-dir">+965 514-321-4567</a>
                        </li>

                        <li>
                            <span><i class='bx bxl-whatsapp'></i> WhatsApp</span>
                            <a href="#" class="phone-dir">+965 514-321-4567</a>
                        </li>
                    </ul>
                    <hr>
                    <div class="profile-contact" style='color:black'>
                        <form>
                            <div class="form-group">
                                <label>Your Name</label>
                                <input id='name' type="text" class="form-control" placeholder='Your Name'>
                            </div>

                            <div class="form-group">
                                <label>E-mail</label>
                                <input id='email' type="email" class="form-control" placeholder='Enter A Valid E-mail'>
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input id='phone' type="text" class="form-control" placeholder='Your Phone Number'>
                            </div>

                            <div class="form-group">
                                <label>Your enquiry </label>
                                <textarea id='enquiry' class="form-control"></textarea>
                            </div>

                            <div id='btnseller' class="default-btn">
                                Send to the seller
                                <span></span>
                            </div>
                        </form>
                    </div>
                    <div id='sellerResult'></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Car Details Area -->




<?php 
    include('assets/layouts/footer.php');
    include('assets/layouts/scripts.php');
?>
<script>
            $("#btnseller").on("click", function () {
  console.log('done1');
                var name    = $('#name').val();
                var email   = $('#email').val();
                var phone   = $('#phone').val();
                var enquiry = $('#enquiry').val();

            $.ajax({
                type: "POST",
                url: 'seller.php',
                data: {name : name , email : email , phone : phone , enquiry : enquiry},
                success: function(data){
                    $("#sellerResult").html(data);
	             	$('input , textarea').val('');

                }
             });

            });
</script>


<?php
                        }else{
                               header("location:index.php");                  
                        }
        }else{
            header("location:" .$_SERVER['HTTP_REFERER']."");
        }
    ob_end_flush();
?>