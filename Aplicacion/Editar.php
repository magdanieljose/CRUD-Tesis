<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="to_ico.ico">


    <title>FARMACIAS FRANJAMAR</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="style.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li id="imgfarma">
                    <a href="index.php">
                        <img id ="imgfarma2"src="logofarma.jpg">
                       <font color="white" size="3" face="Comic Sans MS,arial,verdana">Farmacia FRANJAMAR</font>
                    </a>
                </li>
                <div id="lateralbuttons">
                <li>
                    <a href="Buscar.php"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Buscar Medicamentos</font>
<span style="color:white"class="glyphicon glyphicon-search"></span>
                    </a>
                      
                </li>
                <li>
                    <a href="Categorias.php"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Categorias</font><span style="color:white" class="glyphicon glyphicon-th-list"></span></a>
                </li>
                <li>
                    <a href="Lista.php"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Lista de Medicamentos</font><span style="color:white" class="glyphicon glyphicon-list"></span></a>
                </li>
                <li>
                    <a href="Agregar.php"  data-toggle="modal" data-target="#registerModal"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Añadir Medicamento</font><span style="color:white" class="glyphicon glyphicon-plus-sign"></span> 
                   </a>
                </li>
                <li>
                   <a href="CreateCategoria.php"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Crear Categoria</font>
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
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        
        <div id="page-content-wrapper"> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"> >> </a>
                        <br>
                        <br>
                        <h1>Actualizar</h1>
                    <form action="process.php" method="POST">
                        <p></p>  <input class="hidden" type="text" name="idmedicina" value="<?php echo $idmedicina; ?>" placeholder="">    
                        <p>Agregar Medicamento</p>  <input type="text" name="namemedicina" value="<?php echo $namemedicina; ?>" placeholder="Ingresa Nombre">
                        <p>Componentes Quimico:</p>  <input type="text" name="component" value="<?php echo $component; ?>" placeholder="Ingresa nombre del Componente">
                        <p>Sustituto</p>  <input type="text" name="sustitute" value="<?php echo $sustitute; ?>" placeholder="Ingresa Nombre del Sustituto">
                        <br>
                        <div class="form=group">
                            
                        <button type="submit" name="save" class="btn btn-primary">Actualizar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

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