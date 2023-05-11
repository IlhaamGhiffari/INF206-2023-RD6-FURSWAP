<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;


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

Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');

Route::get('/', function () {
    return view('welcome');
});



Route::resource('/produks', ProdukController::class);

Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('produks');
    })->name('produks');
});
