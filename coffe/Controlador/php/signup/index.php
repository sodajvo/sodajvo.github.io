<html>

<head>
  <title>Signup</title>

  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="bgImage">

  <!--nav-->
  <div class="container-fluid mb-5">
    <nav class="navbar navbar-expand-lg ">
      <a href="../../index.html"><img src="../../img/our-coffe.png"></a>
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
          <form class="d-flex form-check-inline ">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Buscar</button>
          </form>
        </ul>
      </div>
    </nav>
  </div>

  <div class="signUp rounded mx-auto d-block" style="background-color: rgb(250, 250, 250, 0.8);">

    <h1>Resgistrate ahora!!</h1>
    <form action="insert.php" method="post">
      Ingrese nombre:
      <input type="text" name="username"><br>
      Ingrese Contraseña
      <input type="text" name="password"><br>
      Ingrese mail:
      <input type="text" name="email"><br>
      <br>
      <input class="btn btn-outline-danger ms-5" type="submit" value="Registrar">
    </form>
  </div>

</body>

</html>