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
      $message = 'Successfully created new user';
    }
     else {
      $message = 'Hubo un error al crear la cuenta,intenta mas tarde';
    }

  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRO</title>
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
      <li><a href="login.php">Iniciar Sesion</a></li>
    </ul>
  </div>
</nav>


    

    <div id="divprincipal">
     <h1 id="letralogin"><font color="white" face="arial">Registrate</font></h1>

    <div> <form action="signup.php" method="POST">
      <h2 id="divlogin">
      <font size="4"><input name="email" type="text" placeholder="Usuario">
      <input name="password" type="password" placeholder="Contraseña">
      <input type="submit" value="Registrar">
      </font>
      <?php if(!empty($message)): ?>
       <font color="white" size="4"> <p id="mensaje"> <?= $message ?></p>
       </font>
    <?php endif; ?>
      </h2>
    </form>
  </div>
  


  </body>
</html>