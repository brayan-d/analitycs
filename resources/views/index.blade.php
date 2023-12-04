<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio | Analítica Solidaria</title>
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css">
    <style>
        #text {
            margin-top: 20px;

        }

        #btnNosotros {
            margin-top: 20px;
            margin-left: 5%;
        }

        b,
        strong {
            font-weight: bolder;
            font-family: 'GlacialIndifference-Bold', sans-serif;
            color: white;
        }

        h5 {
            src: url('../../public/font/GlacialIndifference-Bold.otf') format('opentype');
            text-align: center;
            color: #2175aa;
        }

        .card-text-container {
            margin-top: 0;
            margin-bottom: 1rem;
            color: #008282;
            text-align: center;
            font-family: 'judson'sans-serif;

        }

        .card-text {
            font-size: 30px;
        }

        .card-text-container p {
            margin-top: 0.5rem;
            color:#012060;
            /* Espacio entre los párrafos */
        }

        @font-face {
            font-family: 'judson';
            src: url('font/Judson-Bold.ttf') format('truetype');
            /* Ruta a tu archivo de fuente */
            /* Otras propiedades de la fuente, como weight y style, si son aplicables */
        }

        @font-face {
            font-family: 'inria';
            src: url('font/InriaSans-Bold.otf') format('opentype');
            /* Ruta a tu archivo de fuente */
            /* Otras propiedades de la fuente, como weight y style, si son aplicables */
        }

        @font-face {
            font-family: 'inika';
            src: url('font/Inika-Regular.ttf') format('truetype');
            /* Ruta a tu archivo de fuente */
            /* Otras propiedades de la fuente, como weight y style, si son aplicables */
        }


        .font-p {
        font-family: 'Arial, Helvetica, sans-serif';
        text-align: justify;
        word-wrap: break-word;
        white-space: pre-line;
    }

    .underline {
        text-decoration: underline;
    }


        /* iconos */
        .square-button {
            width: 100px;
            /* Ajusta según sea necesario */
            height: 100px;
            /* Ajusta según sea necesario */
            border-radius: 0;
            /* Borra la esquina redondeada */
        }

        .tt {
            margin-left: 165px;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px;
        }

        /* Define a class for the font size and font family of the icons */
        .carousel-inner{
            width: 50%;
        }
        .noscon{
            color:white;
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
        .titucon{
            color: #012060;
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
        /* text informe */
        h1{
            font-family: 'GlacialIndifference-Bold', sans-serif;
            color: #012060;
        }
        /* boton agregar carrito  */
        .btoagr {
            background-color: #2175aa;
            color: #ffffff; /* Color del texto */
            border: 1px solid #16527a; /* Borde del botón */
            border-radius: 5px; /* Bordes redondeados */
            padding: 10px 20px; /* Espaciado interno (arriba/abajo - izquierda/derecha) */
            font-size: 16px; /* Tamaño de fuente */
            cursor: pointer; /* Cambia el cursor al pasar por encima */
            transition: background-color 0.3s ease; /* Agrega una transición suave al color de fondo */
        }

.btoagr:hover {
    background-color: #16527a; /* Cambia el color de fondo al pasar por encima */
}


        /* textto de contenido */
@font-face {
   font-family: 'GlacialIndifference-Bold';
   src: url('../../public/font/GlacialIndifference-Bold.otf') format('opentype');
  }
  @font-face {
   font-family: 'GlacialIndifference-Regular';
   src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
  }

  
    </style>
</head>

<body>
    <div style="display: flex; width: 100%;">
        <div style="width: 14vw;">
            <!-- CABECERA -->
            @include('partials.navbar')

        </div>

        <div style="width: 86vw; height: 100vh; overflow-y: scroll; padding-top: 10vh;">
            <!-- -->
            @include('partials.navHori')
            <div>
                @include('partials.cab')
                <!-- carousel -->
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style="width: 1480px; margin-left: 20px;border: 1px solid #e8e0e0;">
                    <div class="carousel-indicators">
                        <!-- Indicators here -->
                    </div>
                    <div class="carousel-inner">
                        @foreach ($noticia as $key => $item)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="9000" style="display: flex; align-items: center; justify-content: space-between; background-color:#f2f2f2; ">
                            <div style="width: 35%; text-align: center; color: #ffc219; font-family: 'Arial, Helvetica, sans-serif';font-size:25px;">
                                <div class="tt">
                                <p class="font-p underline">Mañana conversatorio virtual evolución sobre Analítica Solidaria.</p>

                                </div>
                            </div>
                            <div style="width: 70%; ">
                                <img src="{{ asset($item->image_noticia) }}" class="d-block w-100" style="max-width: 100%; max-height: 520px; margin: 0 auto;opacity: 90%;" alt="...">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- iconos -->
                <br>
                <br>
                <div class="container mt-16 text-center" style="max-width: 1200px; margin: 0 auto;">
                    <div class="row" style="padding-left: 10px;">
                        @foreach ($iconos as $icono)
                        <div class="col-md-3 mb-3">
                            <div class="icon-container" style="background-color: #ececec; padding: 20px; border-radius: 5px;width:280px;">
                                <!-- Coloca la imagen dinámica -->
                                <img src="{{ asset($icono->image_icono) }}" alt="{{ $icono->name_icono }}" class="img-fluid" style="height: 80px; width: 90px; margin-bottom: 20px;">

                            </div>
                            <a class="btn btn-custom-color btn-block" style="font-family: ui-rounded; background-color: #012060; border-color: #008282;width:280px;border:none;">
                                <span style="color: white;font-family: 'GlacialIndifference-Bold', sans-serif;">{{ $icono->name_icono }}</span>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- contenido -->

                <br>
                <div class="container mt-4">
                    <div class="row">
                        @foreach ($contenido as $contenido)
                        <div class="col-md-6">
                            <img src="{{ asset($contenido->image_contenido) }}" alt="{{ $contenido->titulo_contenido }}" class="img-fluid" alt="Imagen" height="500px" width="500px">
                        </div>
                        <div class="col-md-6" id="text">
                            <a class="fas fa" style="color:#2175aa;text-decoration: none;font-size: 40px;" href="#"><span><b class="titucon">{{ $contenido->titulo_contenido }}</b></span></a>
                            <br><br>
                            <h5> {{ $contenido->texto_contenido }}
                            </h5>
                            <br>

                            <a href="#" class="btn btn-primary btn-lg btn-block" style="background-color: #012060; border: white;">
                                <i class="fas fa-arrow-right"></i>
                                <b class="noscon">{{ $contenido->name_boton }}</b>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <!-- Productos -->
                <div class="fas fa" style="width: 100%; text-align: center;">
                    <h1 style="border:#000;">Productos</h1>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-14">
                            <div class="row">
                                @foreach($productos as $producto)
                                <div class="col-lg-4">
                                    <div class="card mb-3" style="border-radius: 30px;">
                                        <img src="{{ asset($producto->image_path) }}" alt="{{ $producto->name }}" style=" height: 250px; width: 103%; border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 0; border-bottom-right-radius: 0; margin-left: -4px;">

                                        <div class="card-body" style="background-color: #f3faff;">
                                            <h5 class="card-title" style="font-family: 'GlacialIndifference-Bold',sans-serif;;font-size:16px;">
                                                {{ $producto->name }}
                                            </h5>
                                            <div class="card-text-container">
                                                <p class="card-text" style="font-size:24px;font-family: 'GlacialIndifference-Bold', sans-serif;;">
                                                    {{ $producto->description }}
                                                </p>
                                                <p class="card-precio"><small class="text-muted" style="font-size:24px; font-family: 'GlacialIndifference-Bold', sans-serif;
                                                
                                                
                                                ; font-size:16px">Precio:
                                                        {{ $producto->price }} COP</small></p>
                                            </div>

                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $producto->id }}" id="id" name="id">
                                                <input type="hidden" value="{{ $producto->name }}" id="name" name="name">
                                                <input type="hidden" value="{{ $producto->price }}" id="price" name="price">
                                                <input type="hidden" value="{{ $producto->image_path }}" id="img" name="img">
                                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                <div class="card-footer" style="background-color: white;">
                                                    <div class="row">
                                                        <button class="btoagr" class="tooltip-test" title="add to cart">
                                                            <h6 style="font-size: 17px; font-family: 'GlacialIndifference-Bold';background-color: #2175aa;"><i class="fa fa-shopping-cart" style="margin-right: 5px;"></i> Agregar al carrito</h6>
                                                        </button>
                                                    </div>


                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


                <!-- boletin -->
                <br>
                @include('footer.boletin')
                <!-- footer -->
                <br>
                @include('footer.footer')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>