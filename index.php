<!--

 Develop by Alireza Behafarin

 git : https://github.com/arezabfn


-->


<?php

session_start();

include "php/component.php";
include "php/CreateDb.php";

//create instance of CreateDb Class
$database = new CreateDb("Productdb2","Producttb2");

if(isset($_POST['add'])){

    if (isset($_SESSION['cart'])){
        $item_array_id = array_column($_SESSION['cart'],"product_id");

        if(in_array($_POST['product_id'],$item_array_id)){
            echo '<script>alert("Product is already added in the cart...!")</script>';
            echo '<script>window.location="index.php"</script>';
        }else{
            $count = count($_SESSION['cart']);
            $item_array = array('product_id' => $_POST['product_id']);
            $_SESSION['cart'][$count] = $item_array;
        }


    }else{
        $item_array = array('product_id' => $_POST['product_id']);

        //Create New Session Variable
        $_SESSION['cart'][0] = $item_array;
//        print_r($_SESSION['cart']);
    }


}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hafez Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="main.css" rel="stylesheet" >
</head>
<body>

<?php
include "php/header.php";
?>

<div class="container">
    <div class="row text-center py-5">
        <?php

            $result = $database->getData();
            while ($row = mysqli_fetch_assoc($result)){
                cart($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
            }

        ?>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>