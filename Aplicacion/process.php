<?php 

session_start();
$mysqli = new mysqli('localhost','root','','farmacia')or die(mysqli_error($mysqli));

$namemedicina = '';
$component = '';
$sustitute = '';
$Descripcion = '';



if(isset($_POST['save'])){
    $idmedicina = $_POST['idmedicina'];
    $namemedicina = $_POST['namemedicina'];
    $component = $_POST['component'];
    $sustitute = $_POST['sustitute'];
    $categoria = $_POST ['categoria'];
    $Descripcion = $_POST['Descripcion'];
    
   $mysqli->query("INSERT INTO medicamentos (ID_producto,Nombre,Componente,Sustituto,Id_categoria,Descripcion)  VALUES('$idmedicina','$namemedicina','$component','$sustitute','$categoria','$Descripcion')") or die($mysqli->error);
    
    $_SESSION['message'] = "El medicamento fue agregado exitosamente";
    $_SESSION['msg_type'] = "success";
    
    header("location: Update.php");
}
if(isset($_POST['save'])){
    
    $categoria = $_POST ['categoria'];
    $Tipo = $_POST['Tipo'];
    
   $mysqli->query("INSERT INTO categoria (id_categoria,Tipo)  VALUES('$categoria','$Tipo')") or die($mysqli->error);
   header("location: Categorias.php");
}


if(isset($_GET['delete'])){
    $idmedicina= $_GET['delete'];
    $mysqli->query("DELETE FROM medicamentos WHERE ID_producto='$idmedicina'") or die ($mysqli->error());
    
    $_SESSION['message'] = "El medicamento fue Eliminado exitosamente";
    $_SESSION['msg_type'] = "danger";
    header("location: Update.php");

}

if(isset($_GET['edit'])){
    $idmedicina= $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM medicamentos WHERE ID_Producto='$idmedicina'") or die ($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $namemedicina = $row['Nombre'];
        $component = $row['Componente'];
        $sustitute = $row['Sustituto'];
        
        
    }
    
}
