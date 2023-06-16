<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProducto;

use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[ControllerProducto::class, 'index'])->name('pro.index');
Route::get('/adminProductos',[ControllerProducto::class, 'adminProductos'])->name('pro.adminProductos');
//boton nuevo Producto
Route::get('/nuevoProducto',[ControllerProducto::class, 'nuevoProducto'])->name('pro.nuevoProducto');
Route::post('/nuevoRegistroProducto',[ControllerProducto::class, 'nuevoRegistroProducto'])->name('pro.nuevoRegistroProducto');

//boton eliminarProducto
Route::post('/eliminarProducto',[ControllerProducto::class, 'eliminarProducto'])->name('pro.eliminarProducto');

// boton editarProducto
Route::get('/editarProducto/{id}',[ControllerProducto::class, 'editarProducto'])->name('pro.editarProducto');
Route::post('/editarRegistroProducto',[ControllerProducto::class, 'editarRegistroProducto'])->name('pro.editarRegistroProducto');