<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar empresa | Analítica Solidaria</title>
</head>
<body>
    @include('partials.navbar')
    @include('partials.navHori')

    <br>
    <br>

    <div class="container">
        <h1>Editar empresa</h1>

        <form method="POST" action="{{ route('admin.actualizar-cliente', ['id' => $cliente->id]) }}" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nombreEmpresa">Nombre empresa:</label>
                <input type="text" name="nombreEmpresa" class="form-control" value="{{ $cliente->nombreEmpresa }}" required>
            </div>
            <div class="form-group">
                <label for="nitEmpresa">NIT:</label><br>
                <input type="text" name="nitEmpresa" class="form-control" value="{{ $cliente->nitEmpresa }}" required>
            </div>
            <div class="form-group">
                <label for="activos">Activos:</label><br>
                <h6>CANTIDAD SIN PUNTOS NI COMAS</h6>
                <input type="double" name="activos" class="form-control" value="{{ $cliente->activos }}" required>
            </div>
            
            <!-- Agregar otros campos para editar según sea necesario -->

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
    <br>
    <br>
    @include('footer.footer')
</body>
</html>
