<?php
session_start();
include('conn.php');
$meta_inicio = $_POST['meta'];
$total = "SELECT total from dieta";
$meta_final = $meta_inicio - $total;

$result= mysqli_query($conn,$meta_final);
$data= mysqli_fetch_array($result);

$insertar = "INSERT INTO dieta(meta) VALUES('$meta_final')";
$res = mysqli_query($conn, $insertar);

include("index.php");
?>