<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Farmacias Franjamar</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="to_ico.ico">



</head>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li id="imgfarma">
                <a href="IndexAdmin.php">
                    <img id ="imgfarma2"src="logofarma.jpg">
                    <font color="white" size="3" face="Comic Sans MS,arial,verdana">Farmacia FRANJAMAR</font>
                </a>
            </li>
            <div id="lateralbuttons">
                <li>
                    <a href="BuscarAdmin.php">
                        <font color="white" size="3" face="Comic Sans MS,arial,verdana">Buscar Medicamentos</font>
                        <span style="color:white"class="glyphicon glyphicon-search"></span>
                    </a>
                </li>
                <li>
                    <a href="CategoriasAdmin.php">
                        <font color="white" size="3" face="Comic Sans MS,arial,verdana">Categorias</font>
                        <span style="color:white" class="glyphicon glyphicon-th-list"></span>
                    </a>
                </li>
                
                <li>
                    <a href="Agregar.php"  data-toggle="modal" data-target="#registerModal">
                        <font color="white" size="3" face="Comic Sans MS,arial,verdana">Añadir Medicamento</font>
                        <span style="color:white" class="glyphicon glyphicon-plus-sign"></span>
                    </a>
                </li>
                <li>
                   <a href="CreateCategoria.php"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Crear Categoria</font>
                   <span style="color:white" class="glyphicon glyphicon-plus"></span> 
                   </a> 
                   </li>
                   <li>
                   <a href="Empleado.php"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Registrar Empleado</font>
                   <span style="color:white" class="glyphicon glyphicon-plus"></span> 
                   </a> 
                   </li>
                <li>
                   <a href="Update.php">
                        <font color="white" size="3" face="Comic Sans MS,arial,verdana">Actualizar Inventario</font>
                        <span style="color:white" class="glyphicon glyphicon-edit"></span>
                   </a> 
                </li>
                <li>
                    <a href="logout.php">
                        <font color="white" size="3" face="Comic Sans MS,arial,verdana">Cerrar Sesion</font>
                        <span style="color:white" class="glyphicon glyphicon-lock"></span> 
                    </a> 
                </li>
            </div>   
        </ul>
    </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        
        
       <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <div class="navbar-brand" href="index.php">Farmacia FRANJAMAR</div>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">INICIO</a></li>
      <li><a href="Contactos.html">CONTACTOS</a></li>
    </ul>
  </div>
</nav>

<p id="copyright"><font color="black" size="3" face="Comic Sans MS,arial,verdana">Copyright &copy; 2019 - Derechos Reservados - Farmacia Franjamar C.A</font></p>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1><font color="black" face="Comic Sans MS,arial,verdana">Buscar Medicamentos</h1>
                        <span>
                        <form method="POST" action="" onSubmit="return validarForm(this)">
     <div class="box">
        <div class="container-4">
    <input type="text" id="search" placeholder="Buscar Medicina" name="palabra">
 
    <button type ="submit"value="Buscar" name="buscar" class="icon"><i class="fa fa-search"></i></button>

</div>
</div> 
</form>
                        </span>
 <?php  
if(isset($_POST['buscar'])) 
{   
   ?>
   <table id ="tablalista2"class="table table-bordered"width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
       <tr class="micolor">
           
            <td width="100" align="center"><strong>Nombre</strong></td>
            <td width="100" align="center"><strong>Componente</strong></td>
           <td width="100" align="center"><strong>Sustituto</strong></td>
           <td width="100" align="center"><strong>Descripcion</strong></td>
       </tr> 
       <?php
        $mysqli = new mysqli ('localhost','root','','farmacia')or die (mysqli_error($mysqli)); 
       $buscar = $_POST["palabra"];    
       $result= $mysqli->query ("SELECT * FROM medicamentos WHERE Nombre lIKE '%$buscar%' OR Componente lIKE '%$buscar%' or Sustituto  lIKE '%$buscar%' OR Descripcion lIKE '%$buscar%'");
 
       while($registro = $result->fetch_assoc()) 
       {
           ?> 
           <tr>
              
               <td class="estilo-tabla" align="center"><?=$registro['Nombre']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['Componente']?></td>
               <td class="estilo-tabla" align="center"><?=$registro['Sustituto']?></td>
               <td class="estilo-tabla" align="center"><?=$registro['Descripcion']?></td>

           </tr> 
           <?php 
       } 
    ?>
    </table>
    <?php
} 
?>                        
                        
                        


                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <!-- /#wrapper -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Añadir Medicamento</p>
        <br>
        <br>
        <p>Nombre</p><input id="emailInputR">
        <br>
        <p>Componente</p><input id="emailInputR2">
        <br>
        <p>Sustituto</p><input id="pwInputR">
        <br>
      </div>
    </div>
  </div>
</div>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>