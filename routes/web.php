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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function() {
    return view('admin');
});
Route::get('/help', function() {
    return view('help');
});
Route::get('/about', function() {
    return view('about');
});

/*
Route::get('livres/create', 'LivreController@create');
Route::post('livres', 'LivreController@store');
Route::get('livres/{id}/edit', 'LivreController@edit');
Route::put('livres/{id}', 'LivreController@update');
Route::delete('livres/{id}', 'LivreController@destory');
*/
Route::resource('ouvrages', 'OuvrageController');

Route::resource('rapports', 'RapportController');

Route::resource('librarys', 'LibraryController');

Route::get('/demandeouv', function() {
    return view('ouvrage.demandeouv');
});
Route::get('/demanderapp', function() {
    return view('rapport.demanderapp');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'OuvrageController@search')->name('search');


Auth::routes();



