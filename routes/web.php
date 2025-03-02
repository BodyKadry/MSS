<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MokaController ;

Route::get('/', function () {return redirect('/home');});
Route::get('/home',  [MokaController::class, 'home'])->name('home');


Route::get('/login',  [MokaController::class, 'login_page'])->name('login_page');
Route::post('/login', [MokaController::class, 'login'])->name('login');
Route::post('/register', [MokaController::class, 'store'])->name('register.store');
