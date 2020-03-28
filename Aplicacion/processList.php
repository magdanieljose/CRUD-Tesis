<?php 

session_start();

$id ='';
$email = '';
$password = '';


$mysqli = new mysqli ('localhost','root','','php_login')or die (mysqli_error($mysqli)); 
    $result = $mysqli->query("SELECT * FROM  users")or die($mysqli->error);

if(isset($_GET['delete'])){
    $id= $_GET['delete'];
    $mysqli->query("DELETE FROM users WHERE id='$id'") or die ($mysqli->error());
    $_SESSION['message'] = "El empleado  fue Eliminado exitosamente";
    $_SESSION['msg_type'] = "danger";
    
    header("location: Empleado.php");



}
