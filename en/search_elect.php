<?php
include("functions/connect.php");

  $searchElect = $_POST['searchElect'];
  @$value1 = $_POST['value1'];
  @$value2 = $_POST['value2'];
  $action      = $_GET['action'];

//   echo $value1;
 
  $query = "SELECT * FROM products";

  $filter = array();

  if($action != ''){

    $filter[] = "category = ".$action."";
}
  if($searchElect != ''){

    $filter[] = "name like '%$searchElect%'";

 }
 if($value1 != ''){
       $filter[] = "price BETWEEN ".$value1." AND ".$value2."";
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
                                echo $row_c['name'];?></p>
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


