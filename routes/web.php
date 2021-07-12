<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\attivitaController;
use App\attivita;
use Symfony\Component\Console\Input\Input;


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


    return view('index');
});

Route::post('/pagina-admin', function (Request $request) {
if ($request->has('passwordname')){
    if ($request->passwordname=="passw0rdd"){
        $listaAttivita = App\attivita::where("attivato",0)->get();

        return view('adminconf', ["listaAttivita" => $listaAttivita]);
    }
}
return view("index");

});

Route::get('/nuova-attivita', function () {
    return view('nuova-attivita');
});Route::get('/admin', function () {
    return view('password');
});
Route::post('/inserisci-attivita', 'attivitaController@saveAttivita');
Route::post('/conferma-attivita', 'attivitaController@confermaAttivita');

