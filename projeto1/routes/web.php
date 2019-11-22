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
 
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::prefix('users')->middleware('auth')->group(function() {
    Route::get('/', 'CursosController@index')->name('users.index')->middleware('auth');
});
/////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/cursos', 'CursosController@index')->name('cursos.index')->middleware('auth');
Route::get('/cursos/novo', 'CursosController@create')->name('cursos.create')->middleware('auth');
Route::post('/cursos', 'CursosController@store')->name('cursos.store')->middleware('auth');
Route::get('/cursos/edit/{id}', 'CursosController@edit')->name('cursos.edit')->middleware('auth');
Route::get('/cursos/vercurso/{id}', 'CursosController@vercurso')->name('cursos.vercurso')->middleware('auth');
Route::any('/cursos/{id}', 'CursosController@update')->name('cursos.update')->middleware('auth');
Route::delete('/cursos/{id}', 'CursosController@destroy')->name('cursos.destroy')->middleware('auth');
/////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/empresas', 'EmpresasController@index')->name('empresas.index')->middleware('auth');
Route::get('/empresas/novo', 'EmpresasController@create')->name('empresas.create')->middleware('auth');
Route::post('/empresas', 'EmpresasController@store')->name('empresas.store')->middleware('auth');
Route::get('/empresas/edit/{id}', 'EmpresasController@edit')->name('empresas.edit')->middleware('auth');
Route::get('/empresas/verempresa/{id}', 'EmpresasController@verempresa')->name('empresas.verempresa')->middleware('auth');
Route::any('/empresas/{id}', 'EmpresasController@update')->name('empresas.update')->middleware('auth');
Route::delete('/empresas/{id}', 'EmpresasController@destroy')->name('empresas.destroy')->middleware('auth'); 
/////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/estagiarios', 'EstagiariosController@index')->name('estagiarios.index')->middleware('auth');
Route::get('/estagiarios/novo', 'EstagiariosController@create')->name('estagiarios.create')->middleware('auth');
Route::post('/estagiarios', 'EstagiariosController@store')->name('estagiarios.store')->middleware('auth');
Route::get('/estagiarios/edit/{id}', 'EstagiariosController@edit')->name('estagiarios.edit')->middleware('auth');
Route::get('/estagiarios/verestagiario/{id}', 'EstagiariosController@verestagiario')->name('estagiarios.verestagiario')->middleware('auth');
Route::any('/estagiarios/{id}', 'EstagiariosController@update')->name('estagiarios.update')->middleware('auth');
Route::delete('/estagiarios/{id}', 'EstagiariosController@destroy')->name('estagiarios.destroy')->middleware('auth');
/////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/estagios', 'EstagiosController@index')->name('estagios.index')->middleware('auth');
Route::get('/estagios/novo', 'EstagiosController@create')->name('estagios.create')->middleware('auth');
Route::post('/estagios', 'EstagiosController@store')->name('estagios.store')->middleware('auth');
Route::get('/estagios/edit/{id}', 'EstagiosController@edit')->name('estagios.edit')->middleware('auth');
Route::get('/estagios/verestagio/{id}', 'EstagiosController@verestagio')->name('estagios.verestagio')->middleware('auth');
Route::any('/estagios/{id}', 'EstagiosController@update')->name('estagios.update')->middleware('auth');
Route::delete('/estagios/{id}', 'EstagiosController@destroy')->name('estagios.destroy')->middleware('auth');
/////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/professores', 'ProfessoresController@index')->name('professores.index')->middleware('auth');
Route::get('/professores/novo', 'ProfessoresController@create')->name('professores.create')->middleware('auth');
Route::post('/professores', 'ProfessoresController@store')->name('professores.store')->middleware('auth');
Route::get('/professores/edit/{id}', 'ProfessoresController@edit')->name('professores.edit')->middleware('auth');
Route::get('/professores/verprofessor/{id}', 'ProfessoresController@verprofessor')->name('professores.verprofessor')->middleware('auth');
Route::any('/professores/{id}', 'ProfessoresController@update')->name('professores.update')->middleware('auth');
Route::delete('/professores/{id}', 'ProfessoresController@destroy')->name('professores.destroy')->middleware('auth');
/////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/users', 'UserController@index')->name('users.index')->middleware('auth');
Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit')->middleware('auth');
Route::any('/users/{id}', 'UserController@update')->name('users.update')->middleware('auth');
Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy')->middleware('auth');
/////////////////////////////////////////////////////////////////////////////////////////////////////////
