<?php
  require 'database.php';
  $message = '';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    if ($stmt->execute()) {
      $message = 'Se registró exisotamente al Empleado';
    }
     else {
      $message = 'Hubo un error al crear la cuenta,intenta mas tarde';
    }
  }
?>
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
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="sweetalert2.all.min.js"></script>

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


    


    <div id="divprincipal"> <form action="Empleado.php" method="POST">
      <h2 id="divlogin">
      <font size="4"><input name="email" type="text" placeholder="Email">
      <input name="password" type="password" placeholder="Contraseña">
      <input id="sendregister" type="submit" value="Registrar">
              <br>
        <br>
        <br>
        <br>

      </font>
      <?php if(!empty($message)): ?>
       <font color="black"  size="4"> <p id="mensaje"> <?= $message ?></p>
       </font>
    <?php endif; ?>
      </h2>
    </form>
  </div>

 <div>
    <table id ="tablaempleados"class="table table-bordered">
<thead>
<tbody>    
 <tr class="micolor">
<th name="email">Email</th>
<th name="action">Action</th>


</tr>
</thead>  
 <?php
    if(isset($_SESSION['message'])): ?>
    
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php  
    echo $_SESSION['message'];
    unset ($_SESSION['message']);
         ?>
         </div>
        <?php endif ?>   
    <?php 
    $mysqli = new mysqli ('localhost','root','','php_login')or die (mysqli_error($mysqli)); 
    $result = $mysqli->query("SELECT * FROM  users")or die($mysqli->error);
    

while($row = $result->fetch_assoc())
{
?>        


<tr class="colortable">
     <td><?php echo $row['email']; ?></td>
     <td><a href="processList.php?delete=<?php echo $row['id']; ?>"
             class ="btn btn-danger" onclick="mensaje()">Eliminar</a></td>
      


        </tr>    

        
    
<?php } ?>    
 
   </tbody>
</table> 
   

      

    </div>

  
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
   <script type="text/javascript">
      function mensaje(){
       Swal.fire({
  position: 'center',
  type: 'success',
  title: 'El empleado fue eliminado exitosamente',
  showConfirmButton: true,
  width:'850px',
 
        })
      }
    </script>
  </body>
    </html>