<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir contenido home | Analítica Solidaria </title>
</head>
<body>
    @include('partials.navbar')
    @include('partials.navHori')

    <div class="container mt-4">
        <br>
        <br>
        <h1 class="fas fa">Subir contenido principal</h1>
        <form method="POST" action="{{ route('admin.guardar-contenido') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titulo_contenido">Titulo:</label>
                <input type="text" name="titulo_contenido" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="texto_contenido">Texto:</label>
                <input type="text" name="texto_contenido" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name_boton">Nombre del botón:</label>
                <input type="text" name="name_boton" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Imagen:</label>
                <input type="file" name="image" class="form-control-file" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir contenido</button>
        </form>
    </div>
    <br>
    <br>
    @include('footer.boletin')
    <br>
    @include('footer.footer')
</body>
</html>