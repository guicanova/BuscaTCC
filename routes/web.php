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
use App\Tema;
Route::get('/', function () {

  $temas = Tema::all();
  $pesquisa = 0;
  $mestrado = 0;
  $doutorado = 0;
  $graduacao = 0;
  $especializacao = 0;
  foreach ($temas as $tema ) {
    switch ($tema->nivel) {
      case 'pesquisa':
        $pesquisa++;
        break;
      case 'graduação':
        $graduacao++;
        break;
      case 'mestrado':
        $mestrado++;
        break;
      case 'doutorado':
        $doutorado++;
        break;
      case 'especialização':
        $especializacao++;
        break;
      default:
        break;
    }
  }
  $ultimos = Tema::orderBy('created_at', 'desc')->take(5)->get();
  return view('welcome', ['pesquisa' => $pesquisa,
                          'graduacao' => $graduacao,
                          'mestrado' => $mestrado,
                          'doutorado' => $doutorado,
                          'especializacao' => $especializacao,
                          'ultimos' => $ultimos,
                        ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contato', 'EnviaMensagemController@contato')->name('contato');
Route::post('enviarMensagem', 'EnviaMensagemController@enviarMensagem')->name('enviarMensagem');

Route::get('/inserirTema', 'TemaController@formularioInserirTema')->name('inserirTema')->middleware('auth');
Route::post('inserirTema', 'TemaController@inserirTema')->middleware('auth');

Route::get('/verTemas', 'TemaController@verTemas')->name('verTemas');
Route::get('/verTemas/orderBy={order}/for={for}', 'TemaController@verTemasOrderBy')->name('verTemasOrderBy');
Route::get('/verTemas/nivel={nivel}', 'TemaController@verTemasNivel')->name('verTemasNivel');

Route::get('/teste', function() {
  return view('teste');
})->name('teste');
