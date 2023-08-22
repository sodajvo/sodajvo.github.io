<?php


// confirmar sesion

session_start();


if (!isset($_SESSION['loggedin'])) {

  header('Location: index.html');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="css/inicio.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <title>inicio de sesión</title>
</head>

<body class="bgImage" class="loggedin">

  <header class="header">
    <nav class="navbar navbar-expand-lg ">
      <a class="" href="index.html"><img src="../../img/our-coffe.png"></a>
      <div class="collapse navbar-collapse d-flex justify-content-end">
        <ul class="navbar-nav text">
          <li>
            <a class="nav-link" href="../../cafes.html">
              <h3>Cafes</h3>
            </a>
          </li>
          <li>
            <a class="nav-link" href="../../postres.html">
              <h3>Postres</h3>
            </a>
          </li>
          <li>
            <a class="nav-link" href="../../nosotros.html">
              <h3>Nosotros</h3>
            </a>
          </li>
          <form class="d-flex form-inline ">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Buscar</button>
          </form>
        </ul>
        </li>
      </div>
    </nav>

    <div class="container" style="background-color: rgb(250, 250, 250, 0.8);">
      <div class="container d-flex flex-column text-center">
        <div class="p-2">
          <h2>Página de Inicio</h2>
        </div>
        <div class="p-2">
          <p>Hola de nuevo,
            <?= $_SESSION['name'] ?> !!!
          </p>
        </div>

      </div>

      <div class="container">

        <nav class="container d-flex flex-column text-center ">
          <div>
            <a href="perfil.php" style="color:black;"><i class="fas fa-user-circle"></i>Información de Usuario</a>
          </div>

          <div>
            <a href="logout.php" style="color:black;"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
          </div>
        </nav>
      </div>
    </div>

    
    <footer class="bg-dark text-center text-white" style="background-image: url(../../img/bg2.jpg);">
      <div class="text-center p-3" style="background-color: rgba(54, 22, 22, 0.8);">
        <h5>2023 Copyright:</h5>
        <h2>J_villota_ortega</h2>
      </div>
    </footer>


</body>

</html>