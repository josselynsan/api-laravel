<?php

Use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//USUARIOS
Route::post('usuariosall', 'App\Http\Controllers\UsuarioController@index01');
Route::get('usuarios/{usuario}', 'App\Http\Controllers\UsuarioController@show');
//Route::get('usuarios/login/{email}{clave}', 'App\Http\Controllers\UsuarioController@login');
Route::post('usuarios/login', 'App\Http\Controllers\UsuarioController@login');
Route::post('usuarios', 'App\Http\Controllers\UsuarioController@store');
Route::patch('usuarios/{usuario}', 'App\Http\Controllers\UsuarioController@update');
Route::delete('usuarios/{usuario}', 'App\Http\Controllers\UsuarioController@delete');


//PERFIL
Route::get('perfils', 'App\Http\Controllers\PefilsController@indexperfils');




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
