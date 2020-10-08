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

use Modules\Application\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

\Illuminate\Support\Facades\Auth::routes();

Route::prefix('/',)->middleware('auth')->group(function() {
    Route::get('/', 'HomeController@index');
});
