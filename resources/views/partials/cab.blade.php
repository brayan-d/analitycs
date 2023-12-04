<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Estilo para alinear a la derecha y dividir en 5 espacios iguales */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end; /* Alinea todo a la derecha */
        }

        .breadcrumb-item {
            flex: 1;
            text-align: right; /* Alinea el texto a la derecha */
            white-space: nowrap; /* Evita que el texto se divida en varias líneas */
        }

        /* Añade estilo adicional para resaltar el contenido */
        .breadcrumb-item b {
            font-size: 13px;
            font-weight: bold;
        }
        /* Estilo para hacer que la letra sea roja */
        .breadcrumb-item span.red-text {
            color: red;
        }
        .breadcrumb{
            width: 1466px;
            height: 25px;
            display: flex;
            justify-content: center;
            align-content: space-around;
            border-radius: 5px;
        }
        b{
            color: #2175aa;
        }
    </style>
</head>
<body>
<div class="container" style="margin-top: 40px; margin-left: 365px;">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><b>DOLAR +4.0 <span class="red-text">(+0.04%)</span></b></li>
            <li class="breadcrumb-item"><b>PETROLEO 88.50 +8.5 <span class="red-text">(+0.08%)</span></b></li>
            <li class="breadcrumb-item"><b>EURO 4.55 +3.5<span class="red-text"> (+0.03%)</span></b></li>
            <li class="breadcrumb-item"><b>ORO 99.50 +9.5 <span class="red-text">(+0.95%)</span></b></li>
            <li class="breadcrumb-item"><b>STP 3.50 +3.5 <span class="red-text">(+0.08%)</span></b></li>
        </ol>
    </nav>
</div>



</body>
</html>
