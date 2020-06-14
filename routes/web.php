<?php

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

Route::get('/', function () {
    return 'home';
});

Route::get('/usuarios', function () {
    return 'usuarios';
});

Route::get('/usuarios/nuevo', function() {
    return "Creacion de nuevo usuario";
});

//Ruta para mostrar el detalle del usuario, con parametro dinamico, y validar que parametro sea un numero
Route::get('/usuarios/detalles/{id}', function($id) {
    return "Mostrando detalle del usuario:{$id}";
})->where('id', '[0-9]+');


//Ruta para mostrar el detalle del usuario, con parametro dinamico, y validar que un parametro sea opcional
Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null){

    if ($nickname){

        return "hola {$name}, tu apodo es {$nickname}";

    }else{

        return "hola {$name}, no tienes apodo";

    }

});
