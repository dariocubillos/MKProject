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

Route::get('persona/{nombre?}', function ($nombre=null) {

if ($nombre) {
  // code...
  return 'welcome '.$nombre;
}else {
  // code...
  return 'welcome unix';
}

})->where(array('nombre'=>'[a-z-A-Z]+'));
