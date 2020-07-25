<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/vue', 'vueController@showVue')->name('showVue');
Route::post('/saveData', 'vueController@saveData')->name('saveData');
Route::post('/updateData', 'vueController@updateData')->name('updateData');
Route::get('/getData', 'vueController@getData')->name('getData');
Route::get('/getData/{id}', 'vueController@edit')->name('edit');
Route::get('/delete/{id}', 'vueController@delete')->name('delete');


Route::get('/{name}', function () {
    return redirect('/vue');
})->where('/{name}','[A-Za-z]');

Route::get('/', function () {
    return redirect('/vue');
});
