<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: login.php');
  }

  require 'database.php';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if (count($results) > 2 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: \index.php");
      }
    if ($results['id'] == 1){
      $_SESSION['isadmin'] = true;

    header("Location: \IndexAdmin.php");
 } 
    
    
    else {
      $message = 'Usuario o clave incorrecta, Por favor intenta de nuevo';
    }
    
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/style2.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">

  </head>
  <body>

    

     <div>
       <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Farmacia FRANJAMAR, C.A</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">INICIO</a></li>
      <li><a href="Contactos.html">Contactos</a></li>
    </ul>
  </div>
</nav>
     </div>
     <div id="divprincipal">
     <h1 id="letralogin"><font color="white" face="arial">Login</font></h1>

    <div> <form action="login.php" method="POST">
      <h2 id="divlogin">
      <font size="4"><input name="email" type="text" placeholder="Usuario">
      <input name="password" type="password" placeholder="Contraseña">
      <input type="submit" value="Ingresar">
      </font>
      <?php if(!empty($message)): ?>
       <font color="white" size="4"> <p id="mensaje"> <?= $message ?></p>
       </font>
    <?php endif; ?>
      </h2>
    </form>
  </div>
  <div><p id="copyrightlogin"><font color="black" size="3" face="Comic Sans MS,arial,verdana">Copyright &copy; 2019 - Derechos Reservados - Farmacia Franjamar C.A</font></p></div>
</div>


  </body>
</html>