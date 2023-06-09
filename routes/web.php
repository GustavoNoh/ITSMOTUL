<?php

use Illuminate\Support\Facades\Route;
use App\http\Livewire\Users;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    //Ruta de livewire
    Route::get('/users', Users::class)->name('users');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
