<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informes o estudios | Analítica Solidaria</title>

    <style>
        .col-lg-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
       }
p{
    color:#008282;
}
   
    </style>
</head>
<body>
    @include('partials.navbar')

    @include('partials.cab')
    
    <div class="container" style="margin-top: 30px ">
        <div class="row justify-content-center">
            <div class="col-lg-15">
                <div class="row">
                    <div class="col-lg-7">
                        <a class="fas fa-file-alt" href="{{ route('shop') }}" style="color: #000; text-decoration: none;margin-bottom: 5px;font-size: 24px;">
                            <span> INFORMES O ESTUDIOS</span>

                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-4">
                        <div class="card" style="margin-bottom: 25px; border-top-left-radius: 32px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; width: 375px; margin-right: 30px;">
                                {{-- <img src="{{ asset('storage/imagenes_product/' . $pro->image_path) }}" alt="{{ $pro->name }}" --}}
                                <img src="{{ asset($pro->image_path) }}" alt="{{ $pro->name }}"

                                     class="card-img-top mx-auto"
                                     style="height: 300px; width: 383px;display: block;left:-4px;position:relative;"
                                     alt="{{ $pro->image_path }}"
                                >
                                <div class="card-body"  style="text-align:center;font-family: system-ui;font-size:25px">
                                    <h6 class="card-title">
                                      
                                            {{ $pro->name }}
                                        
                                    </h6>
                                    <p>{{ number_format($pro->price, 0, ',', '.') }} COP</p>
                                    <!-- Agregar botón "Ver detalles" que abrirá el modal -->
                                    @if ($hasPurchased[$pro->id])
                                        {{-- {{ $pro->contenido }} --}}
                                        <div class="product-content">
                                            <button type="button" style="background-color:rgb(114, 255, 32); border:rgb(114, 255, 32);" class="btn btn-primary" data-toggle="modal" data-target="#productModal{{ $pro->id }}">
                                                Leer informe
                                            </button>
                                        </div>
                                        
                                    @else
                                    <button type="button" style="background-color:red;border:red;" class="btn btn-primary" data-toggle="modal" data-target="#productModal{{ $pro->id }}">
                                        Leer informe
                                    </button>
                                    @endif
                                   
                                    <br>
                                    <br>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                            <div class="row">
                                                @if ($hasPurchased[$pro->id])
                                                    
                                                    
                                                @else
                                                <button class="btn btn-secondary btn-sm" style="width: 480px;margin-left:15px;font-size:20px;" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                </button>
                                                @endif
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       <!-- Modal para detalles del producto -->
<div class="modal fade" id="productModal{{ $pro->id }}" tabindex="-1" role="dialog" aria-labelledby="productModalLabel{{ $pro->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel{{ $pro->id }}">
                    @if ($hasPurchased[$pro->id])
                        {{-- {{ $pro->contenido }} --}}
                        <div class="product-content">
                            {!! $pro->contenido !!}
                        </div>
                        
                    @else
                        PARA ACCEDER A ESTA INFORMACIÓN DEBES COMPRAR EL INFORME
                    @endif
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @if ($hasPurchased[$pro->id])
                <!-- Muestra toda la información del producto -->
                <div class="modal-body">
                    <!-- Detalles adicionales del producto si es necesario -->
                    <!-- Ejemplo: <p>Descripción: {{ $pro->descripcion }}</p> -->
                </div>
            @endif
        </div>
    </div>
</div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    @include('footer.boletin')
    <br>
    @include('footer.footer')
</body>
</html>
