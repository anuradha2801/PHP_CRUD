<?php
$pid = $_REQUEST['id'];
$sql_product_data = "SELECT * FROM products WHERE pid='$pid'";
include 'util.php';
$myconn = dbConnect();
$rs = mysqli_query($myconn, $sql_product_data);
$row = mysqli_fetch_assoc($rs);
// print_r($row);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <style>
        .t10 {
            margin-top: 10px;
        }

        .b10 {
            margin-bottom: 10px;
        }
        .heading {
            font-size: 40px;
           margin-top: 0;
         font-weight: bold;
         text-align: center;
         margin-bottom: 4rem;
        }  
    </style>
</head>

<body>
<p class="heading">PHP CRUD OPERATION</p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <img src="img/images.jpg" class="img-responsive img-circle">
            </div>
            <div class="col-md-6" style="background-color: #aabbcc;border-radius: 20px;">
                <h2 style="text-align:center">Product Save</h2>

                <form action="p_update.php" method="POST">
                <input name="pid" type="hidden" value="<?=$row['pid']?>">
                    <input name="name" value="<?=$row['pname']?>" type="text" class="form-control" placeholder="Enter Name Here" required>
                    <input type="number" name="product_price" value="<?=$row['price']?>" class="form-control t10" placeholder="Enter price" required>
                    <input type="text" name="product_cat" value="<?=$row['cat_name']?>" class="form-control t10" placeholder="Enter Category Here" required>
                    <input type="submit" class="t10 b10 btn btn-primary">
                </form>
            </div>
            <div class="col-md-3">
                <img src="img/images.jpg" class="img-responsive img-circle">
            </div>
        </div>
    </div>

</body>

</html>