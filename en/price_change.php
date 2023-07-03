<?php
// if(!empty($_POST['num'])){
include("functions/connect.php");

$value1 = $_POST['value1'];
$value2 = $_POST['value2'];

@$search      = $_POST['search'];
@$car        = $_GET['car'];
@$status     = $_GET['status'];


$query = "SELECT * FROM cars";
$filter = array();

if($car != ''){
    $car = $_GET['car'];
    $stmt1 = $conn -> prepare("SELECT * FROM cars_origin WHERE origin =?");
    $stmt1 -> execute(array($car));
    $row2 = $stmt1 -> fetch();
    $filter[] =  "origin = ".$row2['id']." AND price BETWEEN ".$value1." AND ".$value2."";
}
if($status != ''){
   $filter[] = "status = '$status' AND price BETWEEN ".$value1." AND ".$value2."";
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
// }
// }
?>
