<?php
use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/home', function () {
//    return view('welcome');
// });


// Route::view('/jogos','jogos');


//      Route::get('/jogos',function(){
//      return "Testando rotas com get";
//      });


// Route::view('/jogos','jogos',['name'=>'Ismael']);

//  Route::get('/jogos/{name}', function($name){
//   return view('jogos',['nomeJogo'=>$name]);
//      });


//  Route::get('/jogos' , [JogosController::class, 'index']);

//  Route::get('/casa', function(){
//     return view ('welcome');
//  })->name('home-index');

//  ESSA PRIMEIRA ROTA É DE LISTAGEM PARA NOSSOS REGISTROS

Route::prefix('jogos')->group(function(){
    Route::get('/', [JogosController::class,'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class,'create'])->name('jogos-create');
    Route::post('/', [JogosController::class,'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class,'edit'])->where('id','[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class,'update'])->where('id','[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class,'destroy'])->where('id','[0-9]+')->name('jogos-destroy');
});

Route::fallback(function(){
    return "Erro de Rota!";
});





