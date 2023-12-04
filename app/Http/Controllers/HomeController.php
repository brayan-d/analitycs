<?php

namespace App\Http\Controllers;
use App\Models\Icono;
use App\Models\Contenido;
use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $iconos = Icono::all();
        $contenido = Contenido::all();
        $productos= Product::all();
        $noticia= Noticia::all();

        return view('index', ['iconos' => $iconos, 'contenido' => $contenido, 'productos' => $productos, 'noticia' => $noticia]);
    }
}
