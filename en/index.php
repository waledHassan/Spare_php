<?php 
    include('assets/layouts/head.php');
    include('assets/layouts/header.php');
?>
<!-- Start Main Banner Area -->
<div class="main-banner-with-category">
    <div class="main-banner-item">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="main-slides-content">
                        <h1><?php echo lang('Spare Website')?></h1>
                        <p><?php echo lang('A site')?></p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="tab slides-category-list-tab">
                        <ul class="tabs">
                            <li>
                                <a href="#"><?php echo lang('Cars')?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo lang('Parts')?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo lang('Electronics')?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo lang('Real Estate')?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo lang('Trailers')?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo lang('yachts')?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo lang('Caravans')?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo lang('Other')?></a>
                            </li>
                        </ul>
                        <div class="tab_content">
                            <div class="tabs_item">

                                <form action='<?php $_SERVER['PHP_SELF'] ?>?form=searchCars' method='POST'>

                                    <div class="row">
                                        <div class="col-md col-sm-6">
                                            <div class="form-group">
                                                 <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Car Type </label>
                                                <select name='Origin'>
                                                    <?php
                                                         $stmt = $conn -> prepare("SELECT * FROM cars_origin");
                                                         $stmt -> execute(array());
                                                         $rows = $stmt -> fetchAll();
                                                          foreach($rows as $row){
                                                       ?>
                                                    <option value='<?= $row['id'] ?>'><?= $row['origin'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-6">
                                            <div class="form-group">
                                                <label class="mb-2 mr-4" style='color:#fff;font-size:20px;'>Vicheal Status</label>
                                                <select name='Status'>
                                                    <option value='New'>New</option>
                                                    <option value='agency'>Agency</option>
                                                    <option value='scrap'>Scrap</option>
                                                    <option value='used'>Used</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-6">
                                            <div class="form-group">
                                            <label class="mb-2 mr-4" style='color:#fff;font-size:20px;'>Vicheal Size</label>
                                                <select name='Type'>
                                                       <?php
                                                         $stmt = $conn -> prepare("SELECT * FROM cars_type");
                                                         $stmt -> execute(array());
                                                         $rows = $stmt -> fetchAll();
                                                          foreach($rows as $row){
                                                       ?>
                                                    <option value='<?= $row['id'] ?>'><?= $row['type'] ?></option>
                                                    <?php
                                                         }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md col-sm-6 ">
                                            <div class="form-group">
                                                <select>
                                                    <option>Model</option>
                                                    <option>Sedan</option>
                                                    <option>MPV</option>
                                                    <option>SUV</option>
                                                    <option>Crossover</option>
                                                    <option>Coupe</option>
                                                    <option>Convertible</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                            <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Model Year</label>
                                                <select name='Year'>
                                                    <option>2021</option>
                                                    <option>2022</option>
                                                    <option>2023</option>
                                                    <option>2024</option>
                                                    <option>2025</option>
                                                    <option>2026</option>
                                                    <option>2027</option>
                                                    <option>2028</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-search-btn mt-3">
                                        <button type='submit' id='searchT'><i class='bx bx-search-alt'></i></button>
                                    </div>
                                </form>
                            </div>

          <!--/////////////////////////// Start Search Parts////////////////////////////////////// -->

                       <div class="tabs_item">
                            <form action='<?php $_SERVER['PHP_SELF'] ?>?form=searchParts' method='POST'>
                                    <div class="row">
                                        <div class="col-md col-sm-6">
                                            <div class="form-group">
                                           <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Type Of Car</label>
                                           <select name='Type'>
                                                  
                                                    <option value='villa'>villa</option>
                                                    <option value='apartment'>apartment</option>
                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-6">
                                            <div class="form-group">
                                           <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Category Of Part</label>
                                            <select name='Category'>
                                                       <?php
                                                         $stmt = $conn -> prepare("SELECT * FROM sub_category WHERE category =3");
                                                         $stmt -> execute(array());
                                                         $rows = $stmt -> fetchAll();
                                                          foreach($rows as $row){
                                                       ?>
                                                    <option value='<?= $row['id'] ?>'><?= $row['name'] ?></option>
                                                    <?php
                                                         }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-6">
                                            <div class="form-group">
                                                <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Status</label>
                                                <select name='Status'>
                                                    <option value='new'>Flawless</option>
                                                    <option value='new'>Excellent</option>
                                                    <option value='good'>Good</option>
                                                    <option nalue='medium'>Medium</option>
                                                    <option value='used'>Not good</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-6">
                                            <div class="form-group">     
                                                <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Type Of Use</label>
                                                <select name='use'>
                                                    <option value='neverUsed'>Never used</option>
                                                    <option value='OneTime'>one time use</option>
                                                    <option value='Minor'>Minor use</option>
                                                    <option value='Normal'>Normal use</option>
                                                    <option value='UseHight'>Use high</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md col-sm-6 ">
                                            <div class="form-group">
                                                <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Price</label>
                                                <select name='price'>
                                                    <option value='10'>10$ - 500$</option>
                                                    <option value='500'>500$ - 1000$</option>
                                                    <option value='1000'>1000$ - 1500$</option>
                                                    <option value='1500'>1500$ - 2000$</option>
                                                    <option value='2000'>2000$ - 2500$</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="main-search-btn">
                                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                                    </div>
                                </form>
                            </div>

                            <!-- Start Electronics Search -->

                            <div class="tabs_item">
                                <form action='<?php $_SERVER['PHP_SELF'] ?>?form=searchElect' method='POST'>
                                    <div class="row">
                                        <div class="col-md col-sm-6">
                                            <div class="form-group">
                                            <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Category</label>

                                                <select name='category'>
                                                    <option value='TVs'>TVs</option>
                                                    <option value='computers'>computers</option>
                                                    <option value='PCs'>PCs</option>
                                                    <option value='Bitcoin'>Bitcoin</option>
                                                    <option >Mining devices</option>
                                                    <option value='accessories'>accessories</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md col-sm-6 ">
                                            <div class="form-group">
                                            <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Price</label>
                                                <select name='price'>
                                                    <option value='10'>10$ - 500$</option>
                                                    <option value='500'>500$ - 1000$</option>
                                                    <option value='1000'>1000$ - 1500$</option>
                                                    <option value='1500'>1500$ - 2000$</option>
                                                    <option value='2000'>2000$ - 2500$</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md col-sm-6" style='margin-top:37px;'>
                                            <div class="form-group">
                                                <input type="text" name="search-text" placeholder="Search" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-search-btn" style='margin-top:22px;'>
                                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                                    </div>
                                </form>
                            </div>


                            <div class="tabs_item">
                                <form method='POST' action='<?php $_SERVER['PHP_SELF']?>?form=searchEstate'>
                                    <div class="row">
                                        <div class="col-md col-sm-6">
                                        <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Category</label>
                                            <div class="form-group">
                                                <select name='category'>
                                                    <option value='sale'>For Sale</option>
                                                    <option value='rent'>For Rent</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-6">
                                            <div class="form-group">
                                            <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Property type</label>
                                                <select name='property'>
                                 
                                                    <option value='Residential'>Residential</option>
                                                    <option value='Commercial'>Commercial</option>
                                              
                                                </select>
                                            </div>
                                        </div>
                                         <div class="col-md col-sm-6">
                                            <div class="form-group">
                                            <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Unit type</label>
                                                <select name='unitType'>
                                                    <option value='apartment'>apartment</option>
                                                    <option value='villa'>villa</option>
                                                    <option value='Townhouse'>Townhouse</option>
                                                    <option value='Penthouse'>Penthouse</option>
                                                    <option value='residential'>residential building</option>
                                                    <option value='Residential'>Residential floor</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md col-sm-6 ">
                                            <div class="form-group">
                                            <label class="mb-2 ml-4" style='color:#fff;font-size:20px;'>Price</label>
                                                <select name='price'>
                                                    <option value='10000'>10000$ - 50000$</option>
                                                    <option value='50000'>50000$ - 100000$</option>
                                                    <option value='100000'>100000$ - 150000$</option>
                                                    <option value='150000'>150000$ - 200000$</option>
                                                    <option value='200000'>200000$ - 250000$</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md col-sm-6" style='margin-top:37px;'>
                                            <div class="form-group">
                                                <input type="text" name="search" placeholder="Search" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-search-btn" style='margin-top:22px;'>
                                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                                    </div>
                                </form>
                            </div>


                            <div class="tabs_item">
                                <form  method='POST' action='categories-list.php?action=4'>
                                    <div class="row">
                                        <div class="col-md col-sm-6">
                                            <div class="form-group">
                                                <select name ='subcategory'>
                                                    <option value='5'>Sale</option>
                                                    <option value='6'>Buy</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md col-sm-6 ">
                                            <div class="form-group">
                                            <select name='pricetrailer'>
                                                    <option value='10'>10$ - 500$</option>
                                                    <option value='500'>500$ - 1000$</option>
                                                    <option value='1000'>1000$ - 1500$</option>
                                                    <option value='1500'>1500$ - 2000$</option>
                                                    <option value='2000'>2000$ - 2500$</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md col-sm-6 ">
                                            <div class="form-group">
                                                <input type="text" name="searchtrailer" placeholder="Search" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-search-btn">
                                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                                    </div>
                                </form>
                            </div>
                         
                            <div class="tabs_item">
                                <form method='POST' action='categories-list.php?action=5'>
                                    <div class="row">
                                        <div class="col-md col-sm-6">
                                            <div class="form-group">
                                                <select name='catYachts'>
                                                    <?php
                                                  $stmt_c = $conn -> prepare("SELECT * FROM sub_category WHERE category = 5");
                                                  $stmt_c -> execute();
                                                  $rows_c = $stmt_c -> fetchAll();
                                                  foreach ($rows_c as $row) { ?>
                                                    
                                                    <option value='<?= $row['id'] ?>'><?= $row['name'] ?></option>

                                                    <?php
                                                  }
 
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                           
                                        <div class="col-md col-sm-6 ">
                                            <div class="form-group">
                                               <select name='priceYachts'>
                                                    <option value='10'>10$ - 500$</option>
                                                    <option value='500'>500$ - 1000$</option>
                                                    <option value='1000'>1000$ - 1500$</option>
                                                    <option value='1500'>1500$ - 2000$</option>
                                                    <option value='2000'>2000$ - 2500$</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md col-sm-6 ">
                                            <div class="form-group">
                                                <input type="text" name="searchYachts" placeholder="Search" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-search-btn">
                                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                                    </div>
                                </form>
                            </div>


                            <div class="tabs_item">
                                <form method='POST' action='categories-list.php?action=6'>
                                    <div class="row">
                                        <div class="col-md col-sm-6">
                                            <div class="form-group">
                                                <select name='catcaravans'>
                                                    <?php
                                                  $stmt_c = $conn -> prepare("SELECT * FROM sub_category WHERE category = 6");
                                                  $stmt_c -> execute();
                                                  $rows_c = $stmt_c -> fetchAll();
                                                  foreach ($rows_c as $row) { ?>
                                                    
                                                    <option value='<?= $row['id'] ?>'><?= $row['name'] ?></option>

                                                    <?php
                                                  }
 
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                           
                                        <div class="col-md col-sm-6 ">
                                            <div class="form-group">
                                              <select name='pricecaravans'>
                                                    <option value='10'>10$ - 500$</option>
                                                    <option value='500'>500$ - 1000$</option>
                                                    <option value='1000'>1000$ - 1500$</option>
                                                    <option value='1500'>1500$ - 2000$</option>
                                                    <option value='2000'>2000$ - 2500$</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md col-sm-6 ">
                                            <div class="form-group">
                                                <input type="text" name="searchcaravans" placeholder="Search" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-search-btn">
                                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="tabs_item">
                                <form>
                                    <div class="row">
                                        <div class="col-md col-sm-6 ">
                                            <div class="form-group">
                                                <input type="text" name="search-text" placeholder="Search" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-search-btn">
                                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Car Ranking Area -->
<section class="car-ranking-area bg-ffffff pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2> Featured Car Ads</h2>
            <p>Find the best deals for you</p>
            <div class="section-btn">
                <a href="cars-lists.php" class="default-btn">
                    Show more
                    <span></span>
                </a>
            </div>
        </div>

        <div class="row">
            <?php
              if(isset($_GET['form']) && $_GET['form'] == 'searchCars'){
                 $year = $_POST['Year'];
                 $type = $_POST['Type'];
                 $status = $_POST['Status'];
                 $origin = $_POST['Origin'];

                 $stmt = $conn -> prepare("SELECT * FROM cars WHERE status = ? AND car_type = ? AND year = ? AND origin = ? AND Featured = 1");
                 $stmt -> execute(array($status , $type , $year , $origin));
        }else{

            $stmt = $conn -> prepare("SELECT * FROM cars WHERE Featured = 1");
            $stmt -> execute();
        }
            
            $rows = $stmt -> fetchAll();
            foreach($rows as $row){
              
            ?>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.php?product_id=<?= $row['id'] ?>"><img style='height: 190px;width:285px;' src="assets/images/car-ranking/<?= $row['main_image'] ?>" alt="image"></a>
                        <div class="icon">
                            <div data-id='<?= $row['id'] ?>' class='fav'><i style='font-size:40px;padding: 5px;' class="flaticon-love"></i></div>
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
                                <span>: <?= $row['engine'] ?>HorsePower </span>
                            </li>
                            <li>
                                Transporter
                                <span>: <?= $row['Transporter'] ?> </span>
                            </li>
                            <li>
                                fuel
                                <span>: <?= $row['fuel'] ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
                                   <div id="result"></div>

        </div>
    </div>
</section>
<!-- End Car Ranking Area -->

<!-- Start Parts Ranking Area -->
<section class="car-ranking-area bg-2a1e02 pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2> Spare parts ads </h2>
            <p>Find the best deals for you</p>
            <div class="section-btn">
                <a href="categories-list.php?action=3" class="default-btn">
                    Show more
                    <span></span>
                </a>
            </div>
        </div>

        <div class="row">
              <?php
                  if(isset($_GET['form']) && $_GET['form'] == 'searchParts'){

                     $price1 = $_POST['price'];
                     $price2 = $price1 + 500;
                     $use = $_POST['use'];
                     $Status = $_POST['Status'];
                     $Category = $_POST['Category'];
                     $Type = $_POST['Type'];

                    $stmt = $conn -> prepare("SELECT * FROM products WHERE featured = 1 And price BETWEEN ? AND ? AND uses = ? AND status = ? AND category = ? AND type = ? AND category = 3");
                    $stmt -> execute(array($price1 , $price2 , $use , $Status , $Category , $Type));
                }else{
                    $stmt = $conn -> prepare("SELECT * FROM products WHERE featured = 1 AND category = 3");
                    $stmt -> execute();
                  }
                    $rows = $stmt -> fetchAll();
                    foreach($rows as $row){
              ?>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="categories-details.php?partId=<?= $row['id'] ?>"><img style='height: 190px;width:285px;' src="assets/images/car-ranking/<?= $row['image'] ?>" alt="image"></a>
                        <div class="icon">
                           <div data-id='<?= $row['id'] ?>' class='favPart'><i class="flaticon-love" style='font-size:40px;padding: 5px;'></i></div>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">$<?= $row['price'] ?></div>
                        <h3>
                            <a href="categories-details.php?partId=<?= $row['id'] ?>"><?= $row['name'] ?></a>
                        </h3>
                         <p><b>Category</b>: <?php  
                         
                         $cat = $row['category'] ;
                         $stmt_c = $conn -> prepare("SELECT * FROM categories WHERE id = ?");
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
                                   $stmt_u = $conn -> prepare("SELECT * FROM users WHERE id = ?");
                                   $stmt_u -> execute(array($user));
                                   $row_u = $stmt_u -> fetch();
                                   echo $row_u['firstname']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
                                   <div id="resultparts"></div>
               
        </div>
    </div>
</section>
<!-- End Parts Ranking Area -->

<!-- Start ELC Ranking Area -->
<section class="car-ranking-area bg-ffffff pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2> Electronics ads</h2>
            <p>Find the best deals for you</p>
            <div class="section-btn">
                <a href="categories-list.php?action=1" class="default-btn">
                    Show more
                    <span></span>
                </a>
            </div>
        </div>

        <div class="row">
        <?php
            if(isset($_GET['form']) && $_GET['form'] == 'searchElect'){
                $category = $_POST['category'];
                @$search = $_POST['search-text'];
                $price1 = $_POST['price'];
                $price2 = $price1 + 500;
                $stmt = $conn -> prepare("SELECT * FROM products WHERE name like '%$search%' AND price BETWEEN ? AND ? AND featured = 1 AND category = 1");
                $stmt -> execute(array($price1 , $price2 ));
            }else{
                $stmt = $conn -> prepare("SELECT * FROM products WHERE featured = 1 AND category = 1");
                $stmt -> execute();
            }
                   
                    $rows = $stmt -> fetchAll();
                    foreach($rows as $row){
              ?>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="categories-details.php?electId=<?= $row['id'] ?>"><img style='height: 190px;width:285px;' src="assets/images/car-ranking/<?= $row['image'] ?>" alt="image"></a>
                        <div class="icon">
                           <div data-id='<?= $row['id'] ?>' class='favelect'><i class="flaticon-love" style='font-size:40px;padding: 5px;'></i></div>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">$<?= $row['price'] ?></div>
                        <h3>
                            <a href="categories-details.php?electId=<?= $row['id'] ?>"><?= $row['name'] ?></a>
                        </h3>
                         <p><b>Category</b>: <?=  
                           $cat = $row['category'] ;
                         $stmt_c = $conn -> prepare("SELECT * FROM categories WHERE id = ?");
                         $stmt_c -> execute(array($cat));
                         $row_c = $stmt_c -> fetch();
                         echo $row_c['name']; ?></p>
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
                                              echo $row_u['firstname']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
                                   <div id="resultelect"></div>

        </div>
    </div>
</section>
<!-- End ELC Ranking Area -->

<!-- Start Team Area -->
<section class="team-area pt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-team">
                    <a href="#">
                        <img src="assets/images/team/team-1.jpg" alt="image">
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="single-team">
                    <a href="#">
                        <img src="assets/images/team/team-2.jpg" alt="image">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Team Area -->

<!-- Start real estate Ranking Area -->
<section class="car-ranking-area bg-2a1e02 pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2> Real estate ads </h2>
            <p>Find the best deals for you</p>
            <div class="section-btn">
                <a href="categories-list.php?action=2" class="default-btn">
                    Show more
                    <span></span>
                </a>
            </div>
        </div>

        <div class="row">
               <?php
                   if(isset($_GET['form']) && $_GET['form'] == 'searchEstate'){

                    $category = $_POST['category'];
                    $property = $_POST['property'];
                    $unitType = $_POST['unitType'];
                    $price1    = $_POST['price'];
                    $price2 = $price1 + 50000;
                    $search   = $_POST['search'];
                       
                        $stmt = $conn -> prepare("SELECT * FROM estate WHERE price BETWEEN ? AND ? AND type = ? AND Property = ? AND category = 2 AND featured = 1 AND name like '%$search%'");
                        $stmt -> execute(array($price1 , $price2 , $unitType , $property ));

                   }else{

                       $stmt = $conn -> prepare("SELECT * FROM products WHERE featured = 1 AND category = 2");
                       $stmt -> execute();

                   }
                    $rows = $stmt -> fetchAll();
                    foreach($rows as $row){
              ?>
            <div class="col-lg-3 col-sm-6">
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
                                             $stmt_es = $conn -> prepare("SELECT * FROM categories WHERE id = ?");
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
                                <span>:  <?php echo $row['type'] ;?>  </span>
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
            ?>
                                   <div id="resultestate"></div>

        </div>
    </div>
</section>
<!-- End real estate Ranking Area -->

<!-- Start Blog Area -->
<section class="blog-area bg-ffffff pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>latest news</h2>
            <p>Upcoming cars and events</p>

            <div class="section-btn">
                <a href="#" class="default-btn">
                    Show more
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.php"><img src="assets/images/blog/blog-1.jpg" alt="image"></a>

                    <div class="blog-content">
                        <div class="tag">News</div>
                        <h3>
                            <a href="blog-details.php">Sell your car</a>
                        </h3>
                        <ul class="post-meta">
                            <li>
                                <i class="flaticon-calendar"></i>
                                March 20, 2021
                            </li>
                        </ul>
                        <p>Struggling to sell your car currently on the market</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.php"><img src="assets/images/blog/blog-2.jpg" alt="image"></a>

                    <div class="blog-content">
                        <div class="tag">News</div>
                        <h3>
                            <a href="blog-details.php">Sell your car</a>
                        </h3>
                        <ul class="post-meta">
                            <li>
                                <i class="flaticon-calendar"></i>
                                March 20, 2021
                            </li>
                        </ul>
                        <p>Struggling to sell your car currently on the market</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-blog">
                    <a href="blog-details.php"><img src="assets/images/blog/blog-3.jpg" alt="image"></a>

                    <div class="blog-content">
                        <div class="tag">News</div>
                        <h3>
                            <a href="blog-details.php">Sell your car</a>
                        </h3>
                        <ul class="post-meta">
                            <li>
                                <i class="flaticon-calendar"></i>
                                March 20, 2021
                            </li>
                        </ul>
                        <p>Struggling to sell your car currently on the market</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

<!-- Start Newsletter Area -->
<div class="newsletter-area">
    <div class="container">
        <div class="newsletter-inner-box">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="newsletter-content">
                        <h3>Subscribe to newsletter!</h3>
                        <p>Subscribe to get the latest news and information.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form class="newsletter-form">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="email" required autocomplete="off">
                        <button type="submit">subscribe now</button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>

                <div class="col-lg-2">
                    <div class="newsletter-share-link">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bx-camera'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Newsletter Area -->

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


      $(".favPart").on("click", function () {

            var id = $(this).attr("data-id");
            $.ajax({
            type: "POST",
            url: 'addCarWish.php?action=part',
            data: {id: id},
            success: function(data){

     $("#resultparts").html(data);
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
            // console.log(data);
            $("#resultelect").html(data);
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
            // console.log(data);
            $("#resultestate").html(data);
        }
        });

});


    });
    </script>