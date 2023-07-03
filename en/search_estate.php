<?php
include("functions/connect.php");

  @$search = $_POST['search'];
  @$property = $_POST['property'];
  @$unit = $_POST['unit'];
  @$estate = $_POST['estate'];
  @$action = $_GET['action'];
  @$value1 = $_POST['value1'];
  @$value2 = $_POST['value2'];
 

  $query = "SELECT * FROM products";
  $filter = array();

  if($value1 != ''){
      $filter[] = "price BETWEEN ".$value1." AND ".$value2."";
  }

  if($property != ''){

    $filter[] = "property like '%$property%'";

 }
 if($unit != ''){

    $filter[] = "type like '%$unit%' ";

 }
 if($search != ''){

    $filter[] = "name like '%$search%' ";

 }
 if($action != ''){

     $filter[] = "category = ".$action."";
 }
 if($estate != ''){

    $filter[] = "sub_category = ".$estate."";
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
                                 
                                            $cat = $row['category'] ;
                                            $stmt_c = $conn -> prepare("SELECT * FROM categories WHERE id = ? ");
                                            $stmt_c -> execute(array($cat));
                                            $row_c = $stmt_c -> fetch();
                                            echo $row_c['name'];    
                                        
                                ?></p>
                                <hr>

                                <ul class="list">

                                    <?php
                                if($_GET['action'] !=  'estate'){ ?>

                                    <li>
                                    use
                                    <span>: <?= $row['uses'] ?> </span>
                                   </li>
                                   
                                   <li>
                                    Status
                                    <span>: <?= $row['status'] ?> </span>
                                   </li>
                                   <?php
                                      }else{  ?>

<li>
                                 space
                                <span>: <?= $row['space'] ?> sqm</span>
                                </li>
                                <li>
                                Type
                                <span>:  <?php $type = $row['type'] ;
                                    $stmt_t = $conn -> prepare("SELECT * FROM unit_type WHERE id = ?"); 
                                    $stmt_t -> execute(array($type));
                                    $row_t = $stmt_t -> fetch();
                                    echo $row_t['name'];
                                
                                 ?>  </span>
                                </li>

                                      <?php   
                                      }
                                   ?>
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


