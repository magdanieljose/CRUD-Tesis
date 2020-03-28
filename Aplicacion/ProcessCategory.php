<?php
$mysqli = new mysqli('localhost','root','','farmacia')or die(mysqli_error($mysqli));


if(isset($_POST['save'])){
    
    $id_categoria = $_POST ['id_categoria'];
    $Tipo = $_POST['Tipo'];
    
   $mysqli->query("INSERT INTO categoria (id_categoria,Tipo)  VALUES('$id_categoria','$Tipo')") or die("Error al crear categoria,Numero de puesto ya utilizado");
   header("location: CategoriasAdmin.php");

}