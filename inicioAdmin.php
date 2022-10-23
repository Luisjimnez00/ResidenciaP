<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/643627835f.js" crossorigin="anonymous"></script>
    
    <title>Inicio Administrador</title>
</head>
<body>
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
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

    <section>
      <div class="container">
         <div class="row ms-auto">
          <div class="col-lg-2">
            <img class="img-thumbnail margen color" src="img/bx-user.svg" alt="usuario" width="150px" height="150px">
            <p class="color t">Administrador</p>
          </div>
          <div class="col-lg-10">
            <p class="color margen">Nombre:
              </p>
            <p class="color">Direccion de fomento y turismo</p>
            <p class="color margen">Correo: 
            </p>
            <p class="color">Fomento@gmail.com</p>

          </div>
         </div>
      </div>
    </section>
    
        

    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>