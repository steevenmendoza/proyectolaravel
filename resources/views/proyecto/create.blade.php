<!doctype html>
<html lang="es"> <!-- Cambio el idioma a español -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Usuarios</title> <!-- Cambio el título a español -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Proyecto - UEES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('proyecto.index') }}">Inicio</a> <!-- Cambio Home por Inicio -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <section class="pt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="card mt-5">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Registro de Usuarios</h5>
                                    <p class="text-center small">Ingresa tus datos personales para crear una cuenta</p> <!-- Traducción al español -->
                                    <form class="needs-validation" action="{{ route('proyecto.store') }}" method="post" novalidate> <!-- Añadido novalidate para la demostración, pero se recomienda implementar validación JS -->
                                        @csrf
                                        <div class="mb-3">
                                            <label for="inputNombreCompleto" class="form-label">Nombre Completo</label>
                                            <input type="text" class="form-control" id="inputNombreCompleto" name="nombre_completo" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputEmail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputPassword" class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" id="inputPassword" name="password" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputAddress" class="form-label">Dirección</label>
                                            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Calle Principal" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputCity" class="form-label">Ciudad</label>
                                            <input type="text" class="form-control" id="inputCity" name="city" required>
                                        </div>
                                        <button class="btn btn-primary w-100" type="submit">Crear Cuenta</button>
                                        <p class="small mb-0 mt-3">¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p> <!-- Añadir ruta de inicio de sesión -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
