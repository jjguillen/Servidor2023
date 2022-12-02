<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LIBRERIA</title>

    <!-- Custom fonts for this template-->
    <link href="./p/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./p/css/sb-admin-2.css" rel="stylesheet">
    
    <script>
        import "@fortawesome/fontawesome-free/js/all";
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Bootstrap core JavaScript-->
    <script src="./p/vendor/jquery/jquery.min.js"></script>
    <script src="./p/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <style>
        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:first-child:active,
        :not(.btn-check)+.btn:active {
            color: var(--bs-btn-active-color);
            background-color: #212529;
            border-color: var(--bs-btn-active-border-color);
        }
    </style>
</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" style="width: 152px;" id='botonInicio'>

                <div class="sidebar-brand-icon bg-password-image img-thumbnail rotate-n-15 text-dark  w-100">
                    <i class="fas fa-laugh-wink" style="visibility:hidden"></i>
                </div>
                <div class="sidebar-brand-text mx-3 text-center">LIBRERIA EMI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            
            <li class="nav-item">
                <a class="nav-link" href="#" id='botonPrestamos'>
                    <i class="fas fa-fw fa-table"></i>
                    <span>Prestamos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id='formularioPrestamo'>
                    <i class="fas fa-fw fa-table"></i>
                    <span>Nuevo préstamo</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top bg-dark shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>
                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="float-left" id='divdni'>
                <form class="user" action="enrutador.php" method="post">
                <input type="text" class="form-control" placeholder="DNI" name="dni" >
                <input type="hidden" name="accion" value="buscarPorDNI">
                <button class="btn btn-warning mt-2 mb-2 " type="submit">BUSCAR</button>
                </form>
                </div>

                <div class="float-left ml-2" id='divestado'>
                <form class="user" id="formBuscarEstado">
                <select class="form-select" name="estado">
                        <option selected> ESTADO </option>
                        <option value="Activo">Activo</option>
                        <option value="Devuelto">Devuelto</option>
                        <option value="SobrePasado1Mes">SobrePasado1Mes</option>
                        <option value="SobrePasado1Año">SobrePasado1Año</option>
                        </select>
                <button class="btn btn-warning mt-2 mb-2" type="submit">BUSCAR</button>
                </form>
                </div>

                <div id='contenedor'>

