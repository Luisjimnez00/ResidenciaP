<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/643627835f.js" crossorigin="anonymous"></script>
    
    <title>Administrar cursos</title>
</head>
<body>
  <!--Inicio encabezado-->
    <header> 
        <div class="container">
          <div class="row">
            <div class="col-lg-2 margen">
              <img src="https://macuspana.gob.mx/wp-content/uploads/2021/10/logo_macuspana_retina.png" alt="logo" width="150px" height="80px">
            </div>
            <div class="col-lg-10 color margen t">
              <h1>Direccion de fomento economico y turismo</h1>
            </div>
          </div>      
        </div>
    </header>
  <!--Fin encabezado-->

  <!--Inicio navegación-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="col-lg-4">
          <a class="btn b_regresar" href="inicioAdmin.php">Regresar</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle color" href="#" id="navbarDropdownMenuLink" aria-haspopup="true" data-bs-toggle="dropdown" aria-expanded="false">
                    Administrar empresas
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a href="admin_empresas.php" class="dropdown-item">Ver lista de empresas</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle color" href="#" id="navbarDropdownMenuLink" aria-haspopup="true" data-bs-toggle="dropdown" aria-expanded="false">
                    Cursos
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a href="cursos_admin.php" class="dropdown-item">Ver cursos</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle color" href="#" id="navbarDropdownMenuLink" aria-haspopup="true" data-bs-toggle="dropdown" aria-expanded="false">
                    Usuarios
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a href="admin_usuarios.php" class="dropdown-item">Ver usuarios</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle color" href="#" id="navbarDropdownMenuLink" aria-haspopup="true" data-bs-toggle="dropdown" aria-expanded="false">
                    Mi cuenta
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a href="" class="dropdown-item">Cerrar sesión</a>
                  </div>
                </li>
              </ul>
        </div>
      </div>
    </nav>
    <!--Fin navegación-->

<!--Inicio Registro-->    
<div class="container margen">
    <div class="row">
      <div class="col">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Añadir curso</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo curso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="guardar_curso.php">
                  <div class="mb-3">
                    <label for="nombre_curso" class="col-form-label">Nombre del curso:</label>
                    <input type="text" class="form-control" name="nombre_curso" placeholder="Ingrese el nombre de curso">
                    <label for="fecha_curso" class="col-form-label">Fecha:</label>
                    <input type="date" class="form-control" name="fecha_curso">
                    <label for="duracion_curso" class="col-form-label">Duración:</label>
                    <input type="text" class="form-control" name="duracion_curso" placeholder="Ingrese la duracion del curso">
                    <label for="descripcion_curso" class="col-form-label">Descripción:</label>
                    <input type="text" class="form-control" name="descripcion_curso" placeholder="Ingrese una descripción del curso">
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-primary" name="registrar_btn"/>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                     </div>                  
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar curso" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      </div>
    </div>
    <!--Inicio tabla de cursos-->
    <!--Fin tabla de cursos-->
</div>
<!--Fin de registro-->

<div class="container">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nombre del curso</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Duración</th>
                    <th scope="col">Descripción</th>
                  </tr>
                </thead>

                <?php 
                include ("conexion.php");
                $sentencia="SELECT * FROM cursos";
                $res=mysqli_query($conex, $sentencia);
                while($filas=mysqli_fetch_assoc($res))
                {
                  echo "<tr>";
                    echo "<td>"; echo $filas['id_curso']; echo "</td>";
                    echo "<td>"; echo $filas['nombre_curso']; echo "</td>";
                    echo "<td>"; echo $filas['fecha']; echo "</td>";
                    echo "<td>"; echo $filas['duracion']; echo "</td>";
                    echo "<td>"; echo $filas['descripcion']; echo "</td>";
                    echo "<td>"; echo"<a href='#'><button type='button' class='btn btn-success'>Modificar</button></a>"; echo "</td>";
                    echo "<td>"; echo"<a href='eliminar_curso.php?no=".$filas['id_curso']."'><button type='button' class='btn btn-danger'>Eliminar</button></a>"; echo "</td>";
                  echo "</tr>";
                }
                ?>
         </table>
      </div>

        

    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>