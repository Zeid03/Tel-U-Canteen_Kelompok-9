<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/menu', function () {
  return view('menu');
});


Route::get('/outlet', function () {
  return view('outlet');
});

Route::get('/pesanan', function () {
  return view('pesanan');
});

Route::get('/detail', function () {
  return view('first-detail');
});
Route::get('/second-detail', function () {
  return view('second-detail');
});
Route::get('/third-detail', function () {
  return view('third-detail');
});

Route::get('/login', function () {
  return view('login');
});

Route::post('/login', [UsersController::class, 'login'])->name('login');
//Route::get('/', [UsersController::class, 'index'])->name('index');






// Route::get('/users', [UserController::class, 'index'])->name('users.index'); 

