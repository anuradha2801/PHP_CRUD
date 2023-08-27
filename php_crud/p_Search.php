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
                <form action="" method="POST">
                    <input type="text" name="q" class="t10 form-control" placeholder="Enter Name Here" autofocus required>
                    <input type="submit" class="t10 b10 btn btn-primary">
                </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $key=$_REQUEST['q'];
                    $sql = "SELECT * FROM products WHERE pname='$key'";

                    include 'util.php';
                    $conn = dbConnect();

                    $rs = mysqli_query($conn, $sql);

                    if ($rs->num_rows > 0) {
                ?>
                        <h2 style="text-align:center">Products</h2>

                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($rs)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['pname']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                </tr>
                    <?php

                            }
                        } else {
                            echo "No records found";
                        }
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