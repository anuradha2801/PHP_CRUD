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
                <h2 style="text-align:center">Products</h2>

                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM products";

                    include 'util.php';
                    $conn = dbConnect();

                    $rs = mysqli_query($conn, $sql);

                    if ($rs->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($rs)) {
                    ?>
                            <tr>
                                <td><?= $row['pname'] ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['cat_name']; ?></td>
                                <td>
                                    <a href="p_delete.php?id=<?= $row['pid'] ?>">
                                        <img src="img/delete.png" width="25px" height="25px">
                                    </a>
                                    <a href="p_edit.php?id=<?= $row['pid'] ?>">
                                    <img src="img/edit.png" width="25px" height="25px">
                                    </a>
                                </td>
                            </tr>
                    <?php

                        }
                    } else {
                        echo "No records found";
                    }
                    ?>
                </table>

            </div>
            <div class="col-md-3">
                <img src="img/images.jpg" class="img-responsive img-circle">
            </div>
        </div>
    </div>

</body>

</html>