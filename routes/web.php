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
//Minhas definições de rotas
 
Route::get('/', function () {return view('pessoas.master');});

Route::get('/pessoa/cadastrar','PessoaController@index');
Route::get('pessoa/visualizar','PessoaController@listar');
Route::post ('pessoa/salvar','PessoaController@salvar'); 
Route::get ('pessoa/excluir','PessoaController@excluir'); 
Route::get ('pessoa/grafico-sexo','PessoaController@graficoSexo'); 
Route::get ('pessoa/grafico-idade','PessoaController@graficoIdade'); 