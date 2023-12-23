<?php
include'Include/auth.php';
include'Include/conexion.php';
$cod = $_SESSION["usuario"];
$sql = "SELECT idUsuario, nombre FROM (SELECT idInstitucionEducativa AS idUsuario, direcResponsable AS nombre FROM tbinstitucioneducativa WHERE idInstitucionEducativa = '$cod' UNION ALL SELECT idPersona AS idUsuario, nombre FROM tbpersonaindividual WHERE idPersona = '$cod' UNION ALL SELECT idAdmin AS idUsuario, 'Admin' AS nombre FROM tbadministrador WHERE idAdmin = '$cod') AS usuarios";
$f = mysqli_query($cn, $sql);
$r = mysqli_fetch_assoc($f);
$rol = ($r["nombre"]);
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Proyecto Educativo Regional [PER]</title>
    <meta name="description" content="Proyecto Educativo Regional [PER]">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
</head>

<body>
    <!-- Left Panel -->
   
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">

                 <a class="navbar-brand" href="./"> Proceso de Validación Electrónica - Proyecto Educativo Regional [PER]</a>
                    <a class="navbar-brand hidden" href="./">Proceso de Validación Electrónica - Proyecto Educativo Regional [PER]</a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <!--notificaciones -->
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="  ">Bienvenido(a) <?php echo $r["nombre"]; ?>&nbsp;  &#160;</div>
                        
                        <img class="user-avatar rounded-circle" src="FotosPerfil/foto-porDefecto.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                        <?php if ($rol === 'Admin') { ?>
                            <a class="nav-link" href="perfil.php"><i class="fa fa- user"></i>Datos Personales</a>
                            <a class="nav-link" href='principal.php'><i class="fas fa-bullseye"></i> Objetivos</a>
                            <a  class="nav-link" href='reporte.php'><i class="fas fa-users"></i> Reportes - Personas</a>
                            <a  class="nav-link" href='reporte.php'><i class="fas fa-users"></i>Reportes - I.E</a>
                            <a  class="nav-link"  href='busqueda.php'><i class="fas fa-search"></i> Búsquedas</a>
                                <a class="nav-link" href="cambiarpass.php"><i class="fa fa-lock"></i> Actualizar Contraseña</span></a>


                                <a class="nav-link" href="cerrarsesion.php"><i class="fa-solid fa-right-from-bracket"></i>Cerrar sesion  </a>

                             <?php } else { ?>
                                        <a class="nav-link" href='principal.php'><i class="fas fa-home"></i> Principal</a>


                                <a class="nav-link" href="perfil.php"><i class="fa-solid fa-circle-info"></i>Datos Personales</a>

                                    <a class="nav-link" href="cambiarpass.php"><i class="fa fa-lock"></i> Actualizar Contraseña</span></a>
                                    <a class="nav-link" href='sugerencias.php'><i class="fas fa-lightbulb"></i> Mis Sugerencias</a>


                                    <a class="nav-link" href="#"><i class="fa fa-envelope"></i>Contáctenos</a>

                                    <a class="nav-link" href="cerrarsesion.php"><i class="fa-solid fa-right-from-bracket"></i>Cerrar sesion  </a>

                                 <?php } ?>
                        </div>
                    
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->


                <!-- /Widgets -->
              
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">


                                <!-- <h4 class="box-title">Traffic </h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore iusto ex nulla molestiae consequatur cumque voluptatem amet tenetur voluptates iure. Sunt, ipsa consequuntur rem obcaecati possimus recusandae totam saepe corrupti.</p>
                           
                            -->
                           
                           