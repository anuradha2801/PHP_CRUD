<?php

function dbConnect()
{
   // $conn = mysqli_connect("localhost", "root", "", "trip");
   // $conn = mysqli_connect("localhost", "root", "", "employee");
   $conn = mysqli_connect("localhost", "root", "", "products");
    return $conn;
}
?>