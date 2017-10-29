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
    return view('welcome');
});

Route::get('/home','HomeController@index');

Auth::routes();

Route::prefix('animal')->group(function () {
    Route::get('{id}', 'AnimalController@index');
    Route::get('{id}/adota', 'AnimalController@adota')->middleware('auth');
    Route::post('cadastra','AnimalController@cadastra')->middleware('auth');
});

Route::get('animais','AnimaisController@busca');

/*
 * Rotas
 * GET /animal/{id} -> Retorna JSON animal
 * GET /animal/{id}/adota -> adota animal (redireciona para login se nao autenticado);
 * GET /animal/cadastra -> recebe parametros e retorna json com error ou success
 *
 *
 * */
