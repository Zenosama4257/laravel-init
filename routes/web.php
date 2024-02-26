<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CupsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UnitpricesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    $controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');
    Route::resource('users', UsersController::class);
    Route::resource('clients', ClientsController::class);
    Route::resource('unitprices', UnitpricesController::class);
    Route::resource('services', ServiceController::class);

    // Rutas para listar y crear clientes
    Route::get('/admin/clients', 'ClientsController@index')->name('admin.clients.index');
    Route::get('/admin/clients/create', 'ClientsController@create')->name('admin.clients.create');
    Route::post('/admin/clients', 'ClientsController@store')->name('admin.clients.store');

    // Rutas para mostrar, editar y eliminar clientes
    Route::get('/admin/clients/{client}', 'ClientsController@show')->name('admin.clients.show');
    Route::get('/admin/clients/{client}/edit', 'ClientsController@edit')->name('admin.clients.edit');
    Route::put('/admin/clients/{client}', 'ClientsController@update')->name('admin.clients.update');
    Route::delete('/admin/clients/{client}', 'ClientsController@destroy')->name('admin.clients.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/delete/client_id' , [CupsController::class,'delete'])->name('delete_cup');