<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CommentController;
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

//Halman Home
Route::get('/home',[HomeController::class,'Home']);

//Halaman Prodi
Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika',[ProdiController::class,'mi']);

    Route::get('/teknik-informatika',[ProdiController::class,'ti']);
});

//Halaman News
Route::get('/news/{id}',[NewsController::class,'News']);

//Halaman Sarana
Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran',[SaranaController::class,'kantor']);

    Route::get('/laboratorium',[SaranaController::class,'lab']);

    Route::get('/kelas',[SaranaController::class,'kelas']);

    Route::get('/lainnya',[SaranaController::class,'lain']);
});

//hALMAN about us
Route::get('/about',[AboutUsController::class,'About']);

//Halaman Comment
Route::get('/comment/{nama}/{pesan}',[CommentController::class,'Comment']);