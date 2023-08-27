<?php

$pid=$_REQUEST['id'];
$sql_del_product="DELETE FROM products WHERE pid='$pid'";
include 'util.php';
$conn=dbConnect();
mysqli_query($conn,$sql_del_product);
if(mysqli_affected_rows($conn)>0)
{
    header("Location:p_fetch.php?del=yes");
}

?>