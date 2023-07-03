<?php
include("functions/connect.php");

    @$search      = $_POST['search'];
    @$car         = $_GET['car'];
    @$status      = $_GET['status'];
    // @$value1      = $_POST['value1'];
    // @$value2      = $_POST['value2'];
    @$typecar        = $_POST['typecar'];
    @$brand       = $_POST['brand'];
    @$year        = $_POST['year'];

// echo $typecar;
// exit();

    $stmt2 = $conn -> prepare("SELECT * FROM cars_type WHERE type =?");
    $stmt2 -> execute(array($typecar));
    $rowT = $stmt2 -> fetch();
    $type = $rowT['id'];
    // echo $type;

    $query = "SELECT * FROM cars";
    $filter = array();

    if($car != ''){

        $car = $_GET['car'];
        $stmt1 = $conn -> prepare("SELECT * FROM cars_origin WHERE origin =?");
        $stmt1 -> execute(array($car));
        $row2 = $stmt1 -> fetch();

        $filter[] =  "origin = ".$row2['id']." AND car_type = ".$type."";
    }
    if($status != ''){

       $filter[] = "status = '$status' AND car_type = ".$type."";

    }
    // if($value1 != '' && $value2 != ''){

    //     $filter[] = "price BETWEEN ".$value1." AND ".$value2." AND name like '%$search%'";

    // }
    if($search != ''){


        $filter[] = " name like '%$search%' AND car_type = ".$type."";

    }if($brand != ''){

        $brand = $_POST['brand'];
        $stmt1 = $conn -> prepare("SELECT * FROM cars_brand WHERE name =?");
        $stmt1 -> execute(array($brand));
        $row = $stmt1 -> fetch();

        $filter[] = "brand = ".$row['id']." AND car_type = ".$type." ";

    }if($year != ''){

        $filter[] = "year= ".$year." AND car_type = ".$type."";
    }


    if(count($filter) > 0){

        $query .= " WHERE " . implode(' AND ', $filter);
        $sql = $conn->prepare($query);
        // $sql->bindParam(':gender', $gender, PDO::PARAM_STR);
        // $sql->bindParam(':religion', $religion, PDO::PARAM_STR);
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
