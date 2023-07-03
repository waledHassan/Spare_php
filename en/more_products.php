<?php
// if(!empty($_POST['num'])){
include("functions/connect.php");

$lastId = $_POST['lastId'];

// print_r($_POST);
// exit();
//    if($num > 0 ){
  
$stmt = $conn -> prepare("SELECT * FROM cars LIMIT 3 OFFSET ".$lastId."");
$stmt -> execute(array());
$rows = $stmt -> fetchAll();

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
