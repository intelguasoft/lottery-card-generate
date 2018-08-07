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

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get("admin/ballots1", "CardsController@getBallots")->middleware('auth');
Route::get("admin/boletas", "CardsController@index")->middleware('auth');
Route::get("admin/recta", "CardsController@rectangulos")->middleware('auth');
Route::post("admin/boletas", "CardsController@boletas")->middleware('auth');
