<?php

use App\Http\Controllers\BlogController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IconoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\BoletinController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\NoticiaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// index
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
})->name('index');
// carrito
Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');


// inicio sesion
// routes login
Route::view('/login',"LOGIN.login")->name('login');
Route::view('/registro', "LOGIN.register")->name('registro');
//middleware verifica si inicio sesion
Route::view('/privada',"LOGIN.secret")->middleware('auth')->name('privada');
Route::view('/admin',"ADMIN.admin")->middleware('auth')->name('admin');
// validar login
Route::post('/validar-registro',[loginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// redes sociales
Route::get('/instagram', function () {
    return redirect()->away('https://www.instagram.com/analitica_solidaria/');
})->name('instagram');

Route::get('/wpp', function () {
    return redirect()->away('https://api.whatsapp.com/send/?phone=573012159933&text=Hola+Quiero+conocer+m%C3%A1s+Anal%C3%ADtica+Solidaria&type=phone_number&app_absent=0');
})->name('wpp');

Route::get('/email', function () {
    return redirect()->away('mailto:esteban.analista riesgosyanaliticasolidaria.onmicrosft.com');
})->name('email');

Route::get('/location', function () {
    return redirect()->away('https://www.google.com.co/maps/search/Cra+76A+/@6.2383192,-75.5953407,14z/data=!3m1!4b1?entry=ttu');
})->name('location');

Route::get('/tel', function () {
    return redirect()->away('tel:3012159933');
})->name('tel');

//view
Route::view('/cifras',"cifrasG")->name('cifras');
Route::view('/estadisticas',"estadisticas")->name('estadisticas');
Route::view('/riesgos',"riesgos")->name('riesgos');
Route::view('/informes',"informes")->name('informes');
Route::view('/ver_productos','ADMIN.ver_productos')->name('ver_productos');

// contacto
Route::post('/validar-contact',[ContactoController::class,'contacto'])->name('validar-contact');
Route::view('/contacto',"contacto")->name('contacto');

//boletin
Route::view('/boletin',"boletin")->name('boletin');
Route::post('/validar-boletin',[BoletinController::class,'boletin'])->name('validar-boletin');

// 
Route::get('/cart/success',[CartController::class,'success'])
->middleware('auth')
->name('pedido.success');

Route::get('/cart/proceso',[CartController::class,'procesopedido'])
->middleware('auth')
->name('pedido.proceso');

Route::get('/mis-compras', [CartController::class, 'misCompras'])
    ->middleware('auth')
    ->name('mis-compras');
// 
Route::get('/admin/subir-producto', [ProductoController::class,'formularioCarga'])->name('admin.subir-producto');
Route::post('/admin/guardar-producto', [ProductoController::class,'guardarProducto'])->name('admin.guardar-producto');
Route::get('/ver_productos', [ProductoController::class, 'mostrarProductos'])->name('admin.ver-productos');
Route::get('/admin/editar-producto/{id}', [ProductoController::class, 'editarProducto'])->name('admin.editar-producto');
Route::put('/admin/actualizar-producto/{id}', [ProductoController::class, 'actualizarProducto'])->name('admin.actualizar-producto');
Route::delete('/admin/eliminar-producto/{id}', [ProductoController::class, 'eliminarProducto'])->name('admin.eliminar-producto');
// 
Route::get('/admin/ver-usuarios', [UserController::class,'verUsuarios'])->name('admin.ver-usuarios');
Route::get('/admin/editar-usuario/{id}', [UserController::class,'editarUsuario'])->name('admin.editar-usuario');
Route::put('/admin/actualizar-usuario/{id}', [UserController::class,'actualizarUsuario'])->name('admin.actualizar-usuario');
// 
Route::get('/pedidos-y-detalles', [PedidoController::class,'mostrarPedidosYDetalles'])->name('admin.pedidos-y-detalles');
// 
Route::get('/admin/subir_icono', [IconoController::class,'formularioCargaIcono'])->name('admin.subir_icono');
Route::post('/admin/guardar-icono', [IconoController::class,'guardarIcono'])->name('admin.guardar-icono');
Route::get('/ver-iconos', [IconoController::class, 'mostrarIcono'])->name('admin.ver-iconos');
Route::get('/admin/editar-icono/{id}', [IconoController::class, 'editarIcono'])->name('admin.editar-icono');
Route::put('/admin/actualizar-icono/{id}', [IconoController::class, 'actualizarIcono'])->name('admin.actualizar-icono');
Route::delete('/admin/eliminar-icono/{id}', [IconoController::class, 'eliminarIcono'])->name('admin.eliminar-icono');
// Route::get('/index', [IconoController::class, 'mostrarIndex'])->name('index');
// 
Route::get('/admin/subir-contenido', [ContenidoController::class,'formularioCargaContenido'])->name('admin.subir-contenido');
Route::post('/admin/guardar-contenido', [ContenidoController::class,'guardarContenido'])->name('admin.guardar-contenido');
Route::get('/ver-contenido', [ContenidoController::class, 'mostrarContenido'])->name('admin.ver-contenido');
Route::get('/admin/editar-contenido/{id}', [ContenidoController::class, 'editarContenido'])->name('admin.editar-contenido');
Route::put('/admin/actualizar-contenido/{id}', [ContenidoController::class, 'actualizarContenido'])->name('admin.actualizar-contenido');
Route::delete('/admin/eliminar-contenido/{id}', [ContenidoController::class, 'eliminarContenido'])->name('admin.eliminar-contenido');
// Route::get('/index', [ContenidoController::class, 'mostrarIndexContenido'])->name('index');
// 
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/', [HomeController::class, 'index'])->name('index');

// 
Route::get('/admin/subir-noticia', [NoticiaController::class,'formularioCargaNoticia'])->name('admin.subir-noticia');
Route::post('/admin/guardar-noticia', [NoticiaController::class,'guardarNoticia'])->name('admin.guardar-noticia');
Route::get('/ver-noticia', [NoticiaController::class, 'mostrarNoticia'])->name('admin.ver-noticia');
Route::get('/admin/editar-noticia/{id}', [NoticiaController::class, 'editarNoticia'])->name('admin.editar-noticia');
Route::put('/admin/actualizar-noticia/{id}', [NoticiaController::class, 'actualizarNoticia'])->name('admin.actualizar-noticia');
Route::delete('/admin/eliminar-noticia/{id}', [NoticiaController::class, 'eliminarNoticia'])->name('admin.eliminar-noticia');
// 
Route::get('/blog', [BlogController::class,'formularioCargaBlog'])->name('blog');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');