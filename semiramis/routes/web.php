<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\LoginController;

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

/*Route::get('/', function () {
    return view('master');
});*/



//Route::get('/samiramis', [TemplateController::class, 'index'])->domain('samiramis.com');
///Route::get('/dashboard', [TemplateController::class, 'index'])->domain('samiramis.com');
///Route::get('/login', [LoginController::class, 'showLoginForm'])->domain('samiramis.com');
//Route::get('/samiramis', [TemplateController::class, 'index'])->domain('samiramis.com');
Route::domain('semiramis.com')->group(function () {
    Route::get('/dashboard', [TemplateController::class, 'index']);
    Route::get('/login', [LoginController::class, 'showLoginForm']);
});
