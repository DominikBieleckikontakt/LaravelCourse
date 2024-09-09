<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

// HOME ROUTE

Route::view('/', 'home');

// CONTACT ROUTE

Route::view('/contact', 'contact');

// JOBS ROUTES

Route::controller(JobController::class)->group(function () {
  Route::get('/jobs', 'index');
  Route::get('/jobs/create', 'create');
  Route::get('/jobs/{job}', 'show');
  Route::post('/jobs', 'store')->middleware('auth');

  Route::get('/jobs/{job}/edit', 'edit')
    ->middleware('auth')
    ->can('edit', 'job');

  Route::patch('/jobs/{job}', 'update');
  Route::delete('/jobs/{job}', 'destroy');
});

// Route::resource('jobs', JobController::class);

// AUTH
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);