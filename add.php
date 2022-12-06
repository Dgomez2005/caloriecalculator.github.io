<?php
session_start();
include('conn.php');
$comida = $_POST['comida'];
$calorias = $_POST['calorias'];
$consulta="SELECT SUM(calorias) as 'suma' from dieta";
$result=mysqli_query($conn,$consulta);
$data=mysqli_fetch_array($result);
$total=$data['suma'];


$insertar = "INSERT INTO dieta(alimento,calorias,total) VALUES('$comida','$calorias','$total')";
$res = mysqli_query($conn, $insertar);


include("index.php");
?>