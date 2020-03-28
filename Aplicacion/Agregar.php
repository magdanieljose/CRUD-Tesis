<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="style.css">
         <link rel="shortcut icon" href="to_ico.ico">
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
         <script src="sweetalert2.all.min.js"></script>



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
        
        
  
        <!-- /#sidebar-wrapper -->


        <!-- Page Content -->
        
        <div id="page-content-wrapper"> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <br>
                        <h1><font color="black" face="Comic Sans MS,arial">Agregar</h1>
                    <form action="process.php" method="POST">
                        <p></p>  <input class="hidden" type="text" name="idmedicina" value="" placeholder="">
                        <p>Selecciona la Categoria:</p> <select class="form-control" name="categoria" value ="">

     <?php 
    $mysqli = new mysqli ('localhost','root','','farmacia')or die (mysqli_error($mysqli)); 
    $result = $mysqli->query("SELECT * FROM  categoria")or die($mysqli->error);
    

while($row = $result->fetch_assoc())
{
?>        

<option value="<?php echo $row['id_categoria']; ?>"><?php echo $row['Tipo']; ?></option>
        
    
<?php } ?>            

 


                        </select>
                       
                        <p>Agregar Medicamento</p>  <input type="text" name="namemedicina" placeholder=" Nombre Medicamento">
                        <p>Componentes Quimico:</p>  <input type="text" name="component" placeholder=" Nombre Componente">
                        
                        <p>Sustituto</p>  <input type="text" name="sustitute" value="" placeholder="Nombre Sustituto">
                        <p>Descripcion</p>  <input type="text" name="Descripcion" value="" placeholder="Descripcion">

                        <br>

                        <div class="form=group">
                            
                        <button onclick= "agregaralert()"type="submit" name="save" id="agregar" class="btn btn-primary">Agregar</button>
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
        <script src="js/popper.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
   <script src="bootbox.min.js"></script>
    <script src="bootbox.locales.min.js"></script>
    <script>
        $(document).on("click", ".show-alert", function(e) {
            bootbox.alert("Hello world!", function(agregaralert) {
                console.log("Alert Callback");
            });
        });
    </script>

</body>

</html>