<?php 

        // $action= $_GET['action'];
    include('assets/layouts/head.php');
    include('assets/layouts/header.php');

    $stmt_ch = $conn -> prepare("SELECT * FROM categories WHERE id = ?");
    $stmt_ch -> execute(array($_GET['action'] ));
    $count = $stmt_ch -> rowCount();
    if($count > 0){
?>
<!-- Start Page Banner -->
<div class="page-banner-area item-bg-2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Real Estate</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li><span>Real Estate</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Car Shop Area -->
<div class="car-shop-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <aside class="widget-area">
          
                <!-- #################    Start Form Estate       ###################### -->
<?php
if(isset($_GET['action']) && $_GET['action'] == 2){
?>

                <div class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search:</span>
                                <input type="search" id='searchEstate' class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit">
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </form>
                    </div>

                    <div class="widget widget_filter_results">
                        <h3 class="widget-title">Filter Results</h3>

              <form>
                            <div class="condition">
                             <div class="form-group">
                                <label>estate Category</label>

                                <select name='estate[Attorney][empresa]' id='estate'>

                               <?php

                                    $stmt = $conn -> prepare("SELECT * FROM sub_category WHERE category = 2");
                                    $stmt -> execute();
                                    $rows = $stmt -> fetchAll();
                                    foreach($rows as $row){

                             ?>

                            <option value='<?= $row['id'] ?>' ><?= $row['name'] ?></option>

                            <?php  
                            }
                            ?>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Property type</label>

                        <select name='property[Attorney][empresa]' id='property'>

                        <option value='Residential'>Residential</option>
                        <option value='Commercial' >Commercial</option>

                       
                        </select>
                    </div>


                   <div class="form-group">
                        <label>unit type </label>
                           <select name='property[Attorney][empresa]' id='unit'>


                           <option value='apartment' >apartment</option>
                           <option value='villa' >villa</option>
                            
                         </select>
                    </div>

                    <div class="price-range-content">
                        <h4>Price</h4>

                        <div class="price-range-bar sliderestate" id="range-slider"></div>
                        <div class="price-range-filter">
                            <div class="price-range-filter-item">
                                <input type="text" id="price-amount" readonly>
                            </div>
                        </div>
                    </div>

          </form>

          <!-- ################ End  Estate Form ##################### -->

  <!-- ################### Start  parts Form ###################### -->
                     
<?php
}elseif(isset($_GET['action']) && $_GET['action'] == 1){  
    ?>
               <div class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search:</span>
                                <input type="search" id='searchElect' class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit">
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </form>
                    </div>


                    <div class="widget widget_filter_results">
                     <form>
                        <div class="price-range-content">
                            <h4>Price</h4>

                            <div class="price-range-bar priceElect" id="range-slider"></div>
                            <div class="price-range-filter">
                                <div class="price-range-filter-item">
                                    <input type="text" id="price-amount" readonly>
                                </div>
                            </div>
                        </div>
                    </form>

<?php    

}else{  
?>

              <div class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search:</span>
                                <input type="search" id='searchParts' class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit">
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </form>
                    </div>


                    <div class="widget widget_filter_results">
                     <form>


                        <div class="price-range-content">
                            <h4>Price</h4>

                            <div class="price-range-bar priceParts" id="range-slider"></div>
                            <div class="price-range-filter">
                                <div class="price-range-filter-item">
                                    <input type="text" id="price-amount" readonly>
                                </div>
                            </div>
                        </div>
                    </form>
<?php
}
?>
                    </div>

                </aside>
            </div>


            <div class="col-lg-9 col-md-12">
                <div class="row" id='products5'>
        <?php

            if(isset($_GET['action']) && $_GET['action'] == 1){

                $stmt = $conn -> prepare("SELECT * FROM products WHERE category = 1");
                $stmt -> execute();
                $rows = $stmt -> fetchAll();
                foreach($rows as $row){

             ?>
                       <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="categories-details.php?electId=<?= $row['id'] ?>"><img  style='height: 190px;width:285px;' src="assets/images/car-ranking/<?= $row['image'] ?>" alt="image"></a>
                                <div class="icon">
                                   <div data-id='<?= $row['id'] ?>' class='favelect'><i class="flaticon-love" style='font-size:40px;padding: 5px;'></i></div>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$<?= $row['price'] ?></div>
                                <h3>
                                    <a href="categories-details.php?electId=<?= $row['id'] ?>"><?= $row['name'] ?></a>
                                </h3>
                                <p><b>Category</b>: <?php $cat = $row['category'] ;
                                            $stmt_c = $conn -> prepare("SELECT * FROM categories WHERE id = ? ");
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
                                              echo $row_u['firstname'];
                                    
                                    ?></span>
                                   </li>
                                </ul>
                            </div>
                        </div>
                    </div>

             <?php
             }

            }elseif(isset($_GET['action']) && $_GET['action'] == 2){

                $stmt = $conn -> prepare("SELECT * FROM products WHERE category = 2");
                $stmt -> execute();
                $rows = $stmt -> fetchAll();
                foreach($rows as $row){

             ?>
                       <div class="col-lg-4 col-sm-6">
                        <div class="single-car-ranking">
                            <div class="car-ranking-image">
                                <a href="categories-details.php?estateId=<?= $row['id'] ?>"><img  style='height: 190px;width:285px;' src="assets/images/car-ranking/<?= $row['image'] ?>" alt="image"></a>
                                <div class="icon">
                                  <div data-id='<?= $row['id'] ?>' class='favestate'><i class="flaticon-love" style='font-size:40px;padding: 5px;'></i></div>
                                </div>
                            </div>
                            <div class="car-ranking-content">
                                <div class="tag">$<?= $row['price'] ?></div>
                                <h3>
                                    <a href="categories-details.php?estateId=<?= $row['id'] ?>"><?= $row['name'] ?></a>
                                </h3>
                                <p><b>Category</b>: <?php 
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
                                <span>: <?= $row['type'] ; ?> </span>
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
            else{
                  if(isset($_POST['searchtrailer']) && $_GET['action'] == '4'){

                    $subcategory = $_POST['subcategory'];
                    $pricetrailer = $_POST['pricetrailer'];
                    $pricetrailer2 = $_POST['pricetrailer'] + 500;
                    $searchtrailer = $_POST['searchtrailer'];
                    
                    $stmt = $conn -> prepare("SELECT * FROM products WHERE sub_category = ? AND price BETWEEN ".$pricetrailer." AND ".$pricetrailer2." AND name like '%$searchtrailer%' ");
                    $stmt -> execute(array($subcategory)); 

                  }elseif(isset($_POST['catYachts']) && $_GET['action'] == '5'){

                    $catYachts = $_POST['catYachts'];
                    $searchYachts = $_POST['searchYachts'];
                    $priceYachts = $_POST['priceYachts'];
                    $priceYachts2 = $_POST['priceYachts'] + 500;

                    $stmt = $conn -> prepare("SELECT * FROM products WHERE sub_category = ? AND price BETWEEN ".$priceYachts." AND ".$priceYachts2." AND name like '%$searchYachts%' ");
                    $stmt -> execute(array($catYachts));
                  }   

                elseif(isset($_POST['catcaravans']) && $_GET['action'] == '6'){

                    $catcaravans = $_POST['catcaravans'];
                    $pricecaravans = $_POST['pricecaravans'];
                    $pricecaravans2 = $_POST['pricecaravans'] + 500;
                    $searchcaravans = $_POST['searchcaravans'];

                    $stmt = $conn -> prepare("SELECT * FROM products WHERE sub_category = ? AND price BETWEEN ".$pricecaravans." AND ".$pricecaravans2." AND name like '%$searchcaravans%' ");
                    $stmt -> execute(array($catcaravans));
                  }   

                else{
                  $action = $_GET['action'];
                  $stmt = $conn -> prepare("SELECT * FROM products WHERE category = ? ");
                  $stmt -> execute(array($action));    
                }
                  $rows = $stmt -> fetchAll();
                  foreach($rows as $row){
          ?>

        <div class="col-lg-4 col-sm-6">
            <div class="single-car-ranking">
                <div class="car-ranking-image">
                    <a href="categories-details.php?partId=<?= $row['id'] ?>"><img  style='height: 190px;width:285px;' src="assets/images/car-ranking/<?= $row['image'] ?>" alt="image"></a>
                    <div class="icon">
                    <div data-id='<?= $row['id'] ?>' class='favPart'><i class="flaticon-love" style='font-size:40px;padding: 5px;'></i></div>
                    </div>
                </div>
                <div class="car-ranking-content">
                    <div class="tag">$<?= $row['price'] ?></div>
                    <h3>
                        <a href="categories-details.php?partId=<?= $row['id'] ?>"><?= $row['name'] ?></a>
                    </h3>
                    <p><b>Category</b>: <?php $cat = $row['category'] ;
                                $stmt_c = $conn -> prepare("SELECT * FROM categories WHERE id = ? ");
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
}
?>

                               <div id="result"></div>


                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <!-- <a href="#" class="prev page-numbers">
                                <i class='flaticon-left-arrow'></i>
                            </a> -->
                            <!-- <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a> -->
                            <!-- <a href="#" class="next page-numbers">
                                <i class='flaticon-right-arrow'></i>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
    include('assets/layouts/footer.php');
    include('assets/layouts/scripts.php');
    ?>

   <script>

    // start Estate Search


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


   $("#searchEstate").on("keyup",function(){   

        var property   = $('#property').val();
        var search     = $('#searchEstate').val();
        var unit       = $('#unit').val();
        var estate       = $('#estate').val();


        $.ajax({
        type: "POST",
        url: 'search_estate.php<?php 
                                    if(isset($_GET['action']))
                                    {
                                        echo "?action=" .$_GET['action']; 
                                    }
        ?>',
        data: {search , property , unit , estate},
        success(data){
            $("#products5").html(data);
        }
        });

   });

   $('#property, #unit, #estate').on('change', function(){

        var property   = $('#property').val();
        var search     = $('#searchEstate').val();
        var unit       = $('#unit').val();
        var estate       = $('#estate').val();
        

        $.ajax({
            type: "POST",
            url: 'search_estate.php<?php 
                                    if(isset($_GET['action']))
                                    {
                                        echo "?action=" .$_GET['action']; 
                                    }?>',
            data: {property , unit , search , estate},
            success(data){
            $("#products5").html(data);
            }
    });
 });


$( ".sliderestate" ).slider({
        change: function( event, ui ) {
            console.log(ui.values);
            
          var value1 = ui.values[0];
          var value2 = ui.values[1];
          var property   = $('#property').val();
          var search     = $('#searchEstate').val();
          var unit       = $('#unit').val();
          var estate       = $('#estate').val();



            $.ajax({
            type: "POST",
            url: 'search_estate.php<?php 
                                   if(isset($_GET['action']))
                                   {
                                       echo "?action=" .$_GET['action']; 
                                   }
        ?>',
            data: {value1 , value2 ,property , search , unit , estate},
            success(data){
              $("#products5").html(data);
            }
        });

        } 
    });


//    Start Parts Search /// ######################################################################################


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


$("#searchParts").on("keyup",function(){   

    // console.log('done');
        var partCategory   = $('#partCategory').val();
         var searchParts  = $('#searchParts').val();


        $.ajax({
            type: "POST",
            url: 'search_parts.php<?php 
                                    if(isset($_GET['action']))
                                    {
                                        echo "?action=" .$_GET['action']; 
                                    }?>',
            data: { partCategory , searchParts },
            success(data){
                // console.log('done');
               $("#products5").html(data);
            }
        });
    })



    $( ".priceParts" ).slider({
        change: function( event, ui ) {
            console.log(ui.values);
            
          var value1 = ui.values[0];
          var value2 = ui.values[1];
          var partCategory   = $('#partCategory').val();
          var searchParts  = $('#searchParts').val();

            $.ajax({
            type: "POST",
            url: 'search_parts.php<?php 
                                   if(isset($_GET['action']))
                                   {
                                       echo "?action=" .$_GET['action']; 
                                   }
        ?>',
            data: {value1 , value2 , partCategory , searchParts},
            success(data){
              $("#products5").html(data);
            }
        });

        } 
    });


    $("#partCategory").change(function(){

         var partCategory   = $('#partCategory').val();
         var searchParts  = $('#searchParts').val();


        $.ajax({
            type: "POST",
            url: 'search_parts.php<?php 
                                    if(isset($_GET['action']))
                                    {
                                        echo "?action=" .$_GET['action']; 
                                    }?>',
            data: { partCategory , searchParts },
            success(data){
                // console.log('done');
               $("#products5").html(data);
            }
        });
});



//   Start electronics //// ############################################################################################


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

$("#searchElect").on("keyup",function(){   

     var searchElect   = $('#searchElect').val();

        $.ajax({
        type: "POST",
        url: 'search_elect.php<?php 
                            if(isset($_GET['action']))
                            {
                                echo "?action=" .$_GET['action']; 
                            }
        ?>',
        data: {searchElect },
        success(data){

            $("#products5").html(data);

          }

     });

});

$( ".priceElect" ).slider({

        change: function( event, ui ) {
            
            var value1 = ui.values[0];
            var value2 = ui.values[1];
            var searchElect   = $('#searchElect').val();

            $.ajax({
            type: "POST",
            url: 'search_elect.php<?php 
                                   if(isset($_GET['action']))
                                   {
                                       echo "?action=" .$_GET['action']; 
                                   }
        ?>',
            data: {value1 , value2 ,searchElect},
            success(data){

              $("#products5").html(data);

            }
        });

        } 
});


   </script>
    
    
    
    <?php
        }else{
              header("location:index.php");
        }
?>