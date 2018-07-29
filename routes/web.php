<?php
use IntelGUA\Library\Generate;
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
    return redirect()->guest('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('generar', function(){
    $gen = new Generate();
    $data = $gen->getNumbersGenerated(8000, true, 5);
    for ($i=0; $i < count($data); $i++) {
        echo $data[$i]  . "<br />";
    }

});
