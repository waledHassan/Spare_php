<?php 
       ob_start();
       include('assets/layouts/head.php');
       include('assets/layouts/header.php');
   if(isset($_SESSION['user'])){

     $userID = $_SESSION['user_id'];
     $stmt = $conn -> prepare("SELECT * FROM users WHERE id = ?");
     $stmt -> execute(array($userID));
     $row = $stmt -> fetch();
?>

<!-- Start Page Banner -->
<div class="page-banner-area item-bg-2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Account details</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li><span>Account details</span></li>
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
                             <?php
                                if(!empty($row['avatar'])){  ?>
                                    <img src="assets/images/user-profile/<?= $row['avatar']?>" alt="">
                               <?php
                                }else{ ?>
                                  <i class='bx bxs-user'></i> 
                               <?php
                                }
                             ?>
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
                                <a href="favorites.php" >Favorite cars</a>
                            </li>
                            <li>
                                <a href="account-details.php" class="active">Account details</a>
                            </li>
                            <li>
                                <a href="logout.php">Log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="dashboard-title">
                    <h3>Account details</h3>
                </div>

                <div class="dashboard-form">
                    <form action='SaveDetails.php' method='POST' enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Change the account picture</label>
                                    <input type="file" class="form-control-file" name='avatar'>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label> Vendor Firstname/show name</label>
                                    <input name='firstname' type="text" class="form-control" value='<?= $row['firstname'] ?>'>
                                </div>
                            </div>
  
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input name='email' type="text" class="form-control" value='<?= $row['email'] ?>'>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label> Vendor Lastname/show name</label>
                                    <input name='lastname' type="text" class="form-control" value='<?= $row['lastname'] ?>'>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name='phone' type="text" class="form-control" value='<?= $row['phone'] ?>'>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>WhatsApp</label>
                                    <input name='whatsapp' type="text" class="form-control" value='<?= $row['phone'] ?>'>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name='adress' type="text" class="form-control" value='<?= $row['adress'] ?>'>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Seller type</label>
                                    <select name='sellertype'>
                                        <option>Seller type</option>
                                        <option value="Exhibition" <?php if($row['sellerType'] == 'Exhibition'){echo "selected" ;}?>>Exhibition</option>
                                        <option value='personalSeller' <?php if($row['sellerType'] == 'personalSeller'){echo "selected" ;}?>>personal seller</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input name='oldPassword' type="password" class="form-control" placeholder='Write Old Password If You Want To Cahnge OR Leave'>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input name='newPassword' type="password" class="form-control" placeholder='Write Your New Password'>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control"><?= $row['description'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="default-btn">
                            Saving data
                            <span></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Dashboard Area -->

<?php 
    include('assets/layouts/footer.php');
    include('assets/layouts/scripts.php');

   }else{
       header('location:index.php');
   }
   ob_end_flush();
?>