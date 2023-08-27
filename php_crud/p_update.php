<?php

$id=$_REQUEST['pid'];
$pname=$_REQUEST['name'];
$price=$_REQUEST['product_price'];
$pcat=$_REQUEST['product_cat'];

$sql_update="UPDATE products SET pname='$pname',price='$price',cat_name='$pcat' WHERE pid='$id'";

include 'util.php';
$myconn=dbConnect();

mysqli_query($myconn,$sql_update);

if(mysqli_affected_rows($myconn)>0)
{
    header("Location:p_fetch.php?upd=yes");
}


