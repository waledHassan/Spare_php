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
                    <h2>Cars</h2>
                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li><span>Cars</span></li>
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
                    <div class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search:</span>
                                <input type="search" id='search' class="search-field" placeholder="Search Name...">
                            </label>
                            <button type="submit" id='btnsearch'>
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </form>
                    </div>

                    <div class="widget widget_filter_results">
                        <h3 class="widget-title">Filter Results</h3>

                        <form>
                            <div class="condition">
                                <h3>Vehicle Origin</h3>

                                <div class="condition">
                                    <ul class="condition-list">
                                        <li class="<?php if(! isset($_GET['car'])){echo "active" ;}?>"><a href="cars-lists.php">All</a></li>
                                        <li><a class="<?php if(isset($_GET['car']) && $_GET['car'] == 'Gulf'){echo "active" ;}?>" href="cars-lists.php?car=Gulf<?php if(isset($_GET['status'])){echo "&status=" . $_GET['status']; }?>">Gulf</a></li>
                                        <li class="<?php if(isset($_GET['car']) && $_GET['car'] == 'incoming'){echo "active" ;}?>"><a href="cars-lists.php?car=incoming<?php if(isset($_GET['status'])){echo "&status=" . $_GET['status']; }?>">Incoming</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Type of car</label>

                                <select name='typecar[Attorneycar][empresacar]' id='typecar'>
                                    <!-- <option>ALL</option> -->
                                      <?php
                                        $stmt = $conn -> prepare("SELECT * FROM cars_type");
                                        $stmt -> execute();
                                        $rows = $stmt -> fetchAll();
                                        foreach($rows as $row){
                                       ?>
                                    <option  value='<?= $row['type'] ?>'><?= $row['type'] ?></option>
                                     <?php
                                             }
                                     ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Vehicle Brand</label>

                                <select name='brand[AttorneyBrand][empresaBrand]' id='brand'>
                                    <!-- <option>ALL</option> -->
                                    <?php
                                        $stmt = $conn -> prepare("SELECT * FROM cars_brand");
                                        $stmt -> execute();
                                        $rows = $stmt -> fetchAll();
                                        foreach($rows as $row){
                                       ?>
                                    <option value='<?= $row['name'] ?>'><?= $row['name'] ?></option>
                                     <?php
                                             }
                                     ?>
                                </select>
                            </div>

                            <!-- <div class="form-group">
                                <label>Car Model</label>

                                <select>
                                    <option>ALL</option>
                                    <option>Sedan</option>
                                    <option>MPV</option>
                                    <option>SUV</option>
                                    <option>Crossover</option>
                                    <option>Coupe</option>
                                    <option>Convertible</option>
                                </select>
                            </div> -->

                            <div class="form-group">
                                <label>Year</label>

                                <select name='year[Attorneyyear][empresayear]' id='year'>
                                <?php
                                        $stmt = $conn -> prepare("SELECT * FROM cars_year");
                                        $stmt -> execute();
                                        $rows = $stmt -> fetchAll();
                                        foreach($rows as $row){
                                       ?>
                                    <option value='<?= $row['year'] ?>'><?= $row['year'] ?></option>
                                     <?php
                                             }
                                     ?>
                                </select>
                            </div>
                            <div class="condition">
                                <h3>vehicle status</h3>

                                <div class="condition">
                                    <ul class="condition-list">
                                        <!-- <li><a href="cars-lists.php">All</a></li> -->
                                        <li><a class="<?php if(isset($_GET['status']) && $_GET['status'] == 'agency'){echo "active" ;}?>" href="cars-lists.php?status=agency<?php if(isset($_GET['car'] )){echo "&car=". $_GET['car'] ;}?>">Agency</a></li>
                                        <li><a class="<?php if(isset($_GET['status']) && $_GET['status'] == 'used'){echo "active" ;}?>" href="cars-lists.php?status=used<?php if(isset($_GET['car'] )){echo "&car=". $_GET['car'] ;}?>">Used</a></li>
                                        <li class="<?php if(isset($_GET['status']) && $_GET['status'] == 'scrap'){echo "active" ;}?>"><a href="cars-lists.php?status=scrap<?php if(isset($_GET['car'] )){echo "&car=". $_GET['car'] ;}?>">Scrap</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="price-range-content">
                                <h4>Price</h4>

                                <div class="price-range-bar" id="range-slider"></div>
                                <div class="price-range-filter">
                                    <div class="price-range-filter-item">
                                        <input type="text" id="price-amount" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </aside>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="row" id='products5'>
                <?php 
                @$car        = $_GET['car'];
                @$status     = $_GET['status'];
                
                if(!isset($_GET['car']) && !isset($_GET['status'])){
                    $query = "SELECT * FROM cars LIMIT 3";
                }else{
                    $query = "SELECT * FROM cars";
                }
                    $filter = array();
            
            
                   if($car != ''){
                        $car = $_GET['car'];
                        $stmt1 = $conn -> prepare("SELECT * FROM cars_origin WHERE origin = ?");
                        $stmt1 -> execute(array($car));
                        $row2 = $stmt1 -> fetch();
                        $filter[] =  "origin = ".$row2['id'];
                   }
                   if($status != ''){
                     $filter[] = "status = '$status'";
                  }
              
            
                   if(count($filter) > 0){
                       $query .= " WHERE " . implode(' AND ', $filter);
                       $sql = $conn->prepare($query);
                       $sql->execute();
                       $rows = $sql->fetchAll();
                  }else{
                       $sql = $conn->prepare($query);
                       $sql->execute();
                       $rows = $sql->fetchAll();
                  }

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
                ?>
                                   <div id="result"></div>

                                </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="pagination-area divparent">
                                            <!-- <a href="#" class="prev page-numbers">
                                                <i class='flaticon-left-arrow'></i>
                                            </a> -->
                                            <?php 
                                              if(! isset($_GET['car']) && ! isset($_GET['status']) ){
                                            ?>
                               <span class="btn btn-primary ShowMore" aria-current="page" data-num="<?= $row['id'] ?>">Show More</span>
                             
                             <?php
                               }
                               ?>
                               <!-- <a href="#" class="next page-numbers"> -->
                                                                <!-- <i class='flaticon-right-arrow'></i>
                                                            </a> -->
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

<script type="text/javascript">
    $(document).ready(function(){

      $( "#range-slider" ).slider({

         change: function( event, ui ) {
            
            var value1 = ui.values[0];
            var value2 = ui.values[1];
            var search = $('#search').val();
            var type   = $('#type').val();
            var brand  = $('#brand').val();
            var year   = $('#year').val();

            $.ajax({
            type: "POST",
            url: 'search_name.php?<?php 
                                   if(isset($_GET['car']) && !isset($_GET['status']))
                                    {
                                        echo "car=" .$_GET['car']; 
                                    }elseif(isset($_GET['status']) && !isset($_GET['car']))
                                    {
                                        echo "status=" .$_GET['status'];  
                                    }elseif(isset($_GET['status']) && isset($_GET['car']))
                                    {
                                        echo "status=" .$_GET['status'] . "&car=" .$_GET['car'];
                                    }
        ?>',
            data: {value1 , value2 , type , brand , year},
            success(data){

              $("#products5").html(data);

            }

        });

     } 
 });
 
 //  ############# //

    $("#search").on("keyup",function(){
 
            var search = $('#search').val();
            var typecar   = $('#typecar').val();
            var brand  = $('#brand').val();
            var year   = $('#year').val();

            $.ajax({
            type: "POST",
            url: 'search_name.php?<?php 
                                   if(isset($_GET['car']) && !isset($_GET['status']))
                                    {
                                        echo "car=" .$_GET['car']; 
                                    }elseif(isset($_GET['status']) && !isset($_GET['car']))
                                    {
                                        echo "status=" .$_GET['status'];  
                                    }elseif(isset($_GET['status']) && isset($_GET['car']))
                                    {
                                        echo "status=" .$_GET['status'] . "&car=" .$_GET['car'];
                                    }
            ?>',
            data: {search , typecar , brand , year},
            success(data){

                $("#products5").html(data);

            }

        });
   
     });

   // ############# //

$("#type").change(function(){
		var type =  $('#type').val();
		
	  
		$.ajax({
		  type: "POST",
		  url: 'search_name.php',
		  data: {type : type},
		  success(data){
			$("#products5").html(data);
		  }
	  });
  });

//   ###########  //
	$(".fav").on("click", function () {

		var id = $(this).attr("data-id");

	$.ajax({
		type: "POST",
		url: 'addCarWish.php',
		data: {id: id},
		success: function(data){
			$("#result").html(data);
		}

	  });

 });
  
//  ####### //

	$('.divparent').on('click' , '.ShowMore' , function () {

		    var lastId = 0 ;

		$('.idHidden').each((index , item) => {
			  lastId = item.value ;
		})

		$.ajax({
			type: "POST",
			url: 'more_products.php',
			data: {lastId : lastId},
			success(data){
			$("#products5").append(data);
			}

		});
		
	})

	// ####### //

	$('#typecar, #brand, #year').on('change', function(){

			var typecar   = $('#typecar').val();
			var brand  = $('#brand').val();
			var year   = $('#year').val();
			var search = $('#search').val();
          
           $.ajax({
			type: "POST",
			url: 'search_name.php',
			data: {typecar , brand , year , search},
			success(data){
				
			    $("#products5").html(data);

			}

        });

    });

    });





    </script>