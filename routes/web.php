<?php

use App\Http\Controllers\admin\ArticlesAdmController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EnviaEmailController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "index"]);
Route::get('/artigos', [ArticlesController::class, "index"]);
Route::get('/artigo/{id}/{permalink}', [ArticlesController::class, "detail"]);

//Painel de admin
Route::view('/admin/login', 'admin.login.form')->name('login.form');
Route::post('/admin/auth', [LoginController::class, 'auth'])->name('login.auth');

Route::middleware('validaLogin')->group(function(){
    Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth');
    Route::resource('/admin/artigos', ArticlesAdmController::class);

    Route::get('admin/logout', [LoginController::class, 'logout']);
    //rota para enviar um email
    Route::get('/admin/mail', [EnviaEmailController::class, 'index']);

});