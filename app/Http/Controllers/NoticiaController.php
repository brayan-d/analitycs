<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    //
    public function formularioCargaNoticia()
    {
        return view('ADMIN.subir-noticia');
    }

    public function guardarNoticia(Request $request)
    {
        $noticia = new Noticia();
        $noticia->titulo_noticia = $request->input('titulo_noticia');
        $noticia->texto_corto = $request->input('texto_corto');
        $noticia->texto_largo = $request->input('texto_largo');
        $noticia->fecha_noticia = $request->input('fecha_noticia');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/imagenes_noticias', $imageName);
            $noticia->image_noticia = 'storage/imagenes_noticias/' . $imageName;
        }
    
        $noticia->save();
    
        return redirect('index')->with('success', 'contenido subido con éxito');
    }
    
    public function mostrarNoticia()
{
    $noticia = Noticia::all(); // Obtén todos los productos desde la base de datos
    return view('ADMIN.ver-noticia', ['noticia' => $noticia]);
}

public function editarNoticia($id)
{
    // Aquí debes recuperar el producto con el ID proporcionado y pasarlos a la vista de edición
    $noticia = Noticia::find($id);
    return view('ADMIN.editar-noticia', ['noticia' => $noticia]);
}

public function actualizarNoticia(Request $request, $id)
{
    // Recupera el producto con el ID proporcionado
    $noticia = Noticia::find($id);

    $noticia->titulo_noticia = $request->input('titulo_noticia');
    $noticia->texto_corto = $request->input('texto_corto');
    $noticia->texto_largo = $request->input('texto_largo');
    $noticia->fecha_noticia = $request->input('fecha_noticia');

    if ($request->hasFile('new_image')) {
        // Procesa la nueva imagen si se ha cargado
        $image = $request->file('new_image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('public/imagenes_noticias', $imageName);
        $noticia->image_noticia = 'storage/imagenes_noticias/' . $imageName;
    }

    // Actualiza otros campos según sea necesario.
    $noticia->save();

    // Redirige de nuevo a la lista de productos con un mensaje de éxito.
    return redirect()->route('admin.ver-noticia')->with('success', 'noticia actualizada con éxito');
}

public function eliminarNoticia($id)
{
    try {
        // Busca el producto por ID y elimínalo
        $noticia = Noticia::find($id);
        $noticia->delete();

        return redirect()->route('admin.ver-noticia')->with('success', 'noticia eliminada con éxito');
    } catch (\Exception $e) {
        return redirect()->route('admin.ver-noticia')->with('error', 'No se puede eliminar la noticia debido a restricciones de clave externa.');
    }
}

}
