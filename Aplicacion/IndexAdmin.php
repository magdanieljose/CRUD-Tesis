<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <head>
<link rel="shortcut icon" href="to_ico.ico">
</head>

    <title> Farmacia FRANJAMAR</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body id="bodymain">

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
                    <a href="BuscarAdmin.php"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Buscar Medicamentos</font>
<span style="color:white"class="glyphicon glyphicon-search"></span>
                    </a>
                      
                </li>
                <li>
                    <a href="CategoriasAdmin.php"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Categorias</font><span style="color:white" class="glyphicon glyphicon-th-list"></span></a>
                </li>
                
                <li>
                    <a href="Agregar.php"  data-toggle="modal" data-target="#registerModal"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Añadir Medicamento</font><span style="color:white" class="glyphicon glyphicon-plus-sign"></span> 
                   </a>
                </li>
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
                   <a href="Update.php"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Actualizar inventario</font>
<span style="color:white" class="glyphicon glyphicon-edit"></span>
                   </a> 
                   </li>
                <li>
                   <a href="logout.php"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Cerrar Sesion</font>
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

        <!-- /#page-content-wrapper -->

    
    
   
    

    
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
        <p>Añadir Medicamento</p><button id="enter"></button>
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