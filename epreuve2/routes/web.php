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
/*Route::get('/liste', function () {
return view('liste');
//return view('welcome');
});*/
Route::get('/liste{n?}', function($n=0) { 
return view('')->with('numero',$n);
});
Route::get('/index', function () {
return view('index');
});
Route::get('/matiere','MatController@affMat'); 
Route::get('/eprueve','EpreuveController@affEp');
?>
