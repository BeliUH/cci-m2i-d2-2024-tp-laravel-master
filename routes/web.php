<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    Controller,
    MembersController,
    WelcomeController
};

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

// Route::get('/', function () {
//     echo (new \App\Http\Controllers\Controller())->index();
// });
// Route::get('/assosier', function () {
//     echo (new \App\Http\Controllers\AssocierControlleurs)->index();
// });
// Route::get('/assosier-creer', function () {
//     echo (new \App\Http\Controllers\AssocierControlleurs)->create();
// });
// Route::post('/assosier-creer-2', function () {
//     echo (new \App\Http\Controllers\AssocierControlleurs)->store();
// });
// Route::get('/assosier-show', function () {
//     echo (new \App\Http\Controllers\AssocierControlleurs)->show();
// });
// Route::get('/assosier-detruite', function () {
//     echo (new \App\Http\Controllers\AssocierControlleurs)->delete();
// });

Route::get('/membres/index', [MembersController::class, 'index'])
    ->name('membres.index')
    ->middleware('auth');

Route::get('/membres/create', [MembersController::class, 'create'])
    ->name('membres.create');

Route::post('/membres/store', [MembersController::class, 'store'])
    ->name('membres.store');

Route::get('/welcome', [WelcomeController::class, 'index'])
    ->name('welcome');