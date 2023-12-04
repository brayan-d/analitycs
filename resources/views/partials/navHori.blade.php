<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CABECERA HORIZONTAL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: rgb(247, 247, 247);
        }

        #header {
        background-color: #012060;
        position: static; /* Cambiado a fixed para que el navbar sea estático */
        top: 0;
        left: 250px;
        right: 0;
        z-index: 1;
        height: 70px;
        width: 90%;
        margin-left: 2%;
        margin-top: -4%;
        border-radius: 30px;
        }

        #header-spacer {
            height: 0px;
            /* Ajusta la altura según la altura de tu cabecera */
        }
        
        /* Estilos de la barra lateral */
        .sidebar {
            width: 60px;
            background-color: #ffffff;
            color: #fff;
            position: fixed;
            height: 100%;
            overflow: hidden;
            transition: width 0.3s;
            z-index: 2;
            /* Hacer que la barra lateral esté por encima de la barra horizontal */
        }

        .sidebar:hover {
            width: 250px;
        }

        .logo {
            text-align: initial;
            padding: 20px 0;
            justify-content: initial;
        }

        .logo-img {
            width: 130px;
            /* Tamaño inicial de la imagen */
            height: auto;
            /* Autoajuste de la altura */
            margin-bottom: 10px;
            transition: width 0.3s;
            /* Agregar una transición para el tamaño de la imagen */
        }

        .menu-abierto .logo-img {
            width: 300px;
        }

        /* Estilos de los íconos en la barra lateral */
        .vertical-icons {
            position: fixed;
            top: 0;
            /* Alinea los iconos en la parte superior */
            left: 0;
            bottom: 0;
            width: 150px;
            /* Ancho de la barra lateral inicial */
            background-color: #ffffff;
            color: #000000;
            /* Color de los iconos */
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: left;
            justify-content: flex-start;
            /* Alinea los iconos y nombres arriba */
            padding-top: 20px;
            /* Espacio superior para los iconos */
            transition: width 0.3s;
            padding: 1.5%;

        }

        /* Estilos de los íconos en la barra lateral cuando se agranda */
        .vertical-icons:hover {
            width: 250px;
            /* Ancho cuando se agrande */
        }

        .vertical-icons i {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .vertical-icons span {
            font-size: 0;
            /* Ocultar los nombres de las secciones inicialmente */
        }

        /* Estilos para mostrar los nombres cuando se agrande el menú */
        .vertical-icons:hover span {
            font-size: 14px;
            /* Mostrar los nombres de las secciones cuando se agrande */
            margin-top: 5px;
        }

        /* Estilos del contenido principal */
        .content {
            margin-left: 60px;
            /* Margen izquierdo para el contenido principal */
            padding: 20px;
            transition: margin-left 0.3s;
        }

        /* Estilos de los íconos en la barra lateral */
        .vertical-icons a {
            font-size: 24px;
            margin-bottom: 5px;
            color: #000;
            /* Cambiar el color de los íconos a negro */
            text-decoration: none;
            /* Eliminar la decoración de enlace (subrayado) */
        }

        .search-con {
            display: flex;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
            width: 200px;
            /* Ancho deseado */
        }

        .search-input {
            flex: 1;
            border: none;
            padding: 5px;
            border-radius: 5px 0 0 5px;
            outline: none;
            width: 100%;
            /* Llenar el ancho del contenedor */
        }

        .search-button {
            background-color: #008282;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            padding: 5px;
            cursor: pointer;
        }

        /* Estilos para ocultar el ícono de búsqueda inicialmente */
        .custom-search-icon .search-toggle {
            display: none;
        }

        /* Estilos para mostrar el ícono de búsqueda cuando se agrande el menú */
        .vertical-icons a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: inherit;
        }

        .vertical-icons a i {
            margin-right: 5px;
            /* Adjust the spacing between the icon and text */
        }

        /* Define a class for the font size and font family of the icons */
        .custom-icon {
            font-size: 4px;
            /* You can change this value to adjust the size */
            font-family: 'Arial, Helvetica, sans-serif';
            /* Add your desired font-family */
            text-transform: none;
            /* Ensures that text is not displayed in all uppercase */
        }

        .social-icon {
            font-size: 24px;
            /* Tamaño del ícono */
            color: white;
            /* Color del ícono (blanco) */
            margin-right: 10px;
            /* Espacio entre íconos (opcional) */
            text-decoration: none;
            /* Quita subrayado de los enlaces */
        }

        /* Evita que los iconos cambien de color al ser tocados (estado activo) */
        .social-icon:active {
            color: white !important;
            /* Cambia el color al color deseado cuando se toca el icono */
        }

        .social-icon:focus {
            color: white !important;
        }

        /* persona */
        /* Estilos para el botón de usuario */
        .user-info a {
            text-decoration: none;
            color: #333;
            /* Color del texto */
            font-weight: bold;
            display: flex;
            align-items: center;
            padding: 10px;
            cursor: pointer;
        }

        .user-info a i {
            margin-left: 5px;
        }

        /* Estilos para el menú desplegable */
        .user-menu ul {
            list-style: none;
            padding: 0;
        }

        .user-menu ul li {
            padding: 10px;
            text-align: center;
            background-color: #f8f8f8;
            /* Fondo del menú */
            transition: background-color 0.2s;
        }

        .user-menu ul li:hover {
            background-color: #e0e0e0;
            /* Color de fondo al pasar el mouse */
        }

        .user-menu ul li a {
            text-decoration: none;
            color: #333;
            /* Color del texto */
        }

        .user-menu {
            top: 100%;
            right: 0;
            width: 80px;
            /* Ancho del menú desplegable */
            border: 1px solid #ccc;
            /* Borde del menú */
            background-color: #fff;
            /* Fondo del menú */
            box-shadow: 0px 4px 6px rgba(255, 255, 255, 0.1);
            /* Sombra del menú */
            display: none;
            border-radius: 20px;
        }

        /* Cambia el color de la flecha en el enlace del carrito */
        .nav-item.dropdown .dropdown-toggle::after {
            color: white !important;
            /* Cambia el color al color deseado */
        }

        /*-------------------- NAVBAR MODERNO------------ */
        /* carrito pequeño */
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 1.0rem;
            padding-left: 0.5rem;
            font-size: 35px;
        }

        .badge-dark {
            color: #fff;
            background-color:#2175aa;
        }

        /* cdc */
        .nav-link{
            font-size: 25px;
            margin-top:9px   
        }
     
/* titulo de viajero o anfitrion--- */
@font-face {
   font-family: 'GlacialIndifference-Bold';
   src: url('../../../public/font/GlacialIndifference-Bold.otf') format('opentype');
  }
    </style>
</head>

<body>

    <!-- Cabecera fija -->
    <nav class="navbar navbar-expand-lg navbar navbar-fixed" id="header">
        <div class="container" id="header-border">
            <!-- Iconos sociales (movidos al principio) -->
            <div class="social-icons ml-0">
                <!-- Icono de Facebook -->
                <a href="#" class="social-icon" style="color: white !important; font-size:30px; padding-right: 0.8rem;"><i class="fab fa-facebook-f"></i></a>

                <!-- Icono de Twitter -->
                <a href="#" class="social-icon" style="color: white !important; font-size:30px; padding-right: 0.80rem;"><i class="fab fa-twitter"></i></a>

                <!-- Icono de Instagram -->
                <a href="{{route ('instagram') }}" class="social-icon" style="color: white !important; font-size:30px;"><i class="fab fa-instagram"></i></a>

            </div>
            <!-- Opción para administradores -->
            @if(Auth::check() && Auth::user()->role === 'admin')

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="fas fa" class="nav-link" href="{{ route('admin') }}" style="color:white; ">ADMINISTRADOR</a>
                </li>
            </ul>
        </div>
        @endif

      <!-- Enlaces de navegación (mantenidos a la derecha) -->
      <ul class=" ml-auto">
            {{-- ... (tu código existente) ... --}}
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle"
                   href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <span class="badge badge-pill badge-dark">
                        <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                    </span>
                </a>
        
                <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                    <ul class="list-group" style="margin: 20px;" >
                        @include('partials.cart-drop')
                    </ul>
        
                </div>
            </li>
        </ul>
    </div>

        <!-- SI INICIA SESIÓN -->
        @if(Auth::check())
        <div class="user-dropdown">
            <div class="user-info" id="user-toggle">
                <a>
                    <i class="fas fa-user" style="color:white;"></i>
                    <i style="color:white;"> {{ Auth::user()->name }}</i>

                    <!-- <i class="fas fa-chevron-down"></i> -->
                    <a class="fas fa-sign-out-alt" style="color:white;" href="{{ route('logout') }}"></a>

                </a>
            </div>
            <div class="user-menu" id="user-menu">
                <ul>
                    <li><a href="{{ route('logout') }}">Salir</a></li>
                    <!-- Otras opciones del menú aquí -->
                </ul>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js">

        </script>

        <script>
            $(document).ready(function() {
                // Oculta el menú de usuario al cargar la página
                $("#user-menu").hide();

                // Agrega un evento de clic a la flecha para mostrar/ocultar el menú
                $("#user-toggle").click(function() {
                    $("#user-menu").slideToggle();
                });
            });
        </script>
        @else
        <!-- Mostrar el botón de inicio de sesión -->
        <a class="fas fa btn btn-secondary ml-2" style="background-color:#2175aa; border:RGB(220 162 17); width: 200px; border-radius:20px;height:45px; display:flex; justify-content:center; align-items:center;font-family: 'GlacialIndifference-Bold', sans-serif; font-size: 25px;" href="{{ route('login') }}">Ingresar</a>
        @endif

    </nav>

    </nav>

</body>

</html>