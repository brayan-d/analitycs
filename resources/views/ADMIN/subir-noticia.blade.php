<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir noticias home | Analítica Solidaria </title>
</head>
<body>
    @include('partials.navbar')
    @include('partials.navHori')

    <div class="container mt-4">
        <br>
        <br>
        <h1 class="fas fa">Subir noticias</h1>
        <form method="POST" action="{{ route('admin.guardar-noticia') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titulo_noticia">Titulo:</label>
                <input type="text" name="titulo_noticia" class="form-control" required>
            </div>
            <h6 class="fas fa">Este texto aparecera en el carrusel principal </h6>
            <div class="form-group">
                <label for="texto_corto">Texto corto:</label>
                <input type="text" name="texto_corto" class="form-control" required>
            </div>
            <h6 class="fas fa">Este texto aparecera en el blog de noticias, en ver la noticia completa </h6>
            <div class="form-group">
                <label for="texto_largo">Texto completo:</label>
                <input type="text" name="texto_largo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fecha_noticia">Fecha:</label>
                <input type="date" name="fecha_noticia" required>
            </div>
            <div class="form-group">
                <label for="image">Imagen:</label>
                <input type="file" name="image" class="form-control-file" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir noticia</button>
        </form>
    </div>
    <br>
    <br>
    @include('footer.boletin')
    <br>
    @include('footer.footer')
</body>
</html>