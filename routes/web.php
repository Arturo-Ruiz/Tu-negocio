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

Route::redirect('/', 'Inicio', 301);

Route::get('/Inicio', 'Web\IndexController@index')->name('index');

Route::get('/Iniciar-Sesion', 'Web\LoginFrontController@index')->name('login');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/Relizar-Pedido', 'Web\OrderController@index')->name('take-order');
























// ADMIN PANEL ROUTES

Route::get('Panel-Administrativo', 'Admin\PanelAdmin@index')->name('panel-admin');

Route::resource('Categories', 'Admin\CategoriesController');

Route::resource('Products', 'Admin\ProductsController');


Route::resource('Orders', 'Admin\OrdersController');

Route::any('Aprobar-Orden/{id}', 'Admin\OrdersController@Aprobar')->name('update-order');
Route::any('Cancelar-Orden/{id}', 'Admin\OrdersController@Cancelar')->name('cancel-order');

