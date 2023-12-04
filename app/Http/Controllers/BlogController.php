<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //

    public function formularioCargaBlog()
    {
        return view('blog');
    }
    public function blog()
    {
        $noticias = Noticia::paginate(6); // Muestra 6 noticias por página
        return view('blog', compact('noticias'));
    }
}

