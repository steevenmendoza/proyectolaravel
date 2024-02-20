<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
	<body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Proyecto - UEES</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="{{ route('proyecto.index') }}">Home</a>
						</li>
					</ul>
					<span class="navbar-text">
						<a href="{{ route('proyecto.create') }}"><button type="button" class="btn btn-outline-primary">Registrar Nuevo Usuario</button></a>
					</span>
				</div>
			</div>
		</nav>
		<h1 style="margin: 50px 100px">Actualizar Datos</h1>
		<form action="{{ route('proyecto.update', $proyecto->id) }}" method="post" style="padding: 0px 100px">
            @csrf
            @method("put")
            <div class="col-md-6 form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="inputNombreCompleto" name="nombre_completo" value="{{ $proyecto->nombre_completo }}" required>
            </div>
            <div class="col-md-6 form-group mt-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $proyecto->email }}" required>
            </div>
            <div class="col-md-6 mt-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password" value="{{ $proyecto->password }}" required>
            </div>
            <div class="col-6 mt-3">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" value="{{ $proyecto->address }}" required>
            </div>
            <div class="col-md-6 mt-3">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="city" value="{{ $proyecto->city }}" required>
            </div>
            <button type="submit" class="btn mt-3 btn-primary">
                Update
            </button>
        </form>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	</body>
</html>

