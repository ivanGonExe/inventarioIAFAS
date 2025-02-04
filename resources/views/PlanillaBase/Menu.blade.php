<!doctype html>
<html lang="es">

<head>
    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/b610c83f26.js" crossorigin="anonymous"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- jQuery (actualizado) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <title>Menú</title>

    <style>
        body {
            min-height: 100vh;
            background-image: linear-gradient(120deg, #ffffff, #ebebeb);
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-left: 2rem;
        }

        .navbar {
            background-color: #ffff;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #8d8d8d;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #3d3d3d;
        }
    </style>
</head>

<body>
    <!-- Inicio de Menú -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo -->
            <div class="logo">
                <img src="{{ asset('imagenes/iafas.svg') }}" alt="logo_principal">
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Menú Registro -->
                    <li class="nav-item dropdown p-2">
                        <a class="nav-link dropdown-toggle" href="#" id="registroDropdown" role="button" 
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-clipboard"></i> Registro
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-plus"></i> Nuevo Registro</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-list"></i> Ver Registros</a></li>
                        </ul>
                    </li>

                    <!-- Menú Insumos -->
                    <li class="nav-item dropdown p-2">
                        <a class="nav-link dropdown-toggle" href="#" id="insumosDropdown" role="button" 
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-box"></i> Insumos informáticos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-box"></i> Listado de insumos</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-box-open"></i> Listado modelos</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-copyright"></i> Listado Marcas</a></li>
                        </ul>
                    </li>

                    <!-- Menú Clasificación de Artículos -->
                    <li class="nav-item dropdown p-2">
                        <a class="nav-link dropdown-toggle" href="#" id="clasificacionDropdown" role="button" 
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-list"></i> Clasificación de artículos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/clasificacion/lista/"><i class="fa-solid fa-list-ol"></i> Listado de clasificaciones</a></li>
                        </ul>
                    </li>

                    <!-- Menú Ubicación -->
                    <li class="nav-item dropdown p-2">
                        <a class="nav-link dropdown-toggle" href="#" id="ubicacionDropdown" role="button" 
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-map-marker-alt"></i> Ubicación
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-map-pin"></i> Ver Ubicaciones</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-location-dot"></i> Añadir Ubicación</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <div class="container">
        @yield('contenido')
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <!-- Inicialización de DataTables -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if ($('#example').length) {
                console.log("Tabla encontrada, inicializando DataTable...");
                $('#example').DataTable({
                    language: {
                        url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                    }
                });
            } else {
                console.log("Error: No se encontró la tabla con ID 'example'");
            }
        });
    </script>
</body>

</html>
