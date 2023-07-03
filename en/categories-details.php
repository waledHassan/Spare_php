<?php 
   ob_start();

if(isset($_GET['partId']) or isset($_GET['electId']) or isset($_GET['estateId'])){

    if(isset($_GET['partId'])){

    include('assets/layouts/head.php');
    include('assets/layouts/header.php');

    $partId = $_GET['partId'];
    $stmt_check = $conn -> prepare("SELECT * FROM products WHERE category = 3 AND id = ?");
    $stmt_check -> execute(array($partId));

   }elseif(isset($_GET['electId'])){

    include('assets/layouts/head.php');
    include('assets/layouts/header.php');

    $electid = $_GET['electId'];
    $stmt_check = $conn -> prepare("SELECT * FROM products WHERE category = 1 AND id = ?");
    $stmt_check -> execute(array($electid));
   }elseif(isset($_GET['estateId'])){

    include('assets/layouts/head.php');
    include('assets/layouts/header.php');

    $estateId = $_GET['estateId'];
    $stmt_check = $conn -> prepare("SELECT * FROM products WHERE category = 2 AND id = ?");
    $stmt_check -> execute(array($estateId));
   }
   

    $count_check = $stmt_check -> rowCount();
    $row = $stmt_check -> fetch();
    if($count_check > 0){
?>
<!-- Start Page Banner -->
<div class="page-banner-area item-bg-2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Property details</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="categories-list.php">Property</a></li>
                        <li><span>Property details</span></li>
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
                        <div class="item">
                            <img src="assets/images/car-ranking/<?= $row['image'] ?>" alt="image">
                        </div>

                    </div>

                    <!-- <div class="car-details-preview">
                        <div class="item">
                            <img src="assets/images/car-details/categories-details-1.jpg" alt="image">
                        </div>
                    </div> -->
                </div>

                <div class="car-details-desc">
                    <div class="desc-content">
                        <p id="timer"></p>
                        <div class="tag">$<?= $row['price'] ?></div>
                        <div class="tag-favorites"><a href="favorites.php"><i class="flaticon-love"></i></a></div>
                        <h3><?= $row['name'] ?></h3>
                    </div>
                    <hr>
                    <div class="desc-notes">
                        <h3>Special specifications </h3>
                          <p>
                           <?= $row['specification'] ?>
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
                        <h3>Mohamed ALbrolosy</h3>
                        <span>Seller</span>
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
                    <div class="profile-contact">
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
        //    console.log('done2');
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