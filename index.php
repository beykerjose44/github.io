<?php
/* ================================================== */
/* ======== INDEX PAGE PERSONAL INFORMATION ========= */
/* ================================================== */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beyker Jose Guerrero Velasquez - Fullstack Developer</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Beyker Jose Guerrero Velasquez</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Habilidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sección principal -->
<header class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Beyker Jose Guerrero Velasquez</h1>
        <p class="lead">Fullstack Developer</p>
    </div>
</header>

<!-- Sección de habilidades -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Habilidades</h2>
        <div class="row">
            <div class="col-md-6">
                <h5>HTML</h5>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                </div>
            </div>
            <div class="col-md-6">
                <h5>CSS</h5>
                <div class="progress mb-3">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
            </div>
            <div class="col-md-6">
                <h5>JavaScript</h5>
                <div class="progress mb-3">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
            </div>
            <div class="col-md-6">
                <h5>React</h5>
                <div class="progress mb-3">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
            </div>
            <!-- Añade más habilidades según sea necesario -->
        </div>
    </div>
</section>

<!-- Pie de página -->
<footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <p>&copy; 2024 Beyker Jose Guerrero Velasquez. Todos los derechos reservados.</p>
    </div>
</footer>

<!-- Enlace a Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

