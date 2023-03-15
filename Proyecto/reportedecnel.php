<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <title>Menu</title>
    </head>
    <body class="bg-light">
      <!-- Inicio del menu -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          
          <img src="Logo.png" alt="logo" width="150px">
          <a class="navbar-brand" href="#"> Gobernacion del Guayas</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.html">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Registro
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="formulario.html">Colegios</a></li>
                  <li><a class="dropdown-item" href="RegistroCnel.html">CNEL</a></li>
                  <li><a class="dropdown-item" href="encuentrosc.html">Encuentros</a></li>
                  <li><a class="dropdown-item" href="actas.html">Acta</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="acta.html">Acta</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Reportes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="colegior.php">Colegios</a></li>
                  <li><a class="dropdown-item" href="reportedecnel.php">CNEL</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="reporteencuentros.php">Encuentros</a></li>
                  <li><a class="dropdown-item" href="reporteacta.php">Acta</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nosotros.html">Nosotros</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
                </form>  
              </div>
              
              <?php
              include('db.php');
              ?>
                <h1 style="text-align:center">Muestra Tabla DE CNEL</h1>  
                <table class="table table-success table-striped">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre Institucion</th>
                    <th scope="col">Nuevas luminarias</th>
                    <th scope="col">Mantenimiento</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Estado</th>
                  </tr>
                </thead>
                    <?php foreach($conexion->query("SELECT * FROM registrocnel") as $row){?>
  
                          <tr>
                            <td><?php echo $row['idregistrocnel'] ?></td>
                            <td><?php echo $row['nombreinstitucion'] ?></td>
                            <td><?php echo $row['nuevasluminarias'] ?></td>
                            <td><?php echo $row['mantenimiento'] ?></td>
                            <td><?php echo $row['tipo'] ?></td>
                            <td><?php echo $row['cantidad'] ?></td>
                            <td><?php echo $row['estado'] ?></td>
                          </tr>
                          <?php
                           }
                          ?>
                </table>
    </body>
</html>