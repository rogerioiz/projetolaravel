<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
//Pega Todos
Route::get('/usuarios', "api\UsuariosController@pegarTodos");
//Pega Um
Route::get('/usuarios/{id}', 'api\UsuariosController@pegarUm');
//Cria Um
Route::post('/usuarios', "api\UsuariosController@criarUm");
//Deleta um
Route::delete('/usuarios/{id}', "api\UsuariosController@deletarUm");
//Altera um
Route::put('/usuarios/{id}', "api\UsuariosController@alterarUm");