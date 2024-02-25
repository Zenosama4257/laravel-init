<?php

use App\Http\Controllers\Api\ClientsController;
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

$controller_path = 'App\Http\Controllers';

// Main Page Route

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    $controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    Route::get('/clients', $controller_path . '\Api\ClientsController@index')->name('pages-clients');
    Route::post('/admin/clients/store', $controller_path . '\Api\ClientsController@store')->name('admin.clients.store');
    Route::put('/admin/clients/update/{id}', $controller_path . '\Api\ClientsController@update')->name('admin.clients.update');
    // Route::put('/admin/clients/update/{id}', '\Api\ClientsController@update')->name('admin.clients.update');

    Route::delete('/admin/clients/destroy/{id}', $controller_path . '\Api\ClientsController@destroy')->name('admin.clients.destroy');
    

});
