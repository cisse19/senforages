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

/* Route::get('/', function () {
    return view('welcome');
}); */
// PAGE D'Accueil
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('layout.form');
});
Route::get('/test1', function () {
    return "HELLO";
});

Auth::routes();

Route::get('/clients/selectvillage', function () {
    return view('clients.selectvillage');
 })->name('clients.selectvillage');

 Route::get('/compteurs/create', function () {
    return view('compteurs.create');
 })->name('compteurs.create');

 Route::get('/consommations/create', function () {
    return view('consommations.create');
 })->name('consommations.create');

 use Carbon\Carbon;

 Route::get('carbon', function () {
    $date = Carbon::now();
    dump($date);
     $date->addDays(3);
    dump($date);
});




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/abonnements/selectcompteur', 'AbonnementController@selectcompteur')->name('abonnements.selectcompteur');
Route::get('/abonnements/selectclient', 'AbonnementController@selectclient')->name('abonnements.selectclient');
Route::get('/compteurs/listfree', 'CompteurController@listfree')->name('compteurs.listfree');
Route::get('/villages/list', 'VillageController@list')->name('villages.list');
Route::get('/clients/list', 'ClientController@list')->name('clients.list');
Route::get('/abonnements/list', 'AbonnementController@list')->name('abonnements.list');
Route::get('/compteurs/list', 'CompteurController@list')->name('compteurs.list');
Route::get('/agents/list', 'AgentController@list')->name('agents.list');
Route::get('/comptables/list', 'ComptableController@list')->name('comptables.list');
Route::get('/gestionnaires/list', 'GestionnaireController@list')->name('gestionnaires.list');
Route::get('/administrateurs/list', 'AdministrateurController@list')->name('administrateurs.list');
Route::get('/consommations/list', 'ConsommationController@list')->name('consommations.list');
Route::get('/consommations/list/{abonnement?}','ConsommationController@list')->name('consommations.list');



Route::resource('villages', 'VillageController');
Route::resource('clients', 'ClientController');
Route::resource('abonnements', 'AbonnementController');
Route::resource('compteurs', 'CompteurController');
Route::resource('agents', 'AgentController');
Route::resource('comptables', 'ComptableController');
Route::resource('gestionnaires', 'GestionnaireController');
Route::resource('administrateurs', 'AdministrateurController');
Route::resource('consommations', 'ConsommationController');




 



