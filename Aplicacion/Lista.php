<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="to_ico.ico">



    <title>Farmacias Franjamar</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="sweetalert2.all.min.js"></script>
    

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
                   <a href="Lista.php"><font color="white" size="3" face="Comic Sans MS,arial,verdana">Lista de Medicamentos</font>
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
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1><font color="black" face="Comic Sans MS,arial">Lista de Medicamentos</h1>
                        <span>
                        <div class="form-group">
  
</div>
                        </span>
                        
                        
<div>
    <table id ="tablalista"class="table table-bordered">
<thead>
<tbody>    
 <tr class="micolor">
<th name="name">Nombre</th>
<th name="componente">Componente</th>
<th name="sustituto">Sustituto</th>
<th name="Descripcion">Descripcion</th>

</tr>
</thead>    
    <?php 
    $mysqli = new mysqli ('localhost','root','','farmacia')or die (mysqli_error($mysqli)); 
    $result = $mysqli->query("SELECT * FROM  medicamentos")or die($mysqli->error);
    

while($row = $result->fetch_assoc())
{
?>        


<tr class="colortable">
     <td><?php echo $row['Nombre']; ?></td>
     <td><?php echo $row['Componente']; ?></td>
      <td><?php echo $row['Sustituto']; ?></td>
      <td><?php echo $row['Descripcion']; ?></td>


        </tr>    

        
    
<?php } ?>    
 
   </tbody>
</table> 
   

      

    </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
   
    

    <!-- /#wrapper -->
    <div class="modal fade" id="registerModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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