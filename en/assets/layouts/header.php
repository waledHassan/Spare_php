
        
        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/black-logo.png" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/white-logo.png" class="white-logo" alt="image">
                            <img src="assets/images/black-logo.png" class="black-logo" alt="image">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link active">
                                       <?php echo lang('home')?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <?php echo lang('Cars')?>  
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="cars-lists.php?car=Gulf" class="nav-link">
                                                <?php echo lang('Gulf Cars')?>  
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cars-lists.php?car=incoming" class="nav-link">
                                        <?php echo lang('Incoming Cars')?>                                             
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="car-shows.php" class="nav-link">
                                        <?php echo lang('Car shows')?>  
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <?php echo lang('Categories')?>  
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php 
                                           $stmt = $conn -> prepare("SELECT * FROM categories");
                                           $stmt -> execute();
                                           $rows = $stmt -> fetchAll();
                                           foreach($rows as $row){

                                        ?>
                                        <li class="nav-item">
                                            <a href="categories-list.php?action=<?= $row['id'] ?>" class="nav-link">
                                               <?php echo lang($row['name'])?>  
                                            </a>
                                        </li>
                                        <?php
                                           }
                                        ?>

                                  
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.php" class="nav-link">
                                          <?php echo lang('Pricing')?>  
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link">
                                                <?php echo lang('Contact us')?>  
                                    </a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <div class="languages-list">
                                    <?php

                                           if(! isset($_GET['lang']) or (isset($_GET['lang']) && $_GET['lang'] == 'english')){ ?>

                                           <a href="?lang=arabic" class="link-lang">العربية</a>
                                          <?php
                                           }else{ ?>
                                           <a href="?lang=english" class="link-lang">English</a>
                                             <?php
                                           }
                                        ?>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <a href="add-ads.php" class="navbar-btn">
                                    <?php echo lang('Add')?>   
                                        <i class='bx bx-bell-plus'></i>
                                    </a>
                                </div>
                                
                                <div class="option-item">
                                    <div class="dropdown-account">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                            <i class='flaticon-user'></i>
                                            <span><?php
                                                      if(isset($_SESSION['user'])){
                                                           echo $_SESSION['user'];
                                                      }else{ ?>
                                      
                                                          <p style='color:gold'><?php echo lang('Login')?> </a>
                                                      <?php
                                                      }
                                            
                                            ?></span>
                                        </button>
    
                                        <div class="dropdown-menu">
                                              <?php
                                                if(isset($_SESSION['user'])){
                                              ?>
                                            <a href="my-ads.php" class="dropdown-item">
                                                <span> <?php echo lang('My Ads')?></span>
                                            </a>    
                                           <a href="favorites.php" class="dropdown-item">
                                                <span><?php echo lang('Favorite')?></span>
                                            </a>
                                            <a href="account-details.php" class="dropdown-item">
                                                <span><?php echo lang('Settings')?></span>
                                            </a>
                                            <?php
                                                }
                                               if(!isset($_SESSION['user'])){
                                            ?>
                                            <a href="login.php" class="dropdown-item">
                                                <span><?php echo lang('Login')?> </span>
                                            </a>
                                            <a href="register.php" class="dropdown-item">
                                                <span><?php echo lang('Sign up')?> </span>
                                            </a>
                                              <?php  
                                              } 
                                                 if(isset($_SESSION['user'])){ ?>
                                                <a href="logout.php" class="dropdown-item">
                                                    <span><?php echo lang('Logout')?></span>
                                                    </a>
                                                 <?php
                                                 }
                                              ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <div class="dropdown-account">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                            <i class='flaticon-user'></i>
                                            <span>Mohamed Albrolosy</span>
                                        </button>
    
                                         <div class="dropdown-menu">
                                            <a href="my-ads.php" class="dropdown-item">
                                                <span>My Ads</span>
                                            </a>
                                            <a href="favorites.php" class="dropdown-item">
                                                <span>Favorite</span>
                                            </a>
                                            <a href="account-details.php" class="dropdown-item">
                                                <span>Settings</span>
                                            </a>
                                            <a href="login.php" class="dropdown-item">
                                                <span>Login</span>
                                            </a>
                                            <a href="register.php" class="dropdown-item">
                                                <span>Sign up</span>
                                            </a>
                                            <a href="login.php" class="dropdown-item">
                                                <span>Logout</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="languages-list">
                                         <?php
                                    if(! isset($_GET['lang']) or (isset($_GET['lang']) && $_GET['lang'] == 'english')){ ?>


                                           <a href="?lang=arabic" class="link-lang">العربية</a>
                                          <?php
                                           }else{ ?>
                                           <a href="?lang=english" class="link-lang">English</a>
                                             <?php
                                           }
                                        ?>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <a href="add-ads.php" class="navbar-btn">
                                        Add 
                                        <i class='bx bx-bell-plus'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
