<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>CABECERA A LA IZQUIERDA</title>
<style>
    .navbar-nav{
    position: relative;
    background:#012060;
    width: 7vw;
    height: 100vh;
}
.navbar-nav.open .navbar-link div{
    position: relative;
    display: block;
    left: 2px;
    background: none;
    color: white;
}
.navbar-link span{
    position: relative;
    font-size: 35px;
    color: white;
}
.navbar-nav.open .navbar-link div{
    position: relative;
    display: block;
    left: 2px;
    background: none;
    color: white;
   font-family: 'GlacialIndifference-Bold', sans-serif;
}
.navbar-nav.open .navbar-option:hover{
    background: #2175aa;
}
.navbar-link div{
    position: absolute;
    display: none;
    width: 11vw;
    background:#2175aa;
    border-radius: 0 10px 10px 10px;
    padding: 3px 10px;
    font-size: 20px;
    left: 6vw;
    color: #fff;
}


/* titulo de viajero o anfitrion--- */
@font-face {
   font-family: 'GlacialIndifference-Bold';
   src: url('../../../public/font/GlacialIndifference-Bold.otf') format('opentype');
  }

</style>
   
</head>

<body>
    <nav class="navbar-nav">
        <div class="navbar-logo dash">
            <img class="img1" src="{{ asset('img/solidata1.jpg') }}" alt="">
            <img class="img2" src="{{ asset('img/solidata1.jpg') }}" alt="">
        </div>
        <div class="navbar-option dash">
            <a href="{{ route('index') }}" class="navbar-link">
                <span class="fas fa-home custom-icon"></span>
                <div>Inicio</div>
            </a>
        </div>
        <div class="navbar-option">
            <a href="{{ route('shop') }}" class="navbar-link">
                <span class="fas fa-file-alt custom-icon"></span>
                <div>Informes o estudios</div>
            </a>
        </div>
        <div class="navbar-option">
            <a href="{{ route('cifras') }}" class="navbar-link">
                <span class="fas fa-dollar-sign custom-icon"></span>
                <div>Cifras generales</div>
            </a>
        </div>
        <div class="navbar-option">
            <a href="{{ route('estadisticas') }}" class="navbar-link">
                <span class="fas fa-chart-bar custom-icon"></span>
                <div>Estadisticas</div>
            </a>
        </div>
        <div class="navbar-option">
            <a href="{{ route('riesgos') }}" class="navbar-link">
                <span class="fas fa-coins custom-icon"></span>
                <div>Riesgos</div>
            </a>
        </div>
        <div class="navbar-option">
            <a href="{{ route('blog') }}" class="navbar-link">
                <span class="fas fa-blog custom-icon"></span>
                <div>Blog</div>
            </a>
        </div>
        <div class="navbar-contact">
            <a href="{{ route('contacto') }}" class="navbar-link">
                <span class="fas fa-phone custom-icon"></span>
                <div>Contacto</div>
            </a>
        </div>
    </nav>
    <script>
        const body = document.querySelector("body"),
            navbar = body.querySelector(".navbar-nav"),
            dash = body.querySelector(".dash");
            // modeSwitch = body.querySelector(".toggle-switch"),
            // modeText = body.querySelector(".mode-text");

        dash.addEventListener("click", () => {
            navbar.classList.toggle("open");
        });
    </script>
</body>

</html>