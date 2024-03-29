<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PdfClass01Controller;
use App\Http\Controllers\PdfClass02Controller;
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
    // return view('welcome');
    return view('index');
});
// Route::get('/users', function () {
//     return view('users');
// });
// Route::get('/users', 'UsersController@index');
Route::get('/users', 'App\Http\Controllers\UsersController@index');
Route::get('/class01', 'App\Http\Controllers\Class01sController@index');
Route::post('/class01s', 'App\Http\Controllers\Class01sController@store');

Route::get('/class02', 'App\Http\Controllers\Class02sController@index');
Route::post('/class02s', 'App\Http\Controllers\Class02sController@store');

Route::get('/result', 'App\Http\Controllers\ResultController@index');
Route::post('/upload', 'App\Http\Controllers\Class01sController@handUpload');

Route::get('/', 'App\Http\Controllers\MainsController@index');

Route::get('/degree', 'App\Http\Controllers\DegreesController@index');
Route::post('/degree', 'App\Http\Controllers\DegreesController@store');
Route::post('/checkdegree', 'App\Http\Controllers\DegreesController@checkdegree');

Route::get('/getDate', 'App\Http\Controllers\getDataController@index');
Route::get('/getDate_multi', 'App\Http\Controllers\getDataController@getDate_multi');

Route::get('pdf01', [PdfClass01Controller::class, 'index']);
Route::get('pdf02', [PdfClass02Controller::class, 'index']);
// Route::post('pdf', [PdfController::class, 'store']);
// Route::resource('users', 'UsersController');