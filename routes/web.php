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

Route::get('/test', function () {
    return view('layout.form');
});
Route::get('/test1', function () {
    return "HELLO";
});
// Route::get('clients/selectvillage', function () {
//     return view('clients.selectvillage');
// })->name('clients.selectvillage');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/clients/list', 'ClientController@list')->name('clients.list');
// Route::get('/villages/list', 'VillageController@list')->name('villages.list');
// Route::resource('villages', 'VillageController');
// Route::resource('clients', 'ClientController');

Route::get('/clients/selectvillage', function () {
    return view('clients.selectvillage');
 })->name('clients.selectvillage');

 Route::get('/compteurs/create', function () {
    return view('compteurs.create');
 })->name('compteurs.create');
 
 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/clients/list', 'ClientController@list')->name('clients.list');
 Route::get('/villages/list', 'VillageController@list')->name('villages.list');
 Route::get('/compteurs/list', 'CompteurController@list')->name('compteurs.list');
 Route::get('/gestionnaires/list', 'GestionnaireController@list')->name('gestionnaires.list');
 Route::get('/abonnements/list', 'AbonnementController@list')->name('abonnements.list');
 Route::get('/consommations/list', 'ConsommationController@list')->name('consommations.list');
 Route::get('/abonnements/selectcompteur', 'AbonnementController@selectcompteur')->name('abonnements.selectcompteur');
 Route::get('/abonnements/selectclient', 'AbonnementController@selectclient')->name('abonnements.selectclient');
 Route::get('/compteurs/listfree', 'CompteurController@listfree')->name('compteurs.listfree');


 Route::resource('villages', 'VillageController');
 Route::resource('clients', 'ClientController');
 Route::resource('compteurs', 'CompteurController');
 Route::resource('gestionnaires', 'GestionnaireController');
 Route::resource('abonnements', 'AbonnementController');

 