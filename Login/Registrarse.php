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
      $message = 'Tu cuenta en Leña y Carbón ha sido creada!! ';
    } else {
      $message = 'Lo sentimos, hay un problema para crear tu cuenta';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="Estilos/css/estilos.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrate</h1>
    <span>or <a href="IniciarSesion.php">Incia Sesión</a></span>

    <form action="Registrarse.php" method="POST">
      <input name="email" type="text" placeholder="Ingresa tu Email">
      <input name="password" type="password" placeholder="Ingresa tu Contraseña">
      <input name="confirm_password" type="password" placeholder="Confirma tu Contraseña">
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
